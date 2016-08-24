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
    $data = array();
    $data['result'] = Model_System_Admin_Entry::find_all();
    $this->template->title ='エントリー　一覧';
    $this->template->content = View::forge('system/admin/entry/index', $data);
  }
  public function action_edit() {
    
    $this->template->title ='エントリー　編集';
    $this->template->content = View::forge('system/admin/entry/edit');
  }
  public function action_delete() {
    $data = array();
    if ($id = Input::get('entry_ids')) {
      Session::set_flash('msg', 'ID:'.$id.'を削除してもよろしいですか？');
      $data['id_del'] = $id;
      Session::set_flash('id', $id);
    }else{
      Session::set_flash('msg', '削除するIDが指定されていません。');
      $data['id_del'] = '';
    }

    if (Input::post('submit')) {
      if ($item = Model_System_Admin_Admin::find(Session::get_flash('id')))
      {
        $item->delete();
        Session::set_flash('msg', '削除しました。');
        $data['id_del'] = '';
      }
      else
      {
        Session::set_flash('msg', '削除に失敗しました。');
        $data['id_del'] = '';
      }
    }
    $this->template->title ='エントリー　削除';
    $this->template->content = View::forge('system/admin/entry/delete',$data);
  }
}
