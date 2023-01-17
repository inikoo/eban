<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Wed, 11 Jan 2023 15:22:12 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

use App\Actions\UI\Guest\DisplayFeatures;
use App\Actions\UI\Guest\DisplayHome;
use App\Actions\UI\Guest\DisplayProducts;
use Illuminate\Support\Facades\Route;


Route::get('/', DisplayHome::class)->name('home');

Route::get('/products', DisplayProducts::class)->name('products');

Route::get('/features', DisplayFeatures::class)->name('features');





