<?php

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

//Route::group(['middleware' => ['logger']], function () {
//    Route::get('/', function () { return view('welcome'); });
//});

Route::get('/', function () { return view('welcome'); })->middleware('logger');

Route::get('/enum_test', function () {
    return view('enum_test');
});

Route::get('/enum_controller_test', 'EnumTestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
