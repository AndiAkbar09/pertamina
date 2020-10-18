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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route Pendaftaran

Route::group(['prefix'=> 'pendaftaran'], function(){
    Route::get('index', 'PendaftaranController@index')->name('pendaftarans');
    Route::post('save','PendaftaranController@store')->name('pendaftarans.save');
    Route::get('create','PendaftaranController@create')->name('pendaftarans.create');
});

// Route Monitoring Penjualan Oli
Route::group(['prefix'=>'penjualan_oli'], function(){
    Route::get('index', 'Monitoring\PenjualanoliController@index')->name('penjualans.oli');
});