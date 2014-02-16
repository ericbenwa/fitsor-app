<?php

class MarketingController extends BaseController {

	public function getIndex()
	{
		return View::make('marketing/home');
	}

	public function getAbout()
	{
		return 'Viewing About for Marketing';
	}

}
?>