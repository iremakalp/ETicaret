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
    return view('anasayfa');
});
Route:: get('/kategori/{slug_kategoriadi}','KategoriController@index')->name('kategori');

Route::view('/kategori','kategori');
Route::view('/urun','urun');
Route::view('/sepet','sepet');
