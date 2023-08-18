<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\user;

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

Route::get('getLgas', 'WelcomeController@getLgas')->name('getLgas');

Route::get('getzones', 'WelcomeController@getzones')->name('getzones');

Route::get('getwards', 'WelcomeController@getwards')->name('getwards');

Route::get('getcomms', 'WelcomeController@getcomms')->name('getcomms');

Route::post('homeRegister', 'WelcomeController@homeRegister')->name('homeRegister');

Route::get('mail', 'WelcomeController@mail')->name('mail');

Route::get('register_successful', 'WelcomeController@register_successful')->name('register_successful');

Route::get('national_homepage', 'NationalController@home')->name('national_homepage');

Route::get('national_registration', 'NationalController@register')->name('national_reg');

//Route::get('national_list', 'NationalController@list')->name('national_list');

Route::get('national_reports', 'NationalController@national_reports')->name('national_reports');

Route::get('national_gro', 'NationalController@gro')->name('national_gro');

Route::post('nationalRegister', 'NationalController@nationalRegister')->name('nationalRegister');

Route::get('Grieviances List', 'NationalController@national_list')->name('national_list');

//Route::get('national_list', function (Request $request) {

    //$grieviance = DB::table('grieviances')->get();

    //$id =  $request->session()->get('loggeduser');

    //$name = user::where('id', $id)->value('name');

   // return view('national.list', [
        //'grieviance' => $grieviance,
        
        //]);
//})->name('national_list');

Route::get('test', function () {
    return view('main.test');
});

Route::get('getCategory', 'NationalController@getCategory')->name('getCategory');

Route::post('Download List', 'NationalController@list_download')->name('list_download');

Route::get('Chart Date', 'NationalController@chart_date')->name('chart_date');

Route::get('Bar Change', 'NationalController@bar_change')->name('bar_change');

Route::post('Filter Grieviances', 'NationalController@filter_grieviance')->name('filter_grieviance');

Route::get('All Grieviances', 'NationalController@all_grieviances')->name('all_grieviances');

Route::get('All Grieviances', 'NationalController@all_grieviances')->name('all_grieviances');

Route::get('Search Bar', 'NationalController@search_bar')->name('search_bar');

Route::get('Personal', 'NationalController@personal')->name('personal');
