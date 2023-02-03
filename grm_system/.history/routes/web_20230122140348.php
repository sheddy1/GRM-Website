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

Route::get('home', 'WelcomeController@Home')->name('home');

Route::get('register', 'WelcomeController@register_main')->name('register_main');

Route::get('login', 'WelcomeController@login')->name('login');

Route::post('check', 'WelcomeController@check')->name('check');

Route::get('national_homepage', 'NationalController@home')->name('national_homepage');

Route::get('getLgas', 'WelcomeController@getLgas')->name('getLgas');

Route::get('getzones', 'WelcomeController@getzones')->name('getzones');
