<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���N�������猻�݂̔N������߂���</title>
</head>
<body>
	<div>
	<?php
		// ���N�����ƌv�Z��̃^�C���X�^���v���擾
		$birthday = mktime(0, 0, 0, 3, 14, 1983);
		$baseDay = mktime(0, 0, 0, 10, 1, 2013);
		
		echo '<p>�v�Z���̃^�C���X�^���v�l</p>';
		echo '<ul>';
		echo '<li>�a����: ' . $birthday . '</li>';
		echo '<li>�v�Z�: ' . $baseDay . '</li>';
		
		// ���N�����ƌv�Z�����YYYYMMCC�`���̐��l�ɕϊ�
		$birthdayInt = (int)date('ymd', $birthday);
		$baseDayInt = (int)date('Ymd', $baseDay);
		
		echo '<p>YYYYMMDD�`���̐��l�ɕϊ����ꂽ�l</p>';
		echo '<ul>';
		echo '<li>�a����: ' . $birthdayInt . '</li>';
		echo '<li>�v�Z���: ' . $baseDayInt . '</li>';
		echo '</ul>';
		
		// �N����Z�o
		$age = (int)(($baseDayInt - $birthdayInt) / 10000);
		echo '<p>�v�Z���ʁi�N��j: ' . $age . '</p>';
	?>
	</div>
</body>
</html>