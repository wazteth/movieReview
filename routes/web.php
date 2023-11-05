<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/movies','App\Http\Controllers\MovieController@index')->name('movie.index');
Route::get('/movie/{id}','App\Http\Controllers\MovieController@show')->name('movie.show');
Route::get('/admin','App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/movies','App\Http\Controllers\Admin\AdminMovieController@index')->name('admin.movie.index');
Route::post('/admin/movies/store','App\Http\Controllers\Admin\AdminMovieController@store')->name('admin.movie.store');
Route::delete('/admin/movies/{id}/delete', 'App\Http\Controllers\Admin\AdminMovieController@delete')->name('admin.movie.delete');
Route::get('/admin/movies/{id}/edit', 'App\Http\Controllers\Admin\AdminMovieController@edit')->name('admin.movie.edit');
Route::put('/admin/movies/{id}/update', 'App\Http\Controllers\Admin\AdminMovieController@update')->name('admin.movie.update');