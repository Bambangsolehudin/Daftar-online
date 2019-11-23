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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiteController@home');

Auth::routes();

Route::name('user')->group(function(){


Route::get('/calas', 'CalasController@index');
Route::get('/status_kelulusan', 'CalasController@status');
Route::get('/calas/{id}/edit', 'CalasController@edit');
Route::get('/calas/{id}/delete', 'CalasController@destroy');
Route::post('/calas/{id}/update', 'CalasController@update');

});




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registercalas', 'CalasController@register');
Route::post('/postregister','CalasController@postregister');


	
