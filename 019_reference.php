<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�ϐ��̒l���ƎQ�Ɠn��</title>
</head>
<body>
	<div>
	<?php
	$a = '�ύX�O';
	
	// �l�n���B$b�ɂ�$a�̒l���R�s�[�������̂���������
	$b = $a;
	
	// �Q�Ɠn���B$c��$a�͓����l���w��
	$c =& $a;
	
	echo '$a: ' . $a . ' ';
	echo '$b: ' . $b . ' ';
	echo '$c: ' . $c . '<br>';
	
	$a = '�ύX��';
	
	echo '$a: ' . $a . ' ';
	echo '$b: ' . $b . ' ';
	echo '$c: ' . $c . '<br>';
	?>
	</div>
</body>
</html>
