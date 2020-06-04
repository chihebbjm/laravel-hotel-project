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

Route::resource('products', 'ProductController');

Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashbaord');


Route::get('/home', 'HomeController@index')->name('home');



Route::resource('commodites', 'CommoditesController');


Route::resource('chambres', 'ChambresController');


Route::resource('slider', 'SliderController');

