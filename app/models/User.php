<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $timestamps = true;
	protected $fillable = ['username', 'password', 'email'];
	public static $rules = [
			'username' => 'required',
			'password' => 'required',
			'email' => 'required|email'];

	public $errors;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function isValid(){
		$validation = Validator::make($this->attributes, static::$rules);
		if ($validation->passes()) {
			return true;
		}
		else{
			$this->errors = $validation->messages();
			return false;
		}
	}
}
