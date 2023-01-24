<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 23 Jan 2023 21:20:42 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->name('api.')->group(function () {

    Route::prefix('deployments')
        ->name('deployments.')
        ->group(__DIR__.'/deployments.php');


});
