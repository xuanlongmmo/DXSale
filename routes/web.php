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

Route::get('/', 'Frontend\HomeController@index')->name('home');

//Metamask
Route::prefix('metamask')->group(function () {
    Route::get('/', 'Frontend\MetamaskController@index')->name('metamask');
    Route::post('/transaction/create', 'Frontend\MetamaskController@create')->name('metamask.transaction.create');
});

//DxLaunch
Route::get('/defi-dashboard', 'Frontend\DxLaunchController@defidashboard')->name('defidashboard');

Route::get('/deficreatesale', 'Frontend\DxLaunchController@deficreatesale')->name('deficreatesale');
Route::post('/deficreatesale', 'Frontend\DxLaunchController@pdeficreatesale')->name('pdeficreatesale');

Route::get('/checkdate', 'Frontend\DxLaunchController@checkdate')->name('checkdate');

Route::get('/converttime', 'Frontend\DxLaunchController@converttime')->name('converttime');

Route::get('/detaildxlaunch', 'Frontend\DxLaunchController@detaildxlaunch')->name('detaildxlaunch');

//DxFairLaunch
Route::get('/fair-dashboard', 'Frontend\DxFairLaunchController@fairdashboard')->name('fairdashboard');

Route::get('/faircreatesale', 'Frontend\DxFairLaunchController@faircreatesale')->name('faircreatesale');