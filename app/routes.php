<?php

// Application Routes
Route::controller('user', 'UsersController');

Route::controller('dashboard', 'DashboardController');

// Marketing Routes (something messed up if this controller is not at the bottom...?)
Route::controller('/', 'MarketingController');