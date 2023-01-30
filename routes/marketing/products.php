<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 30 Jan 2023 09:49 Malaga, Spain
 * Copyright (c) 2023, Inikoo Ltd
 */
use Illuminate\Support\Facades\Route;
use App\Actions\UI\Guest\DisplayProducts;


Route::get('/', DisplayProducts::class)->name('index');

Route::get('/adwords', DisplayProducts::class)->name('adwords');



