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
Route::get('/bunbougu', 'App\Http\Controllers\BunbouguController@index');

Route::get('bunbougus/create', 'App\Http\Controllers\BunbouguController@create')->name('bunbougus.create');
Route::post('bunbougus/store', 'App\Http\Controllers\BunbouguController@store')->name('bunbougus.store');
