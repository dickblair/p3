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

Route::get('/advice/{package}', function ($package)
{
    return 'This is the insurance view for '.$package;
});

Route::get('/practice/{n?}', 'PracticeController@index');

Route::get('/contact/', 'AdviceController@show');

Route::get('/consult/', 'AdviceController@index');

Route::get('/', function ()
{
    return view('welcome');
});


