<?php
class Model_Entry extends \Model_Crud
{
	protected static $_table_name = 'ccs_entry';
	protected static $_primary_key = 'entry_id';

	public static function val_entry()
	{
		// Controllerのentryより引用
		$val = Validation::forge();
		$val->add('name','お名前')->add_rule('required');
		$val->add('ruby','フリガナ')->add_rule('required');
		$val->add('prefecture','都道府県')->add_rule('required');
		$val->add('address','住所')->add_rule('required');
		$val->add('telephone_h','電話番号（上）')->add_rule('required');
		$val->add('telephone_m','電話番号（中）')->add_rule('required');
		$val->add('telephone_l','電話番号（下）')->add_rule('required');
		$val->add('email','メールアドレス')->add_rule('required')->add_rule('valid_email');
		return $val;
	}
}
