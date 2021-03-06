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

#Section Auth Routes
Route::view('/','auth.login');

Auth::routes();


#Section Account Routes
Route::middleware('auth')->group(function() {

Route::get('return-view/dashboard', 'HomeController@index')->name('home');

Route::get('return-view/all-data', 'DataProcessorController@allData')->name('data');

Route::get('return-view/data-analysis', 'DataProcessorController@index')->name('data');




});