<?php
class Controller_System_Admin_Entry extends Controller_Template {
  public function before()
  {
    parent::before();

    if (!Auth::check()) {
    Response::redirect('system/admin');
    }

  }

  public function action_index() {
    $this->template->title ='エントリー　一覧';
    $this->template->content = View::forge('system/admin/entry/index');
  }
  public function action_edit() {
    $this->template->title ='エントリー　編集';
    $this->template->content = View::forge('system/admin/entry/edit');
  }
  public function action_delete() {
    $this->template->title ='エントリー　削除';
    $this->template->content = View::forge('system/admin/entry/delete');
  }
}
