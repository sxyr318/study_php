<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�^�ϊ��̒���</title>
</head>
<body>
	<div>
	<?php
		// �����镂�������_�𒴂������l�͖�����ƂȂ�
		$a = 1e1000;	// 1 �~ 10^1000
		$b = (string)$a;
		echo $b . '<br>';
		
		// �z��𕶎���ɕϊ�����ƕK��Array�ƂȂ�
		$a = array('a', 'b', 'c');
		$b = (string)$a;	// PHP5.4�ȍ~�ł�Notice�G���[������
		echo $b . '<br>';
	?>
	</div>
</body>
</html>
