<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�萔���g�p����ɂ́H</title>
</head>
<body>
	<div>
	<?php
	// �萔���`����
	define('HELLO', 'Hello world!');
	echo '�萔�F HELLO: ' . HELLO . '<br>';
	
	// �萔Hello�͒�`����Ă��Ȃ�����Notice�G���[����������
	echo '�萔�F Hello: ' . Hello . '<br>';
	
	// �萔��`�̖߂�l��$result�ɑ���B��3������true���w�肵�đ啶���E����������ʂ��Ȃ��悤�ɂ���
	$result = define('GREETING', '����ɂ���', true);
	
	if ($result) {
		echo '�萔�F GREETING: ' . GREETING . '<br>';
		echo '�萔�F Greeting: ' . Greeting . '<br>';
	}
	else {
		echo '�萔�̒�`�Ɏ��s���܂����B' . '<br>';
	}
	
	// PHP5.3�ȍ~�ł́Aconst1�L�[���[�h���g�����Ƃł���`�ł���
	const WORLD = 'World';
	echo '�萔: WORLD: ' . WORLD;
	?>
	</div>
</body>
</html>