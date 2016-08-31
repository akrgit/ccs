<?php echo Session::get_flash('msg'); ?>
<?php if ($id_edit): ?>
	<?php echo Form::open('/system/admin/admin/edit/'); ?>
	<?php echo Form::submit('submit','OK'); ?>
	<?php echo Form::hidden('id',$id_edit); ?>
	<input type="button" onClick='history.back();' value="キャンセル">
	<?php echo Form::close(); ?>
<?php endif; ?>
