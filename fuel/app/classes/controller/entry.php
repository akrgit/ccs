<?php
class Controller_Entry extends Controller_Template {
	public function action_index() {
		$this->template->title = 'エントリー';
		$data = array();
		$val = Model_Entry::val_entry();
		$data['val'] = $val;
		if (Input::post('submit')) {
			Session::set_flash('entry_name',Input::post('entry_name'));
			Session::set_flash('entry_ruby',Input::post('entry_ruby'));
			$birthday = Input::post('entry_birthday_y').Input::post('entry_birthday_m').Input::post('entry_birthday_d');
			Session::set_flash('entry_birthday',$birthday);
			Session::set_flash('entry_prefecture',Input::post('entry_prefecture'));
			Session::set_flash('entry_address',Input::post('entry_address'));
			Session::set_flash('entry_telephone_h',Input::post('entry_telephone_h'));
			Session::set_flash('entry_telephone_m',Input::post('entry_telephone_m'));
			Session::set_flash('entry_telephone_l',Input::post('entry_telephone_l'));
			Session::set_flash('entry_email',Input::post('entry_email'));
			Session::set_flash('entry_magazine',Input::post('entry_magazine'));
			Session::set_flash('entry_magazine_type',Input::post('entry_magazine_type'));
			Session::keep_flash('entry_birthday');

			$numeric = is_numeric(Input::post('entry_telephone_h')) && is_numeric( Input::post('entry_telephone_m')) && is_numeric(Input::post('entry_telephone_l'));
			if ($val->run() && $numeric) {
				$this->template->content = View::forge('entry/conf');
			}
			else {
				$this->template->content = View::forge('entry/index', $data);
				echo $val->show_errors();
			}
		}
		else {
			$this->template->content = View::forge('entry/index', $data);
		}
		if (Input::post('entry')) {

			$info = Model_Entry::forge();

			$data = array();
			$data['entry_name'] = Session::get_flash('entry_name');
			$data['entry_ruby'] = Session::get_flash('entry_ruby');
			$data['entry_birthday'] = Session::get_flash('entry_birthday');
			$data['entry_prefecture'] = Session::get_flash('entry_prefecture');
			$data['entry_address'] = Session::get_flash('entry_address');
			$data['entry_telephone_h'] = Session::get_flash('entry_telephone_h');
			$data['entry_telephone_m'] = Session::get_flash('entry_telephone_m');
			$data['entry_telephone_l'] = Session::get_flash('entry_telephone_l');
			$data['entry_email'] = Session::get_flash('entry_email');
			$data['entry_magazine'] = Session::get_flash('entry_magazine');
			$data['entry_magazine_type'] = Session::get_flash('entry_magazine_type');
			$info->set($data);
			if ($info->save()) {
				$this->template->content = View::forge('entry/thanks');
			}else {
				$this->template->content = '登録に失敗しました。';
			}

		}
	}
}
