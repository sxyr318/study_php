<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�J�i������S�p���Ȃ┼�p�J�i�ɕϊ��ɂ�����</title>
</head>
<body>
	<div>
	<?php
		$text1 = '�s�b�R��';
		echo '<li><p>�u�S�p�J�^�J�i�v���u���p�J�^�J�i�v�ɕϊ�</p>';
		echo '<p>�ϊ����镶����: ' . $text1 . '</p>';
		echo '<p>' . mb_convert_kana($text1, 'k') . '</p></li>';
		
		$text2 = '������';
		echo '<li><p>�u���p�J�^�J�i�v���u�S�p�J�^�J�i�v�ɕϊ�</p>';
		echo '<p>�ϊ����镶����: ' . $text2 . '</p>';
		echo '<p>' . mb_convert_kana($text2, 'KV') . '</p></li>';
		
		$text3 = '�҂���';
		echo '<li><p>�u�S�p�Ђ炪�ȁv���u���p�J�^�J�i�v�ɕϊ�</p>';
		echo '<p>�ϊ����镶����: ' . $text3 . '</p>';
		echo '<p>' . mb_convert_kana($text3, 'h') . '</p></li>';
		
		$text4 = '�����';
		echo '<li><p>�u���p�J�^�J�i�v���u�S�p�Ђ炪�ȁv�ɕϊ�</p>';
		echo '<p>�ϊ����镶����: ' . $text4 . '</p>';
		echo '<p>' . mb_convert_kana($text4, 'HV') . '</p></li>';
		
		$text5 = '�h����';
		echo '<li><p>�u�S�p�J�^�J�i�v���u���p�Ђ炪�ȁv�ɕϊ�</p>';
		echo '<p>�ϊ����镶����: ' . $text5 . '</p>';
		echo '<p>' . mb_convert_kana($text5, 'c') . '</p></li>';
		
		$text6 = '�́[���ɂ�';
		echo '<li><p>�u�S�p�Ђ炪�ȁv���u�S�p�J�^�J�i�v�ɕϊ�</p>';
		echo '<p>�ϊ����镶����: ' . $text6 . '</p>';
		echo '<p>' . mb_convert_kana($text6, 'C') . '</p></li>';
	?>
	</div>
</body>
</html>
