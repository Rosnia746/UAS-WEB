<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'HomeController');
Route::resource('/news', 'NewsPageController');
Route::resource('/features', 'FeaturesPageController');
Route::resource('/screenshots', 'ScreenshotsPageController');
Route::resource('/ourhistory', 'OurhistoryPageController');
Route::resource('/ourteam', 'OurteamPageController');
Route::resource('/peopleloveus', 'PeopleloveusPageController');
Route::resource('/housingcounseling', 'HousingcounselingPageController');
Route::resource('/pricing', 'PricingPageController');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
    Route::resource('/', 'DashboardController');
    Route::resource('/news', 'NewsController');
    Route::resource('/features', 'FeaturesController');
    Route::resource('/screenshots', 'ScreenshotsController');
    Route::resource('/ourhistory', 'OurhistoryController');
    Route::resource('/ourteam', 'OurteamController');
    Route::resource('/peopleloveus', 'PeopleloveusController');
    Route::resource('/housingcounseling', 'HousingcounselingController');
    Route::resource('/pricing', 'PricingController');


    });
