<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>==��===�A!=��!==�̈Ⴂ�́H</title>
</head>
<body>
	<div>
	<?php
	// �ϐ��ɐ��l����
	$year = 2013;
	if ($year === 2013) {
		echo '$year�̒l��2013�Ɠ���ł�<br>';
	}
	
	// �ϐ��ɐ��l�ƕ��������
	$value1 = 5;
	$value2 = '5';
	
	if ($value1 === $value2) {
		echo '$value1��$value2�͈�v���܂���<br>';
	}
	else {
		echo '$value1��$value2�͈�v���܂���<br>';
	}
	
	// �ϐ��ɕ������������
	$place = 'Nagoya';
	if ($place === 'Nagoya') {
		echo '$place�̒l��Nagoya�Ɠ���ł�';
	}
	?>
	</div>
</body>
</html>
