<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�ϐ��̌^�𒲂ׂ�</title>
</head>
<body>
	<div>
	<?php
		// �ϐ��ɐ�������
		$a = 123;
		
		// �ϐ��ɕ��������
		$b = '321';
		
		echo '$a �̌^�F ' . gettype($a) . '<br>';
		echo '$b �̌^�F ' . gettype($b) . '<br>';
		
		// is_int()�֐��͐����^���ǂ����Ԃ�
		if (is_int($a)) {
			echo '$a �� integer �ł�<br>';
		}
		else {
			'$a �� integer�ł͂���܂���<br>';
		}
		
		// is_string()�֐��͕����^���ǂ����Ԃ�
		if (is_string($b)) {
			echo '$b �� string �ł�';
		}
		else {
			echo '$b �� string �ł͂���܂���';
		}
		
		// var_dump()�֐��ł��^���킩��
		echo '<pre>';
		var_dump($a);
		var_dump($b);
		echo'</pre>';
	?>
	</div>
</body>
</html>