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
Route::get('/coba1', function () {
    return view('master');
});
Route::resource('propinsi','PropinsiController');
Route::resource('kota','KotaController');
// Route::resource('mahasiswa','MahasiswaController');
Route::get('/mahasiswa', 'MahasiswaController@index');

Route::resource('/jurusan','JurusanController');
?>