<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���K�\���ɂ�镡�G�ȕ�����̒u��������������</title>
</head>
<body>
	<div>
	<?php
		// ���̕������ݒ肷��
		$text = <<<EOL
		�N���W�b�g�J�[�h�ԍ��F1234 5678 9012 3456
		�d�b�ԍ��F090-1234-5678
		���l�F���ɂȂ�
		EOL;
		
		echo '<p>���̕�����F</p>';
		echo '<pre>' . $text . '</pre>';
		
		// �N���W�b�g�J�[�h�ԍ���****�Œu��������
		$replaced = mb_ereg_replace('\d{4} ?\d{4} ?\d{4} ?\d{4}', '****', $text);
		
		// �d�b�ԍ���****�Œu��������
		$replaced = mb_ereg_replace('0\d{1,4}-?\d{1,4}-?\d{4}', '****', $replaced);
		
		// ���ʂ�\������
		echo '<p>�u��������F</p>';
		echo '<pre>' . $replaced . '</pre>';
	?>
	</div>
</body>
</html>
