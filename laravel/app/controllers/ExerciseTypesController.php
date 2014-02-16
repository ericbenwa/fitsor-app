<?php

class ExerciseTypesController extends BaseController {
	public function getIndex() {
		return View::make('exercisetypes.index');
	}
}