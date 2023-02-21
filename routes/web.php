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

Route::get('/katagori', 'KatagoriController@index')->name('kategori');

Route::get('/uom', 'UomController@index')->name('uom');

Route::get('/satuan', 'SatuanController@index')->name('satuan');

Route::get('/barang', 'BarangController@index')->name('barang');
Route::get('/barang/create', 'BarangController@create')->name('barang.create');
Route::get('/barang/restock', 'BarangController@restock')->name('barang.restock');
Route::get('/barang/tampilan', 'BarangController@tampilan')->name('barang.tampilan');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/masuk', 'TransaksiController@masuk')->name('transaksi.masuk');

Route::get('/brand', 'BrandController@index')->name('brand');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
