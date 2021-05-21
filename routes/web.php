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

Route::get('/', 'HomeController@landing')-> name('landing');
//Route::any('/home', ['uses' => 'HomeController@index']) -> name("home");
Route::view('//home', 'home')->name('home');
Route::get('/about', 'HomeController@about') -> name('about');
Route::get('/contact', 'HomeController@contact') -> name('contact');
Route::get('/blog', 'HomeController@blog') -> name('blog');
Route::get('/soon', 'HomeController@soon') -> name('soon');
