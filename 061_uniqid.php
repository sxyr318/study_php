<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ユニークなIDを作成したい</title>
</head>
<body>
	<div>
	<?php
		echo uniqid() . '<br>';
		echo uniqid() . '<br>';
		echo uniqid('test_') . '<br>';
		echo uniqid('test_') . '<br>';
		echo uniqid('', true) . '<br>';
		echo uniqid('', true) . '<br>';
		echo uniqid('test_', true) . '<br>';
		echo uniqid('test_', true) . '<br>';
		echo md5(uniqid(mt_rand(), true)) . '<br>';
	?>
	</div>
</body>
</html>
