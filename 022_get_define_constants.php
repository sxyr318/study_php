<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�萔���g�p����ɂ́H</title>
</head>
<body>
	<div>
	<?php
	define('TEST', 'PHP�t����');
	const RECIPE = '���V�s';
	
	echo '<p>��`�ςݒ萔</p>';
	echo '<pre>';
	
	// ��������true���w�肷��ƁA�J�e�S���ʂ̑������z���Ԃ�
	print_r(get_defined_constants(true));
	echo '</pre>';
	
	echo '<p>CONSTANT����`�ς݂��ǂ����𒲂ׂ�: ';
	if (define('CONSTANT')) {
		echo CONSTANT;
	}
	else {
		echo 'CONSTANT�͒�`����Ă��܂���B';
	}
	echo '</pre>';
	echo '<p>RECIPE����`�ς݂��ǂ������ׂ�: ';
	if (define('RECIPE')) {
		echo RECIPE;
	}
	else {
		echo 'RECIPE�͒�`����Ă��܂���B';
	}
	echo '</p>';
	?>
	</div>
</body>
</html>