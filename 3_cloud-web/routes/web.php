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

Route::get('/', function () {
    return view('welcome');
});

//Route::post("login", "LoginController@login");

Route::group(["prefix" => "panel"], function(){
    Route::get('dashboard', 'DashboardController@index')
        ->name('dashboard');
    Route::get('report/{sensorID}', 'DashboardController@report')
        ->name('report')
        ->where("sensorID", "[0-9]+");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
