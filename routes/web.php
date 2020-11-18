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

Route::get('dashboard', function () {
    return view('user/dashboard');
});

Route::get('data-user', function () {
    return view('user/dataUser');
});

Route::get('pengajuan', function () {
    return view('user/pengajuan');
});

Route::get('upload-pengajuan', function () {
    return view('user/uploadPengajuan');
});


Route::get('tambah-pengajuan', function () {
    return view('user/tambahPengajuan');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
