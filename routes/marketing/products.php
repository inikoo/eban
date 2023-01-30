<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 30 Jan 2023 09:49 Malaga, Spain
 * Copyright (c) 2023, Inikoo Ltd
 */

use App\Actions\UI\Guest\DisplayAdwords;
use App\Actions\UI\Guest\DisplayBanners;
use App\Actions\UI\Guest\DisplayEmailMarketing;
use App\Actions\UI\Guest\DisplaySeo;
use Illuminate\Support\Facades\Route;
use App\Actions\UI\Guest\DisplayProducts;


Route::get('/', DisplayProducts::class)->name('index');

Route::get('/adwords', DisplayAdwords::class)->name('adwords');

Route::get('/seo', DisplaySeo::class)->name('seo');

Route::get('/emailmarketing', DisplayEmailMarketing::class)->name('emailmarketing');

Route::get('/banners', DisplayBanners::class)->name('banners');






