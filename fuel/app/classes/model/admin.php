<?php
class Model_Admin extends \Model_Crud
{
	protected static $_table_name = 'users';
	protected static $_primary_key = 'id';
	public static function save_admin()
	{
		$admin = Model_Admin::find_by_pk(Input::post('id'));
		$admin->set(array(
			'email' => Input::post('email'),
			'id' => Input::post('id'),
			'username' => Input::post('username'),
			'password' => Input::post('password'),
			'status' => Input::post('status'),
		));
		$admin->save();
	}
}
