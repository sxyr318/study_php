<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���t�⎞�����擾������</title>
</head>
<body>
	<div>
	<p>���݂̓��t����v�f�ʂɕ\��<br>
	<?php
		// ���݂̓��t����v�f���擾����
		$today = getdate();
		
		// ���݂̓��t��v�f�ʂɕ\������
		echo '�N: ' . $today['year'] . '<br>';
		echo '��: ' . $today['mon'] . '<br>';
		echo '��: ' . $today['mday'] . '<br>';
		echo '�j��: ' . $today['wday'] . '�i���j�F0�`�y�j�F6�j<br>';
		echo '��: ' . $today['hours'] . '<br>';
		echo '��: ' . $today['minutes'] . '<br>';
		echo '�b: ' . $today['seconds'] . '<br>';
		echo '1��1���̓���: ' . $today['yday'];
		echo '</p>';
		
		echo '<p>�ߋ��̃^�C���X�^���v����v�f�ʂɕ\��,br>';
		$past = strtotime('2009-06-29 12:34:56');
		echo '�ߋ��̃^�C���X�^���v: ' . $past. '<br>';
		// �ߋ��̃^�C���X�^���v����v�f���擾����
		$past = getdate($past);
		
		echo '�N: ' . $past['year'] . '<br>';
		echo '��: ' . $past['mon'] . '<br>';
		echo '��: ' . $past['mday'] . '<br>';
		echo '�j��: ' . $past['wday'] . '�i���j�F0�`�y�j�F6�j<br>';
		echo '��: ' . $past['hours'] . '<br>';
		echo '��: ' . $past['minutes'] . '<br>';
		echo '�b: ' . $past['seconds'] . '<br>';
		echo '1��1���̓���: ' . $past['yday'];
	?>
	</div>
</body>
</html>
