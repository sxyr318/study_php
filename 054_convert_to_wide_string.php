<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���p�p������S�p�ɕϊ��ɂ�����</title>
</head>
<body>
	<div>
	<?php
		$text = 'ABC 123';
		
		echo '<p>�ϊ����镶����: ' . $text . '</p>';
		echo '<ul>';
		
		echo '<li><p>���p�u�p���v��S�p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'R') . '</p></li>';
		
		echo '<li><p>���p�u�����v��S�p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'N') . '</p></li>';
		
		echo '<li><p>���p�u�p�����v��S�p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'A') . '</p></li>';
		
		echo '<li><p>���p�u�p�����v�Ɓu�X�y�[�X�v��S�p�ɕϊ�</p>';
		echo '<p>' . mb_convert_kana($text, 'AS') . '</p></li>';
	?>
	</div>
</body>
</html>
