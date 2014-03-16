<?php

class DashboardController extends BaseController {

	public function getIndex()
	{
		$user_id = Auth::user()->id;
		$all_exercises = Exercise::where('user_id', '=', (string)$user_id)->get(); // this should live in a Model
		return View::make('user/dashboard')
			->with('all_exercises', $all_exercises)
			->with('user', Auth::user());
	}

}