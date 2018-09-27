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


Route::get('/envato-user-helper-demo', function () {
    return EnvatoUser::get_username(1);
});

Route::resource('prueba', 'pruebaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Employees

Route::get('api/v1/employees/{id?}', 'Employees@index');
Route::post('api/v1/employees', 'Employees@store');
Route::post('api/v1/employees/{id}', 'Employees@update');
Route::delete('api/v1/employees/{id}', 'Employees@destroy');