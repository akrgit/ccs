<?php

class Controller_System_Admin_Entry extends Controller_Template {
	public function before()
	{
		parent::before();

		if (!Auth::check()) {
		Response::redirect('system/admin');
		}

	}

	public function action_index()
	{
		$data = array();
		$data['result'] = Model_Entry::find_all();
		$this->template->title ='エントリー　一覧';
		$this->template->content = View::forge('system/admin/entry/index', $data);
	}
	public function action_edit()
	{
		if ($id = Input::get('entry_ids'))
		{
			Session::set_flash('msg', 'ID:'.$id.'を編集...');
			Session::set_flash('id', $id);
			$entry = Model_Entry::find_by_pk($id);
			$data['entry'] = $entry;
			$data['id_edit'] = $id;
		}
		else
		{
			Session::set_flash('msg', '編集するIDが指定されていません。');
			$data['id_edit'] = '';
		}
		if (Input::post('submit'))
		{
			if (Input::post())
			{
				$entry = Model_Entry::find_by_pk(Session::get_flash('id'));
				$val = $entry->save_entry();
				$numeric = is_numeric(Input::post('entry_telephone_h')) && is_numeric( Input::post('entry_telephone_m')) && is_numeric(Input::post('entry_telephone_l'));
				if ($val->run() && $numeric) {
					Session::set_flash('msg', '<p>変更しました。</p> <a href="/system/admin/entry/">一覧へ戻る</a>');
				}else{
					Session::set_flash('msg', '<p>変更に失敗しました。</p> <a href="/system/admin/entry/">一覧へ戻る</a>');
				}
				$data['id_edit'] = '';
			}
			else
			{
				Session::set_flash('msg', '変更に失敗しました。');
				$data['id_edit'] = '';
			}
		}

		$this->template->title ='エントリー　編集';
		$this->template->content = View::forge('system/admin/entry/edit', $data);
	}
	public function action_delete()
	{
		$data = array();
		if ($id = Input::get('entry_ids'))
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
			$entry = Model_Entry::find_by_pk($id_del);
			if ($entry)
			{
				$entry->delete();
				Session::set_flash('msg', '<p>削除しました。</p><a href="/system/admin/entry/">一覧へ戻る</a>');
				$data['id_del'] = '';
			}
			else
			{
				Session::set_flash('msg', '削除に失敗しました。');
				$data['id_del'] = '';
			}
		}

		$this->template->title ='エントリー　削除';
		$this->template->content = View::forge('system/admin/entry/delete', $data);
	}
}
