<?php
class Controller_System_Admin_Admin extends Controller_Template {
  public function action_index() {
    $this->template->title ='エントリー　一覧';
    $this->template->content = View::forge('system/admin/admin/index');
  }
  public function action_edit() {
    $this->template->title ='エントリー　編集';
    $this->template->content = View::forge('system/admin/admin/edit');
  }
  public function action_delete() {
    $this->template->title ='エントリー　削除';
    $this->template->content = View::forge('system/admin/admin/delete');
  }
}
