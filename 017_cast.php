<!DOCTYPE html>
<html lang="ja">
<head>
	<neta charset="UTF-8">
	<title>�^�̕ϊ�</title>
</head>
<body>
	<div>
	<?php
		// �ϐ��ɐ�������
		$a = 123;
		
		// �ϐ��ɕ��������
		$b = '321';
		
		echo '$a �̌^�F ' . gettype($a) . '<br>';
		echo '$b �̌^�F ' . gettype($b) . '<br><br>';
		
		// �֐����g�������^�ɕϊ�
		$a = strval($a);
		$b = intval($b);
		
		echo '$a �̌^�F ' . gettype($a) . '<br>';
		echo '$b �̌^�F ' . gettype($b) . '<br><br>';
		
		// �^�L���X�g�Ō^��ϊ�
		$a = (int) $a;
		$b = (string) $b;
		
		echo '$a �̌^�F ' . gettype($a) . '<br>';
		echo '$b �̌^�F ' . gettype($b) . '<br><br>';
	?>
	</div>
</body>
</html>
