<?php

// Application Routes
Route::controller('user', 'UsersController');

Route::get('dashboard', array('as' => 'dashboard', function() {
	return View::make('user/dashboard')->with('user', Auth::user());
}));

Route::get('user/{id}', function($id)
{
  return User::find($id);
});

// Marketing Routes (something messed up if this controller is not at the bottom...?)
Route::controller('/', 'MarketingController');