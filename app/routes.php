<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Marketing Routes
Route::get('/', 'MarketingController@home');

Route::get('about', 'MarketingController@about');


// Application Routes
Route::controller('users', 'UsersController');

Route::controller('exercisetypes', 'ExerciseTypesController');