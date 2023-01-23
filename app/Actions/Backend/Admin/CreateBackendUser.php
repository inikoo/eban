<?php
/*
 *  Author: Raul Perusquia <raul@inikoo.com>
 *  Created: Thu, 22 Sept 2022 12:55:08 Malaysia Time, Kuala Lumpur, Malaysia
 *  Copyright (c) 2022, Raul A Perusquia Flores
 */

namespace App\Actions\Backend\Admin;


use App\Actions\Backend\BackendUser\StoreBackendUser;
use App\Models\Backend\Admin;
use App\Rules\AlphaDashDot;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Lorisleiva\Actions\Concerns\AsCommand;
use Lorisleiva\Actions\Concerns\WithAttributes;


class CreateBackendUser
{

    use asCommand;
    use WithAttributes;

    public string $commandSignature = 'create:admin-user
    {code : will be used as username}
    {name}
    {email}
    {--u|username= : use instead of code argument}
    {--a|autoPassword : generate random password}';

    public function getCommandDescription(): string
    {
        return 'Create admin user.';
    }

    public function rules(): array
    {
        return [
            'code'     => ['required', new AlphaDashDot, 'unique:App\Models\Backend\Admin,code'],
            'password' => ['required', app()->isLocal() ? null : Password::min(8)->uncompromised()],
            'name'     => 'sometimes|required',
            'email'    => ['required', 'email', 'unique:App\Models\Backend\Admin,email'],
            'username' => ['sometimes', 'required', new AlphaDashDot, 'unique:App\Models\Backend\BackendUser,username'],

        ];
    }

    public function prepareForValidation(): void
    {
        if (!$this->has('username')) {
            $this->fill(['username' => $this->get('code')]);
        }
    }


    public function asCommand(Command $command): int
    {
        if ($command->option('autoPassword')) {
            $password = (app()->isLocal() ? 'hello' : wordwrap(Str::random(), 4, '-', true));
        } else {
            $password = $command->ask('What is the password?');
        }

        $this->fill([
                        'code'     => $command->argument('code'),
                        'password' => $password,
                        'name'     => $command->argument('name'),
                        'email'    => $command->argument('email'),
                    ]);

        $option = 'username';
        if ($command->option($option)) {
            $this->fill([$option => $command->option($option)]);
        }


        $validatedData = $this->validateAttributes();


        $admin = $this->handle($validatedData);
        $command->line("Account admin created $admin->code");

        $command->table(
            ['Code', 'Username', 'Password'],
            [
                [
                    $admin->code,
                    $admin->backendUser->username,
                    ($command->option('autoPassword') ? Arr::get($validatedData, 'password') : '*****'),
                ],

            ]
        );

        return 0;
    }

    public function handle($modelData): Admin
    {
        $admin = StoreAdmin::run(Arr::only($modelData, ['code', 'name', 'email']));

        StoreBackendUser::run(
            $admin,
            Arr::only($modelData, ['username', 'password'])
        );

        return $admin;
    }
}
