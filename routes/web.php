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
    return view('index');
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'PertanyaanController@index')->name('home');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('tanya.create');
Route::post('/pertanyaan/create', 'PertanyaanController@store')->name('tanya.store');

