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


Auth::routes();

Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::get('/dxmint', 'Frontend\HomeController@dxmint')->name('dxmint');

Route::get('/dxdrop', 'Frontend\HomeController@dxdrop')->name('dxdrop');

Route::get('/viewlock', 'Frontend\HomeController@viewlock')->name('viewlock');
Route::get('/dxlplock', 'Frontend\HomeController@dxlplock')->name('dxlplock');
Route::get('/dxlock', 'Frontend\HomeController@dxlock')->name('dxlock');

Route::get('/auditportal', 'Frontend\HomeController@auditportal')->name('auditportal');
Route::get('/kycportal', 'Frontend\HomeController@kycportal')->name('kycportal');

Route::get('/feemanagement', 'Frontend\HomeController@feemanagement')->name('feemanagement');
Route::get('/salebridge', 'Frontend\HomeController@salebridge')->name('salebridge');

Route::get('/dxlaunch', 'Frontend\HomeController@dxlaunch')->name('dxlaunch');
Route::get('/dxlockar', 'Frontend\HomeController@dxlockar')->name('dxlockar');

//Metamask
Route::prefix('metamask')->group(function () {
    Route::post('/transaction/create', 'Frontend\MetamaskController@create')->name('metamask.transaction.create');
});

//DxLaunch
Route::get('/defi-dashboard', 'Frontend\DxLaunchController@defidashboard')->name('defidashboard');

Route::get('/deficreatesale', 'Frontend\DxLaunchController@deficreatesale')->name('deficreatesale');
Route::post('/deficreatesale', 'Frontend\DxLaunchController@pdeficreatesale')->name('pdeficreatesale');

Route::get('/detaildxlaunch', 'Frontend\DxLaunchController@detaildxlaunch')->name('detaildxlaunch');

Route::get('/checkdate', 'Frontend\DxLaunchController@checkdate')->name('checkdate');

Route::get('/converttime', 'Frontend\DxLaunchController@converttime')->name('converttime');

//DxFairLaunch
Route::get('/fair-dashboard', 'Frontend\DxFairLaunchController@fairdashboard')->name('fairdashboard');
Route::get('/faircreatesale', 'Frontend\DxFairLaunchController@faircreatesale')->name('faircreatesale');

// Admin
Route::get('/addproject', 'AdminController@addproject')->name('addproject');
Route::post('/addproject', 'AdminController@paddproject')->name('paddproject');

Route::get('/order', 'AdminController@order')->name('order');
Route::post('/changestatus', 'AdminController@changestatus')->name('changestatus');

Route::get('/project', 'AdminController@project')->name('project');
Route::get('/deleteproject/{id}', 'AdminController@deleteproject')->name('deleteproject');

Route::get('/setting', 'AdminController@setting')->name('setting');
Route::post('/setting', 'AdminController@psetting')->name('psetting');
Route::post('/changepass', 'AdminController@changepass')->name('changepass');