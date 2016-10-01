<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> <?php print($title); ?></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">

	</head>
	<body>
		<a href="/entry/index/">エントリー</a>
		<a href="/system/admin/">管理画面</a>
		<a href="/system/admin/create">管理者登録</a>
		<a href="/phpmyadmin">PMA</a>
		<hr>
		<h1><?php echo $title; ?></h1>
		<?php print($content); ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
