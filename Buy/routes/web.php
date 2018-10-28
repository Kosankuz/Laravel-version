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

Route::get('dashboard', 'PagesController@getDashboard');
Route::get('admin', 'PagesController@getAdmin');
Route::get('discount', 'PagesController@getDiscount');
Route::get('investment', 'PagesController@getInvestment');
Route::get('refund', 'PagesController@getRefund');
Route::get('sale', 'PagesController@getSale');
