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
    $page = \App\Models\Page::find(1);
    return view('welcome', compact('page'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{slug}', 'PagesController@show');
