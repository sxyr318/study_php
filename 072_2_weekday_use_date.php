<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�w�肵�����t�̗j�������߂���</title>
</head>
<body>
	<div>
	<?php
		// 2013�N10��1���̃^�C���X�^���v
		$timestamp = mktime(0, 0, 0, 10, 1, 2013);
		$wday = (int)date('w', $timestamp);
		
		echo '<p>���t�F ' . date('Y/m/d', $timestamp) . '</p>';
		echo '<p>���ʁF ' . $wday . '</p>';
	?>
	</div>
</body>
</html>