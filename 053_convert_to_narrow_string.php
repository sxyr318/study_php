<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�S�p�p�����𔼊p�ɕϊ�����</title>
</head>
<body>
	<div>
	<?php
		$text = '�`�a�b�@�P�Q�R';  // �`�a�b��123�̊ԂɑS�p�X�y�[�X
		
		echo '<p>�ϊ����镶����: ' . $text . '</p>';
		echo '<ul>';
		
		echo '<li><p>�S�p�u�p���v�𔼊p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'r') . '</p></li>';
		
		echo '<li><p>�S�p�u�����v�𔼊p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'n') . '</p></li>';
		
		echo '<li><p>�S�p�u�p�����v�𔼊p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'a') . '</p></li>';
		
		echo '<li><p>�S�p�u�p�����v�Ɓu�X�y�[�X�v�𔼊p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'as') . '</p></li>';
	?>
	</div>
</body>
</html>
