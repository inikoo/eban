<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 23 Jan 2023 20:10:05 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Lorisleiva\Actions\Facades\Actions;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            Actions::registerCommands();
        }

        Relation::morphMap(
            [
                'Admin'       => 'App\Models\Backend\Admin',
                'BackendUser' => 'App\Models\Backend\BackendUser',
            ]
        );
    }
}
