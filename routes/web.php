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

Route::get('/dashboard','dashboardController@getRecord');

Route::get('home', function()
{
    return View::make('home');
});

Route::get('news', function()
{
    return View::make('news');
});

Route::get('news/{item}', function($item)
{
    return View::make('news/'.$item);
});


Route::get('events', function()
{
    return View::make('events');
});

Route::get('events/{item}', function($item)
{
    return View::make('events/'.$item);
});

Route::post('{event}/saveRecord', 'dashboardController@saveRecord');

