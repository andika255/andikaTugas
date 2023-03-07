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
Route::get('generate-pdf','HomeController@generatePDF');

Route::get('/nexmo','NexmoController@index');
Route::post('/nexmo','NexmoController@store')->name('nexmo.submit'); 

Route::get('/katagori', 'KatagoriController@index')->name('katagori');
Route::get('katagori/edit/{katagori}', 'KatagoriController@edit')->name('katagori.edit');
Route::post('/katagori/store', 'KatagoriController@store')->name('katagori.store');
Route::patch('katagori/update/{katagori}', 'KatagoriController@update')->name('katagori.update');
Route::get('/katagori/destroy/{katagori}', 'KatagoriController@destroy')->name('katagori.destroy');

Route::get('/permintaan', 'PermintaanController@index')->name('permintaan');

Route::get('/satuan', 'SatuanController@index')->name('satuan');
Route::post('/satuan/store', 'SatuanController@store')->name('satuan.store');
Route::get('/satuan/edit/{satuan}', 'SatuanController@edit')->name('satuan.edit');
Route::patch('/satuan/update/{satuan}', 'SatuanController@update')->name('satuan.update');
Route::get('/satuan/destroy/{satuan}', 'SatuanController@destroy')->name('satuan.destroy');

Route::get('/barang', 'BarangController@index')->name('barang');
Route::get('/barang/create/{katagoris}', 'BarangController@create')->name('barang.create');
Route::get('/barang/tampilan', 'BarangController@tampilan')->name('barang.tampilan');
Route::post('/store/{katagori}', 'BarangController@store')->name('barang.store');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/masuk', 'TransaksiController@masuk')->name('transaksi.masuk');

Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/brand/edit/{brand}', 'BrandController@edit')->name('brand.edit');
Route::post('/brand/store', 'BrandController@store')->name('brand.store');
Route::patch('/brand/update/{brand}', 'BrandController@update')->name('brand.update');
Route::get('/brand/destroy/{brand}', 'BrandController@destroy')->name('brand.destroy');

Route::get('/barang/{katagori}', 'RakController@index')->name('rak.barang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
