<?php
class Controller_System_Admin extends Controller_Template {
	public function action_index()
	{
		if (Auth::check()) {
			// ログインできた場合
			$this->template->title ='トップ';
			$this->template->content = View::forge('system/admin/index');
		}
		elseif (Input::method() == 'POST')
		{
			if(Auth::login(Input::post('username'), Input::post('password')))
			{
				// ログインできた場合
				$this->template->title ='トップ';
				$this->template->content = View::forge('system/admin/index');
			}
		}else {
			$this->template->title ='ログイン';
			$this->template->content = View::forge('system/admin/login');
		}
	}
	public function action_password()
	{
		if (!Auth::check()) {
		Response::redirect('system/admin');
		}

		$data = array();
		if (Input::method() == 'POST')
		{
			$pass_in = Input::post('pass_in');
			$val = Validation::forge();
			$val->add('pass_in', 'ハッシュ化する文字列')->add_rule('required')->add_rule('min_length', 6);
			if ($val->run()) {
				Session::set_flash('pass_in',$pass_in);
				$data['pass_out'] = Auth::hash_password($pass_in);
			}else{
				$str = Str::random('alnum',16);
				Session::set_flash('pass_in',$str);
				$data['pass_out'] = Auth::hash_password($str);
			}
		}else{
			$str = Str::random('alnum',16);
			Session::set_flash('pass_in',$str);
			$data['pass_out'] = Auth::hash_password($str);
		}
		$this->template->title ='パスワード生成';
		$this->template->content = View::forge('system/admin/password', $data);
	}
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('system/admin');
	}
	public function action_create()
	{
		// デバッグ用
		$this->template->title ='登録';
		$this->template->content = View::forge('system/admin/create');
	if (Input::method() == 'POST') {
		$auth = Auth::instance();
		$auth->create_user(Input::post('username'), Input::post('password'), 'abc@example.com');
		Response::redirect('system/admin');
	}

	}
}
