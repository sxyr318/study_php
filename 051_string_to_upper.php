<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�A���t�@�x�b�g������������啶���ɕϊ�������</title>
</head>
<body>
	<div>
	<?php
		$text1 = 'this is a pen.';
		echo '<p>�ϊ����镶����F' . $text1 . '</p>';
		echo '<ul>';
		
		echo '<li><p>���ׂẴA���t�@�x�b�g��啶���ɂ���(strtoupper)</p>';
		echo '<p>' . strtoupper($text1) . '</p></li>';
		
		echo '<li><p>1�����ڂ�����啶���ɂ���(ucfirst)</p>';
		echo '<p>' . ucfirst($text1) . '</p></li>';
		
		echo '<li><p>�P���1�����ڂ�啶���ɂ���(ucwords)</p>';
		echo '<p>' . ucwords($text1) . '</p></li>';
		
		echo '</ul>';
		
		$text2 = '���������@�����@a�@������';   // a �̂ݔ��p
		echo '<p>�ϊ����镶����F' . $text2 . '</p>';
		echo '<ul>';
		echo '<li><p>�S�p�A���t�@�x�b�g��啶���ɂ���(mb_strtoupper)</p>';
		echo '<p>' . mb_strtoupper($text2) . '</p></li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
