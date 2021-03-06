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



Route::resource('products', 'ProductController');

Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashbaord');



Route::get('/', 'HomeController@index')->name('home');



Route::resource('commodites', 'CommoditesController');





Route::resource('slider', 'SliderAdminController');


Route::resource('chambres', 'ChambresAdminController');
Route::get('chambre','ChambresClientController@index')->name('chambre');
Route::get('chambre/{id}','ChambresAdminController@update_dispo')->name('chambredep');






Route::resource('galerie', 'GalerieAdminController');
//Route::get('/galeries', '@index')->name('galeries');
Route::get('/galeries','GalerieClientController@index')->name('galeries');



Route::resource('publicite', 'PubliciteAdminController');

//contact for admin (ContactAdminController) ==> auth
Route::get('/contact-admin', 'ContactAdminController@index')->name('contact-admin');
//contact for clinet (ContactClientController)
Route::resource('contact', 'ContactClientController');
//Route::get('/contact', 'ContactClientController@create')->name('contact');




//contact for admin (ContactAdminController) ==> auth
Route::get('reservation-admin', 'ReservationAdminController@index')->name('reservation-admin');
//contact for clinet (ContactClientController)
Route::resource('reservation', 'ReservationClientController');






// home URl (frontend):

//contact ==>  /contact

//galerie ==> 
