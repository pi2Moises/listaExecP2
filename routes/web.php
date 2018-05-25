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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ROTAS CUSTOMER
Route::get('/lista_customer','CustomerController@index');
Route::get('/create_customer', 'CustomerController@create');
Route::post('/create_customer', 'CustomerController@store');

