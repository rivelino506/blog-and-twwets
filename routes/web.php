<?php

use Illuminate\Support\Facades\Route;
use App\Entry;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','GuestController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entries/create', 'EntryController@create');
Route::post('/entries', 'EntryController@store');

Route::get('/entries/{entry}', 'GuestController@show');
Route::get('/entries/{entry}/edit', 'EntryController@edit');
Route::put('/entries/{entry}', 'EntryController@update');

Route::get('/users/{user}', 'userController@show');
