<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�A���t�@�x�b�g��啶�����珬�����ɕϊ�������</title>
</head>
<body>
	<div>
	<?php
		$text1 = 'THIS IS A PEN.';
		echo '�ϊ����镶����F' . $text1 . '<br>';
		
		echo '���ׂẲp�����������ɂ���(strtolower)';
		echo strtolower($text1) . '<br><br>';
		
		$text2 = '�s�g�h�r�@�h�r�@A�@�o�d�m';   // A �̂ݔ��p
		echo '�ϊ����镶����F' . $text2 . '<br>';
		
		echo '�S�p�p�����������ɂ���(mb_strtolower)';
		echo mb_strtolower($text2) . '<br>';
	?>
	</div>
</body>
</html>
