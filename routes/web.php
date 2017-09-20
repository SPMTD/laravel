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


Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('/contact', 'HomeController@contact');

Route::prefix('users')->group(function () {
    Route::get ('/',        'UserController@index');
    Route::get ('/create',  'UserController@create')->name('users.create');
    Route::post('/',        'UserController@validator');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
