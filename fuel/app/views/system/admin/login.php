<?php
 ?>

 <?php echo Form::open('system/admin'); ?>
 <dl class="">
	 <dt>
		 <?php echo Form::label('ユーザ名','username'); ?>
	 </dt>
	 <dd>
		 <?php echo Form::input('username'); ?>
	 </dd>
	 <dt>
		 <?php echo Form::label( 'パスワード','password'); ?>
	 </dt>
	 <dd>
		 <?php echo Form::password('password'); ?>
	 </dd>
 </dl>
 <p>
	 <?php echo Form::submit('submit', 'ログイン'); ?>
 </p>
 <?php echo Form::close(); ?>
