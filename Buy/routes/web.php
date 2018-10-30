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

Route::get('/', 'PagesController@getIndex');
Route::get('admin', 'PagesController@getAdmin');
Route::get('discount', 'PagesController@getDiscount');
Route::get('investment', 'PagesController@getInvestment');
Route::get('adminrefund', 'PagesController@getAdminRefund');
Route::get('sale', 'PagesController@getSale');
Route::get('dashboard', 'PagesController@getDashboard');

Route::get('purchaseHist', 'PagesController@getPurchaseHist');
Route::get('purchaseTok', 'PagesController@getPurchaseTok');
Route::get('withdraw', 'PagesController@getTokenWithdraw');

Route::get('generalsettings', 'PagesController@getGeneralSettings');
Route::get('resetpass', 'PagesController@getResetpass');
Route::get('security', 'PagesController@getSecurity');
Route::get('loginhistory', 'PagesController@getLoginhistory');
Route::get('support', 'PagesController@getSupport');
Route::get('refund', 'PagesController@getRefund');
