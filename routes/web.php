<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/data_master', 'ItemController@index')->name('data_master');
Route::get('/create_master','ItemController@create')->name('create_master');
Route::post('/save_item','ItemController@store')->name('save_item');
Route::get('/edit_master/{id}','ItemController@edit')->name('edit_master');
Route::post('/update_item/{id}','ItemController@update')->name('update_item');
Route::get('/delete_item/{id}','ItemController@destroy')->name('delete_item');

Route::get('/data_gudang', 'GudangController@index')->name('data_gudang');
Route::post('/save_gudang','GudangController@store')->name('save_gudang');
Route::get('/edit_gudang/{id}','GudangController@edit')->name('edit_gudang');
Route::post('/update_gudang/{id}','GudangController@update')->name('update_gudang');
Route::get('/delete_gudang/{id}','GudangController@destroy')->name('delete_gudang');

Route::get('/create_trx','TrxController@create')->name('create_trx');
