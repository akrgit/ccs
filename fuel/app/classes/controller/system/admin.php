<?php
class Controller_System_Admin extends Controller_Template {
  public function action_index()
  {
    if (Input::method() == 'POST')
    {
      if(Auth::login(Input::post('username'), Input::post('password')))
      {
        // ログインできた場合
        $this->template->title ='トップ';
        $this->template->content = View::forge('system/admin/index');
        // Response::redirect('system/admin/index');
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
    $this->template->title ='パスワード生成';
    $this->template->content = View::forge('system/admin/password');
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
