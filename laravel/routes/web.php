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
Route::get('/bunbougu', 'App\Http\Controllers\BunbouguController@index')
->name('bunbougu.index');

Route::get('bunbougu/create', 'App\Http\Controllers\BunbouguController@create')->name('bunbougu.create')->middleware('auth');
Route::post('bunbougu/store', 'App\Http\Controllers\BunbouguController@store')->name('bunbougu.store')->middleware('auth');
Route::get('/bunbougus/edit/{bunbougu}', 'App\Http\Controllers\BunbouguController@edit')->name('bunbougu.edit')->middleware('auth');
Route::put('/bunbougus/edit/{bunbougu}','App\Http\Controllers\BunbouguController@update')->name('bunbougu.update')->middleware('auth');

Route::get('/bunbougus/show/{bunbougu}', 'App\Http\Controllers\BunbouguController@show')->name('bunbougu.show')->middleware('auth');

Route::delete('/bunbougus/{bunbougu}', 'App\Http\Controllers\BunbouguController@destroy')->name('bunbougu.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
