<?php

class MarketingController extends BaseController {

	public function getIndex() {
		return View::make('marketing/home')->with('user', Auth::user());
	}

	public function getAbout() {
		return View::make('marketing/about');
	}

}
?>