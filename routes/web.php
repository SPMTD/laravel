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

Route::get('/upload', 'HomeController@upload')->name('upload');

Route::post('uploaded', 'HomeController@uploadPicture')->name('uploaded');

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'HomeController@contact');

Route::get('post/{id}', function () {
   return view('/post/{id}');
});

Route::get('admin', function (){
    return view('admin.index');
});

Route::get('admin/create', function () {
    return view('admin.create');
});

Route::get('admin/edit/{id}', function() {
    return view('admin.edit');
});
