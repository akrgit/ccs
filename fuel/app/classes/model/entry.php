<?php
class Model_Entry extends \Model_Crud
{
	protected static $_table_name = 'ccs_entry';
	protected static $_primary_key = 'entry_id';
	public static function val_entry()
	{
		// Controllerのentryより引用
		$val = Validation::forge();
		$val->add('entry_name','お名前')->add_rule('required');
		$val->add('entry_ruby','フリガナ')->add_rule('required');
		$val->add('entry_prefecture','都道府県')->add_rule('required');
		$val->add('entry_address','住所')->add_rule('required');
		$val->add('entry_telephone_h','電話番号（上）')->add_rule('required')->add_rule('numeric_between', 0,99999);
		$val->add('entry_telephone_m','電話番号（中）')->add_rule('required')->add_rule('numeric_between', 0,99999);
		$val->add('entry_telephone_l','電話番号（下）')->add_rule('required')->add_rule('numeric_between', 0,99999);
		$val->add('entry_email','メールアドレス')->add_rule('required')->add_rule('valid_email');
		return $val;
	}
	public static function save_entry()
	{
		$val = Model_Entry::val_entry();
		$entry = Model_Entry::find_by_pk(Session::get_flash('id'));
		if ($val -> run(Input::post())) {
			$birthday = Input::post('entry_birthday_y').Input::post('entry_birthday_m').Input::post('entry_birthday_d');
			$entry->set(array(
				'entry_name' => Input::post('entry_name'),
				'entry_ruby' => Input::post('entry_ruby'),
				'entry_birthday' => $birthday,
				'entry_prefecture' => Input::post('entry_prefecture'),
				'entry_address' => Input::post('entry_address'),
				'entry_telephone_h' => Input::post('entry_telephone_h'),
				'entry_telephone_m' => Input::post('entry_telephone_m'),
				'entry_telephone_l' => Input::post('entry_telephone_l'),
				'entry_email' => Input::post('entry_email'),
				'entry_magazine' => Input::post('entry_magazine'),
				'entry_magazine_type' => Input::post('entry_magazine_type'),
			));
			$entry->save();
			return $val;
		}
	}
}
