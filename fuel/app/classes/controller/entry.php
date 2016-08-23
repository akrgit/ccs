<?php
class Controller_Entry extends Controller_Template {
  public function action_index() {
    $this->template->title = 'エントリー';

    $val = Validation::forge();
    $val->add('name','お名前')->add_rule('required');
    $val->add('ruby','フリガナ')->add_rule('required');
    // $val->add('birthday','生年月日')->add_rule('required');
    $val->add('prefecture','都道府県')->add_rule('required');
    $val->add('address','住所')->add_rule('required');
    $val->add('telephone_h','電話番号（上）')->add_rule('required');
    $val->add('telephone_m','電話番号（中）')->add_rule('required');
    $val->add('telephone_l','電話番号（下）')->add_rule('required');
    $val->add('email','メールアドレス')->add_rule('required')->add_rule('valid_email');
    $data = array();
    $data['val'] = $val;

    if (Input::post('submit')) {
      Session::set_flash('name',Input::post('name'));
      Session::set_flash('ruby',Input::post('ruby'));
      $birthday = Input::post('birthday_y').Input::post('birthday_m').Input::post('birthday_d');
      Session::set_flash('birthday',$birthday);
      Session::set_flash('prefecture',Input::post('prefecture'));
      Session::set_flash('address',Input::post('address'));
      Session::set_flash('telephone_h',Input::post('telephone_h'));
      Session::set_flash('telephone_m',Input::post('telephone_m'));
      Session::set_flash('telephone_l',Input::post('telephone_l'));
      Session::set_flash('email',Input::post('email'));
      Session::set_flash('entry_magazine',Input::post('entry_magazine'));
      Session::set_flash('entry_magazine_type',Input::post('entry_magazine_type'));
      Session::keep_flash('birthday');

      if ($val->run()) {
        $this->template->content = View::forge('entry/conf');
      }
      else {
        $this->template->content = View::forge('entry/index', $data);
      }
    }
    else {
      $this->template->content = View::forge('entry/index', $data);
    }
    if (Input::post('entry')) {

      $info = Model_Entry::forge();

      $data = array();
      $data['entry_name'] = Session::get_flash('name');
      $data['entry_ruby'] = Session::get_flash('ruby');
      $data['entry_birthday'] = Session::get_flash('birthday');
      $data['entry_prefecture'] = Session::get_flash('prefecture');
      $data['entry_address'] = Session::get_flash('address');
      $data['entry_telephone_h'] = Session::get_flash('telephone_h');
      $data['entry_telephone_m'] = Session::get_flash('telephone_m');
      $data['entry_telephone_l'] = Session::get_flash('telephone_l');
      $data['entry_email'] = Session::get_flash('email');
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
