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

Route::get('/','Main@main')->name('home');
Route::get('/parse','Main@showParse')->name('parse');
Route::match(['get','post'],'register', 'User@createUser')->name('register');
Route::get('test','User@testUser',['as' =>'test']);

