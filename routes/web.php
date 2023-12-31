<?php

use Illuminate\Support\Facades\Route;
//use di php adalah import di java sama seperti "java.io.*;"
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//System.out.println(); di php menggunakan "::" publish di php meggunakan " '/' "
Route::get('/', function () {
    return view('welcome');
});

//variabel di php pakai dollar
Route::get('jumlah', function () {
    $hasil = 2 + 3;
    return "Hasil penjumlahan = " . (string)$hasil ;
});

Route::get('halo', function () {
    return "Selamat Datang di Situs Web";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('Modal', function () {
    return view('Yusuf196_Modal');
});

Route::get('Validasi', function () {
    return view('validasi1');
});

Route::get('JS', function () {
    return view('JS1');
});

//href week 1

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampiljam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


//route CRUD keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangbelanjaController@index');
Route::post('/keranjangbelanja/store','App\Http\Controllers\keranjangbelanjaController@store');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangbelanjaController@beli');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\keranjangbelanjaController@batal');

//route CRUD pra_eas
Route::get('/mouse','App\Http\Controllers\MouseController@index');
Route::post('/mouse/store','App\Http\Controllers\MouseController@store');
Route::get('/mouse/tambah','App\Http\Controllers\MouseController@tambah');
Route::get('/mouse/hapus/{id}','App\Http\Controllers\MouseController@hapus');
Route::post('/mouse/update','App\Http\Controllers\MouseController@update');
Route::get('/mouse/edit/{id}','App\Http\Controllers\MouseController@edit');
Route::get('/mouse/cari','App\Http\Controllers\MouseController@cari');
Route::get('/mouse/view/{id}','App\Http\Controllers\MouseController@view');

//route eas
//route CRUD
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
