<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�G���[���x����ݒ肵����</title>
</head>
<body>
	<div>
	<?php
		// �S�ẴG���[��\������
		error_reporting(E_ALL);   // PHP5.4�ȏ�̏ꍇ
		//error_reporting(E_ALL | E_STRICT);   // PHP5.3�̏ꍇ
		$test = $_POST['test'];   // Notice�G���[
		
		// �S�ẴG���[��\�����܂���
		error_reporting(0);
		$dividedByZero = 1 / 0;   // Warning�G���[�����\������Ȃ�
		
		// Fatal�G���[�AWarning�G���[�AParse�G���[�ANotice�G���[��\������
		error_reporting(E_ERROR | E_WARNIG | E_PARSE | E_NOTICE);
		
		$dividedByZero = 1 / 0;   // Warning�G���[
		
		// Notice�G���[�ȊO�̑S�ẴG���[��\������
		error_reporting(E_ALL ^ E_NOTICE);   // PHP5.4�ȏ�̏ꍇ
		
		// PHP5.3�ȑO�ł́AE_STRICT��ǉ�����K�v������̂ŁA�ȉ��̂悤�ɐݒ肷��
		// error_reporting(E_ALL ^ E_NTICF | E}STRICT);
		$test = $_POST['test'];  // Notice�G���[�����\������Ȃ�
	?>
	</div>
</body>
</html>
