<?php

class UsersController extends BaseController {

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getCreate() {
		return View::make('user/register');
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('user/signin')->with('message', 'Thanks for registering!');
		} else {
			return Redirect::to('user/register')->withErrors($validator)->withInput();
		}
	}

	public function getSignin() {
		return View::make('user/signin');
	}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('dashboard');
		} else {
		return Redirect::to('user/signin')
			->with('message', 'Your username/password combination was incorrect')
			->withInput();
		}
	}

	public function getSignout() {
		Auth::logout();
		return Redirect::to('user/signin')->with('message', 'Your are now signed out!');
	}

	public function getProfile() {
		return View::make('user/profile')->with('user', Auth::user());
	}

	public function postUpdate() {
		// TBD - add form validation here
		$user = Auth::user();
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->save();

		return Redirect::action('UsersController@getProfile');
	}

	public function getDashboard() {
		$user_id = Auth::user()->id;
		$all_exercises = Exercise::where('user_id', '=', (string)$user_id)->get(); // this should live in a Model
		return View::make('user/dashboard')
			->with('all_exercises', $all_exercises)
			->with('user', Auth::user());
	}

	public function getUser($id) {
		$user = User::where('id', '=', (string)$id)->get()->first();
		$all_exercises = Exercise::where('user_id', '=', (string)$id)->get(); // this should live in a Model
		return View::make('user/dashboard')
			->with('all_exercises', $all_exercises)
			->with('user', $user);
	}

	// Next Up: Make a list of all users with links to view their exercises

}
?>