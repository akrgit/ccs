<?php echo Form::open('system/admin/password') ?>
<?php echo Form::label('パスワードを入力', 'pass_in' ); ?>
<?php echo Form::input('pass_in', Session::get_flash('pass_in'),array(
  'required'=>'',
  'size'=>'60')); ?>
<br>
<?php echo Form::label('ハッシュ化した結果', 'pass_out'); ?>
<?php echo Form::input('pass_out', $pass_out,array('size'=>'60')); ?>
<br>
<?php echo Form::submit('submit', '生成'); ?>
<?php echo Form::close(); ?>
