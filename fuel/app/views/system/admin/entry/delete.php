<?php echo Session::get_flash('msg'); ?>
<?php if ($id_del): ?>
	<?php echo Form::open('/system/admin/entry/delete/'); ?>
	<?php echo Form::submit('submit','はい'); ?>
	<?php echo Form::hidden('id',$id_del); ?>
	<input type="button" onClick='history.back();' value="いいえ">
	<?php echo Form::close(); ?>
<?php endif; ?>
