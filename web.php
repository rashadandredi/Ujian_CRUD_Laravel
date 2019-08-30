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

Route::get('/hm', function () {
    //return view('welcome');
    echo "Selamat Datang Rashad";
});
Route::get('/satu', function () {
    //return view('welcome');
    echo "One";
});
Route::get('/dua', function () {
    //return view('welcome');
    echo "Two";
});
Route::get('/tiga', function () {
    //return view('welcome');
    echo "Three";
});
Route::get('/empat', function () {
    //return view('welcome');
    echo "Four";
});
Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});
Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});
Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});
Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});
Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});

//1. echo langsung nested
Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "ten";
});


//2. manggil view
Route::get('/sepuluh', function () {
    return view('rashad');
  //lokasi view
});

Route::get('/nemplate', function () {
    return view('template');
  //lokasi view
});

Route::get('/CleaningService', function () {
    return view('tables');
  //lokasi view
});

Route::get('login','Login@index');

//Manggil Controller
Route::get('/usang', 'UsangController@index');
/* file controller namanya usangController
    nama url usang
    index nama functionnya
*/
Route::resource('kontak', 'Kontak');
Route::resource('barang', 'Barang');
Route::resource('pembelian', 'Pembelian');
Route::resource('penjualan', 'Penjualan');
Route::get('/', function(){
  return view('index');
});
