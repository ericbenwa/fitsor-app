<?php

class UsersController extends BaseController {

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getRegister() {
		return View::make('users/register');
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

			return Redirect::to('users/signin')->with('message', 'Thanks for registering!');
		} else {
			return Redirect::to('users/register')->withErrors($validator)->withInput();
		}
	}

	public function getSignin() {
		return View::make('users/signin');
	}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
		return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		} else {
		return Redirect::to('users/signin')
		->with('message', 'Your username/password combination was incorrect')
		->withInput();
		}
	}

	public function getDashboard() {
		return View::make('users/dashboard')->with('user', Auth::user());
	}

	public function getProfile() {
		return View::make('users/profile')->with('user', Auth::user());
	}

	public function getSignout() {
		Auth::logout();
		return Redirect::to('users/signin')->with('message', 'Your are now signed out!');
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
}
?>