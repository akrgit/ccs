<h1>ユーザ登録画面</h1>
<?php echo Form::open('system/admin/newuser'); ?>
<dl class="">
	<dt>
		<?php echo Form::label('username', 'ユーザ名'); ?>
	</dt>
	<dd>
		<?php echo Form::input('username'); ?>
	</dd>
	<dt>
		<?php echo Form::label('password', 'パスワード'); ?>
	</dt>
	<dd>
		<?php echo Form::password('password'); ?>
	</dd>
</dl>
<p>
	<?php echo Form::submit('submit', '登録する'); ?>
</p>
<?php echo Form::close(); ?>
