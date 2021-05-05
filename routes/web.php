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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/flights', 'FlightsController@allFlights');
Route::post('/add-flights', 'FlightsController@saveFlight');


Route::get('/delete-flight/{id}', 'FlightsController@deleteFlight');
Route::get('/edit-flight/{id}', 'FlightsController@editFlight');
Route::post('/update-flights', 'FlightsController@updateFlights');

