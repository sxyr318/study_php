<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����������߂���</title>
</head>
<body>
	<div>
	<?php
		// ���������߂����N�ƌ�
		$year = 2016;
		$month = 2;
		
		// 2016�N2��10���̃^�C���X�^���v
		$timestamp = mktime(0, 0, 0, $month, 10, $year);
		
		// date()�֐��̑�1�����ut�v�ŁA��2�����Ŏw�肵�����̓������擾
		$lastday = intval(date('t', $timestamp));
		
		echo "<p> $year �N $month ���̖����� $lastday ���ł��B</p>";
	?>
	</div>
</body>
</html>