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
		$date = getdate($timestamp);
		$wday = $date['wday'];
		
		// �j�����l�𕶎��\�L�ɕϊ����邽�߂̔z��
		$weekdayLable = array('��', '��', '��', '��', '��', '��', '�y');
		echo '<p>���t�F ' . date('Y/m/d', $timestamp) . '</p>';
		echo '<p>���ʁF ' .$wday . '(' . $weekdayLable[$wday] . ')</p>';
	?>
	</div>
</body>
</html>