<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�O�����Z�q�̎g������m�肽��</title>
</head>
<body>
	<div>
	<?php
		$language = 'ja';
		
		// �O�����Z�q�̌��ʂ�ϐ��ɑ������
		$message = ($language == 'ja') ? '���{��' : 'japanese';
		echo $message . '<br>';
		
		// �O�����Z�q�̏ȗ��`
		$message = $message ?: '���b�Z�[�W�͋�';
		echo $message . '<br>';
		
		// $message�ɋ󕶎���������
		$message = '';
		$message = $message ?: '���b�Z�[�W�͋�';
		echo $message . '<br>';
	?>
	</div>
</body>
</html>
