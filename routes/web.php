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

Route::get('/', 'AdminController@index');
//Barang
Route::get('admin/barang', 'BarangController@index');
Route::get('admin/barang/add', 'BarangController@add');
Route::post('admin/barang/post', 'BarangController@post');
Route::get('admin/barang/edit/{id}', 'BarangController@edit');
Route::post('admin/barang/update', 'BarangController@update');
Route::get('admin/barang/delete/{id}', 'BarangController@delete');
//Penjualan
Route::get('admin/penjualan', 'PenjualanController@index');
Route::get('admin/penjualan/add', 'PenjualanController@add');
Route::post('admin/penjualan/post', 'PenjualanController@post');
Route::get('admin/penjualan/edit/{id}', 'PenjualanController@edit');
Route::post('admin/penjualan/update', 'PenjualanController@update');
Route::get('admin/penjualan/delete/{id}', 'PenjualanController@delete');
//Petugas
Route::get('admin/petugas', 'PetugasController@index');
Route::get('admin/petugas/add', 'PetugasController@add');
Route::post('admin/petugas/post', 'PetugasController@post');
Route::get('admin/petugas/edit/{id}', 'PetugasController@edit');
Route::post('admin/petugas/update', 'PetugasController@update');
Route::get('admin/petugas/delete/{id}', 'PetugasController@delete');
//Distributor
Route::get('admin/distributor', 'DistributorController@index');
Route::get('admin/distributor/add', 'DistributorController@add');
Route::post('admin/distributor/post', 'DistributorController@post');
Route::get('admin/distributor/edit/{idpetugas}', 'DistributorController@edit');
Route::post('admin/distributor/update', 'DistributorController@update');
Route::get('admin/distributor/delete/{id}', 'DistributorController@delete');
//Jenis
Route::get('admin/jenis', 'JenisController@index');
Route::get('admin/jenis/add', 'JenisController@add');
Route::post('admin/jenis/post', 'JenisController@post');
Route::get('admin/jenis/edit/{id}', 'JenisController@edit');
Route::post('admin/jenis/update', 'JenisController@update');
Route::get('admin/jenis/delete/{id}', 'JenisController@delete');
//Barang Masuk
Route::get('admin/barangmasuk', 'BarangMasukController@index');
Route::get('admin/barangmasuk/add', 'BarangMasukController@add');
Route::post('admin/barangmasuk/post', 'BarangMasukController@post');
Route::get('admin/barangmasuk/edit/{id}', 'BarangMasukController@edit');
Route::post('admin/barangmasuk/update', 'BarangMasukController@update');
Route::get('admin/barangmasuk/delete/{id}', 'BarangMasukController@delete');
//Detail Barang Masuk
Route::get('admin/detailbarangmasuk', 'DetailBrgMskController@index');
Route::get('admin/detailbarangmasuk/add', 'DetailBrgMskController@add');
Route::post('admin/detailbarangmasuk/post', 'DetailBrgMskController@post');
Route::get('admin/detailbarangmasuk/edit/{id}', 'DetailBrgMskController@edit');
Route::post('admin/detailbarangmasuk/update', 'DetailBrgMskController@update');
Route::get('admin/detailbarangmasuk/delete/{id}', 'DetailBrgMskController@delete');
//Detail Penjualan
Route::get('admin/detailpenjualan', 'DetailPenjualanController@index');
Route::get('admin/detailpenjualan/add', 'DetailPenjualanController@add');
Route::post('admin/detailpenjualan/post', 'DetailPenjualanController@post');
Route::get('admin/detailpenjualan/edit/{id}', 'DetailPenjualanController@edit');
Route::post('admin/detailpenjualan/update', 'DetailPenjualanController@update');
Route::get('admin/detailpenjualan/delete/{id}', 'DetailPenjualanController@delete');
