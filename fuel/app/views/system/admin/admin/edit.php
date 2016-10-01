<?php echo Session::get_flash('msg'); ?>
<?php if ($id_edit): ?>
	<?php echo Form::open('/system/admin/admin/edit/'); ?>
	<h2>内容</h2>
	<p>メールアドレス
		<?php echo Form::input('email', $admin->email); ?>
	<h4>権限</h4>
		<table>
			<tr>
				<th>
					管理者の管理　
				</th>
				<th>
					設定値の管理　
				</th>
				<th>
					マスタの管理　
				</th>
				<th>
					ログの閲覧　
				</th>
				<th>
					特別機能の使用　
				</th>
				<tr>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
				</tr>
			</tr>
		</table>
		<p>
			エントリー
		</p>
		<table>
			<tr>
				<th>
					閲覧　
				</th>
				<th>
					編集　
				</th>
				<th>
					削除　
				</th>
				<tr>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
					<td>
						<?php echo Form::checkbox('', '', 0); ?>
					</td>
				</tr>
			</tr>
		</table>
	<h2>ログイン</h2>
	<p>ログイン名
		<?php echo Form::input('id', $admin->id); ?>
	<p>ログインID
		<?php echo Form::input('username', $admin->username); ?>
	<p>パスワード
		<?php echo Form::input('password', $admin->password); ?>
	<p>ステータス
		<?php echo Form::select('status', null , array(
			'0' => '有効',
			'1' => '無効'
		)); ?>
		<p>

	<?php echo Form::submit('submit','OK'); ?>
	<?php echo Form::hidden('id',$id_edit); ?>
	<input type="button" onClick='history.back();' value="キャンセル">
	<a href="/system/admin/admin/">一覧ページへ</a>
	<?php echo Form::close(); ?>
<?php endif; ?>
