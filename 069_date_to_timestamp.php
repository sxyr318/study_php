<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���t���^�C���X�^���v�ɂ�����</title>
</head>
<body>
	<div>
	<?php
		// ���t�̐ݒ�
		$year   = 2013;
		$month  = 1;
		$day    = 1;
		$hour   = 10;
		$minute = 30;
		$second = 50;
		
		echo '<p>mktime()�֐�: <br>';
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		echo "����: {$year}�N{$month}��{$day}��{$hour}��{$minute}��{$second}�b<br>";
		echo '�^�C���X�^���v: ' . $timestamp . '<br>';
		echo '���t�ɕϊ����m�F: ' . date('Y/m/d H:i:s', $timestamp) . '<br><br>';
		
		// ���t�̐ݒ�
		$year   = 2113;
		$month  = 12;
		$day    = 12;
		$hour   = 23;
		$minute = 15;
		$second = 30;
		
		// mktime()�֐��ł́A32�r�b�g�V�X�e���ł�2038�N�ȍ~�̓��t�������ł��Ȃ�
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		echo "����: {$year}�N{$month}��{$day}��{$hour}��{$minute}��{$second}�b<br>";
		echo '�^�C���X�^���v: ' . $timestamp . '<br>';
		echo '���t�ɕϊ����m�F: ' . date('Y/m/d H:i:s', $timestamp) . '<p>';
		
		// DateTime�N���X���g���ƁA32�r�b�g�V�X�e���ł�2038�N�ȍ~�̓��t�������ł���
		echo '<p>DateTime�N���X: <br>';
		$date = new DateTime("$year/$month/$day $hour:$minute:$second");
		
		// Datetime�N���X��format()���\�b�h��'U'���w�肷��ƕ�����Ń^�C���X�^���v���擾�ł���
		$timestamp = $date->format('U');
		echo "���t: {$year}�N{$month}��{$day}��{$hour}��{$minute}��{$second}�b<br>";
		echo '�^�C���X�^���v: ' . $timestamp . '<br>';
		
		// DateTime�N���X�̃R���X�g���N�^�Ɂu@ + �^�C���X�^���v�v���w�肷���
		// ���̃^�C���X�^���v��DateTime�I�u�W�F�N�g�𐶐��ł���
		$date = new DateTime("@$timestamp");
		
		// �^�C���X�^���v���w�肵�Đ�������DateTime�I�u�W�F�N�g�́A���݂̃^�C���]�[����
		// ���������UTC�ɂȂ邽�߁A�^�C���]�[����Asia/Tokyo�ɕύX����
		$date->setTimezone(new DateTimeZone('Asia/Tokyo'));
		echo '���t�ɕϊ����m�F: ' . $date->format('Y/m/d H:i:s') . '</p>';
	?>
	</div>
</body>
</html>
