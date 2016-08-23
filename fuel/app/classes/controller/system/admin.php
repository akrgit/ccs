<?php
class Controller_System_Admin extends Controller_Template {
  public function action_index() {
    $this->template->title ='トップ';
    $this->template->content = View::forge('system/admin/index');
  }
  public function action_password() {
    $this->template->title ='パスワード生成';
    $this->template->content = View::forge('system/admin/password');
  }
  public function action_logout() {
    $this->template->title ='ログアウト';
    $this->template->content = View::forge('system/admin/logout');
  }
}
