<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Wed, 11 Jan 2023 15:22:12 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

use App\Actions\UI\Guest\DisplayAbout;
use App\Actions\UI\Guest\DisplayCategoryFilters;
use App\Actions\UI\Guest\DisplayCategoryPreviews;
use App\Actions\UI\Guest\DisplayCheckoutForms;
use App\Actions\UI\Guest\DisplayContact;
use App\Actions\UI\Guest\DisplayHome;
use App\Actions\UI\Guest\DisplayIncentives;
use App\Actions\UI\Guest\DisplayOrderHistory;
use App\Actions\UI\Guest\DisplayOrderSummary;
use App\Actions\UI\Guest\DisplayPricingPage;
use App\Actions\UI\Guest\DisplayPrivacy;
use App\Actions\UI\Guest\DisplayProductFeatures;
use App\Actions\UI\Guest\DisplayProductList;
use App\Actions\UI\Guest\DisplayTerms;
use Illuminate\Support\Facades\Route;


Route::get('/', DisplayHome::class)->name('home');


Route::prefix('services')->name('products.')->group(function () {
    require __DIR__ . "/marketing/services.php";
});



Route::get('/pricing', DisplayPricingPage::class)->name('pricing');

Route::get('/about', DisplayAbout::class)->name('about');

Route::get('/privacy', DisplayPrivacy::class)->name('privacy');

Route::get('/terms', DisplayTerms::class)->name('terms');

Route::get('/contact', DisplayContact::class)->name('contact');

Route::get('/categoryfilters', DisplayCategoryFilters::class)->name('categoryfilters');

Route::get('/categorypreviews', DisplayCategoryPreviews::class)->name('categorypreviews');

Route::get('/checkoutforms', DisplayCheckoutForms::class)->name('checkoutforms');

Route::get('/incentives', DisplayIncentives::class)->name('incentives');

Route::get('/orderhistory', DisplayOrderHistory::class)->name('orderhistory');

Route::get('/ordersummary', DisplayOrderSummary::class)->name('ordersummary');

Route::get('/productfeatures', DisplayProductFeatures::class)->name('productfeatures');

Route::get('/productlist', DisplayProductList::class)->name('productlist');
































