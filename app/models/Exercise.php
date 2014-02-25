<?php

class Exercise extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'exercises';
}
