<?php

class MarketingController extends BaseController {
	public $layout = "layouts.main";

	public function home()
	{
		$this->layout->content = View::make('marketing.home');
	}

	public function about()
	{
		return 'viewing about';
	}

}