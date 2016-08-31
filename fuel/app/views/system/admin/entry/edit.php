<?php echo Session::get_flash('msg'); ?>
<?php if ($id_edit): ?>
	<?php echo Form::open('/system/admin/entry/edit/'); ?>
	<?php echo Form::submit('submit','OK'); ?>
	<input type="button" onClick='history.back();' value="キャンセル">
	<?php echo Form::close(); ?>
<?php endif; ?>
