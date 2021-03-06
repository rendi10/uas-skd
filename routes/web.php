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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');
Route::get('dosen/home', 'HomeController@dosenHome')->name('dosen.home')->middleware('admin');
Route::get('mahasiswa/home', 'HomeController@mahasiswaHome')->name('mahasiswa.home');

//admin
Route::get('admin/akun', 'AdminController@akun')->middleware('admin');

//Dosen
Route::get('dosen/matkul', 'DosenController@matkul')->middleware('admin');

//mahasiswa
Route::get('mahasiswa/matkul', 'MahasiswaController@matkul')->middleware('admin');