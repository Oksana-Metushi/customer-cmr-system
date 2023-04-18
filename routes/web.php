<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\PagesController@index');

//customer

Route::get('customer', 'App\Http\Controllers\CustomerController@index');

Route::get('/add-customer', 'App\Http\Controllers\CustomerController@create');

Route::post('/store-customer', 'App\Http\Controllers\CustomerController@store');

Route::get('/edit-customer/{id}', 'App\Http\Controllers\CustomerController@edit');

Route::put('/update-customer/{id}', 'App\Http\Controllers\CustomerController@update');

Route::get('/delete-customer/{id}', 'App\Http\Controllers\CustomerController@delete');

Route::get('/show-contacts/{id}', 'App\Http\Controllers\CustomerController@show');

Route::get('/search', 'App\Http\Controllers\CustomerController@search');

//contact

Route::get('contact', 'App\Http\Controllers\ContactController@index');

Route::get('/add-contact', 'App\Http\Controllers\ContactController@create');

Route::post('/store-contact', 'App\Http\Controllers\ContactController@store');

Route::get('/edit-contact/{id}', 'App\Http\Controllers\ContactController@edit');

Route::put('/update-contact/{id}', 'App\Http\Controllers\ContactController@update');

Route::get('/delete-contact/{id}', 'App\Http\Controllers\ContactController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
