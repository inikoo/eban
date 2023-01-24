{{--
//  Author: Raul Perusquia <raul@inikoo.com>
//  Created: Mon, 23 Jan 2023 12:31 Malaysia Time, Kuala Lumpur, Malaysia
//  Copyright (c) 2023, Inikoo
//  Version 4.0
--}}

@include('../../vendor/autoload.php')


@setup
$dotenv = Dotenv\Dotenv::createImmutable('../../');
$dotenv->load();



// Sanity checks

if (empty($_ENV['DEPLOYMENT_HOST'])) {
exit('ERROR: DEPLOYMENT_HOST var empty or not defined');
}
$host=$_ENV['DEPLOYMENT_HOST'];

if (empty($_ENV['DEPLOYMENT_USER'])) {
exit('ERROR: DEPLOYMENT_USER var empty or not defined');
}
$user=$_ENV['DEPLOYMENT_USER'];

if (empty($_ENV['DEPLOYMENT_PATH'])) {
exit('ERROR: DEPLOYMENT_PATH var empty or not defined');
}

if(!$env){
    $env='staging';
}

$api_url='';
$api_key='';
if($env=='production'){
    $api_url=$_ENV['PRODUCTION_API_URL'];
    $api_key=$_ENV['PRODUCTION_API_KEY'];
}elseif($env=='staging'){
    $api_url=$_ENV['STAGING_API_URL'];
    $api_key=$_ENV['STAGING_API_KEY'];
}


if (empty($_ENV['PRODUCTION_ADMIN_EMAIL'])) {
exit('ERROR: PRODUCTION_ADMIN_EMAIL var empty or not defined');
}
$adminEmail=$_ENV['PRODUCTION_ADMIN_EMAIL'];

if (empty($_ENV['PRODUCTION_ADMIN_CODE'])) {
exit('ERROR: PRODUCTION_ADMIN_CODE var empty or not defined');
}
$adminCode=$_ENV['PRODUCTION_ADMIN_CODE'];

if (empty($_ENV['PRODUCTION_ADMIN_NANE'])) {
exit('ERROR: PRODUCTION_ADMIN_NANE var empty or not defined');
}
$adminName=$_ENV['PRODUCTION_ADMIN_NANE'];

$base_path=$_ENV['DEPLOYMENT_PATH'];
$path=$base_path.'/'.$env;


$date = ( new DateTime )->format('Y-m-d_H_i_s');


$releases_dir = $path . '/releases';
$repo_dir = $base_path . '/repo';
$new_release_dir = $releases_dir . '/' . $date;

// Command or path to invoke PHP
$php = empty($php) ? 'php8.2' : $php;
$branch = empty($branch) ? 'main' : $branch;

$deployment_key=null;

$skip_build=false;

@endsetup

@servers(['server' => $user.'@'.$host,'localhost' => '127.0.0.1'])

@task('install', ['on' => 'server','confirm' => true])

sudo rm -rf {{ $path }}/storage
sudo rm -rf {{$releases_dir}}/*
mkdir -p {{ $new_release_dir }}
mkdir -p {{ $new_release_dir }}/public/


echo "***********************************************************************"
echo "* Pulling repo *"
cd {{$repo_dir}}
git pull origin {{ $branch }}

cp -R {{$repo_dir}}/storage {{ $path }}
sudo chgrp -R www-data {{ $path }}/storage
sudo chmod g+s {{ $path }}/storage



echo "***********************************************************************"
echo "* copy code from {{ $repo_dir }} to {{ $new_release_dir }} *"

rsync   -rlptgoDPzSlh  --no-p --chmod=g=rwX  --delete  --stats --exclude-from={{ $repo_dir }}/devops/deployment/deployment-exclude-list.txt {{ $repo_dir }}/ {{ $new_release_dir }}
sudo chgrp www-data {{ $new_release_dir }}/bootstrap/cache

ln -nsf {{ $base_path }}/env.{{$env}} {{ $new_release_dir }}/.env
ln -nsf {{ $path }}/storage {{ $new_release_dir }}/storage
ln -nsf {{ $path }}/storage/app/public {{ $new_release_dir }}/public/storage

echo "***********************************************************************"
echo "* Composer install *"
cd {{$new_release_dir}}
{{$php}} /usr/local/bin/composer install --no-ansi --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader --prefer-dist

echo "***********************************************************************"
echo "* NPM install *"
cd {{$new_release_dir}}
npm install

echo "***********************************************************************"
echo "* build VUE *"
cd {{$new_release_dir}}
ln -sf {{ $base_path }}/assets/private/ {{ $new_release_dir }}/resources
npm run build


echo "***********************************************************************"
echo '* Clearing cache and optimising *'

cd {{ $new_release_dir }}


{{$php}} artisan key:generate --force
{{$php}} artisan migrate:refresh --force
{{$php}} artisan db:seed --force
{{$php}} artisan optimize:clear --quiet
{{$php}} artisan create:first-deployment
echo "A3"
{{$php}} artisan create:admin-user {{ $adminCode }} '{{ $adminName }}' {{ $adminEmail }} -a
{{$php}} artisan create:admin-token {{ $adminCode }} admin root

echo "***********************************************************************"
echo '* Clearing cache and optimising *'

cd {{ $new_release_dir }}
{{ $php }} artisan --version


cd {{ $new_release_dir }}
{{ $php }} artisan optimize:clear --quiet
{{$php}}  /usr/local/bin/composer dump-autoload -o
echo "Queue restarted"
#{{ $php }} artisan queue:restart --quiet

# Only use when no closure used in routes
{{ $php }} artisan optimize
{{ $php }} artisan route:cache

rm -rf node_modules


echo "***********************************************************************"
echo "* Activating new release ({{ $new_release_dir }} -> {{ $path }}/current *"
ln -nsf {{ $new_release_dir }} {{ $path }}/current





@endtask





@error
if ($task === 'deploy') {
// ...
}
@enderror
