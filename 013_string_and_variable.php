<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�ϐ��ƕ�����̏o��</title>
</head>
<body>
<?php
	// �ϐ�$name�ɕ��������
	$name = 'PHP�t�������V�s';
	
	// �ϐ�$Name�ɕ���������B$name��$Name�͕ʂ̕ϐ�
	$Name = 'CadeIgiter�O�����';
	
	// ������ƕϐ��̒l��echo���ŕ\��
	echo '���Ж��F' . $name . '<br>';
	echo "���Ж��F {$Name}\n<br>";
	echo '���Ж��F {$Name}\n<br>';
	
	$format = '���Ж��F %s�A%s<br>';
	echo sprintf($format, $name, $Name);
?>
</body>
</html>