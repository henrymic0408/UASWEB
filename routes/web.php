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
Route::get('/anggota', 'HomeController@getAPI');

Route::get('/anggota/detail/{id}', 'HomeController@detail');
Route::get('/anggota/edit/{id}', 'HomeController@edit');
Route::get('/anggota/hapus/{id}', 'HomeController@hapus');