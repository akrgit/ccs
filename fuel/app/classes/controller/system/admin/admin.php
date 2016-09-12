<?php
class Controller_System_Admin_Admin extends Controller_Template {
	public function before()
	{
		parent::before();

		if (!Auth::check()) {
		Response::redirect('system/admin/');
		}

	}

	public function action_index()
	{
		$data = array();
		$data['result'] = Model_Admin::find_all();
		$this->template->title ='管理者　一覧';
		$this->template->content = View::forge('system/admin/admin/index',$data);
	}
	public function action_edit() {
		$data = array();
		if ($id = Input::get('admin_ids')) {
			Session::set_flash('msg', 'ID:'.$id.'を編集...');
			$data['id_edit'] = $id;
		}
		else
		{
			Session::set_flash('msg', '編集するIDが指定されていません。');
			$data['id_edit'] = '';
		}
		if (Input::post('submit')) {
			$id_edit = Input::post('id');
			$admin = Model_Admin::find_by_pk($id_edit);
			if ($admin)
			{
				$admin->save();
				Session::set_flash('msg', '変更しました。');
				$data['id_edit'] = '';
			}
			else
			{
				Session::set_flash('msg', '変更に失敗しました。');
				$data['id_edit'] = '';
			}
		}

		$this->template->title ='管理者　編集';
		$this->template->content = View::forge('system/admin/admin/edit',$data);
	}

	public function action_delete()
	{
		$data = array();
		if ($id = Input::get('admin_ids'))
		{
			Session::set_flash('msg', 'ID:'.$id.'を削除してもよろしいですか？');
			$data['id_del'] = $id;
			Session::set_flash('id', $id);
		}
		else
		{
			Session::set_flash('msg', '削除するIDが指定されていません。');
			$data['id_del'] = '';
		}

		if (Input::post('submit'))
		{
			$id_del = Input::post('id');
			$admin = Model_Admin::find_by_pk($id_del);
			if ($admin)
			{
				$admin->delete();
				Session::set_flash('msg', '削除しました。');
				$data['id_del'] = '';
			}
			else
			{
				Session::set_flash('msg', '削除に失敗しました。');
				$data['id_del'] = '';
			}
		}

		$this->template->title = '管理者　削除';
		$this->template->content = View::forge('system/admin/admin/delete', $data);
	}
}
