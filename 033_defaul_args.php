<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�f�t�H���g���������w�肵����</title>
</head>
	<body>
	<div>
	<?php
	// �֐��̃f�t�H���g�����l���w�肷��
	function recommend($musician = 'The Beatles')
	{
		return '�������߂̉��y��' . $musician . '<br>';
	}
	
	// �֐������s���Č��ʂ�\������
	echo recommend();
	echo recommend('The Rolling Stones');
	?>
	</div>
</body>
</html>
