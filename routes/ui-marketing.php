<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Wed, 11 Jan 2023 15:22:12 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

use App\Actions\UI\Guest\DisplayAbout;
use App\Actions\UI\Guest\DisplayAdwords;
use App\Actions\UI\Guest\DisplayBanners;
use App\Actions\UI\Guest\DisplayCompany;
use App\Actions\UI\Guest\DisplayContact;
use App\Actions\UI\Guest\DisplayEmailMarketing;
use App\Actions\UI\Guest\DisplayFeatures;
use App\Actions\UI\Guest\DisplayHome;
use App\Actions\UI\Guest\DisplayHomePageTest;
use App\Actions\UI\Guest\DisplayMarketing;
use App\Actions\UI\Guest\DisplayPricingPage;
use App\Actions\UI\Guest\DisplayPrivacy;
use App\Actions\UI\Guest\DisplaySeo;
use App\Actions\UI\Guest\DisplayTerms;
use Illuminate\Support\Facades\Route;


Route::get('/', DisplayHome::class)->name('home');


Route::prefix('products')->name('products.')->group(function () {
    require __DIR__."/marketing/products.php";
});

Route::get('/features', DisplayFeatures::class)->name('features');

Route::get('/company', DisplayCompany::class)->name('company');

Route::get('/marketing', DisplayMarketing::class)->name('marketing');

Route::get('/pricing', DisplayPricingPage::class)->name('pricing');

Route::get('/about', DisplayAbout::class)->name('about');

Route::get('/privacy', DisplayPrivacy::class)->name('privacy');

Route::get('/terms', DisplayTerms::class)->name('terms');

Route::get('/homepagetest', DisplayHomePageTest::class)->name('homespagetest');

Route::get('/contact', DisplayContact::class)->name('contact');
























