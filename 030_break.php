<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�J��Ԃ������̓r���Ń��[�v�𔲂�����</title>
</head>
<body>
	<div>
	<?php
	// �ϐ��ɐ��l��������
	$count = 1;
	$sum   = 0;
	
	// �J��Ԃ��������s��
	while ($count <= 100) {
		$sum += $count;
		
		if ($sum > 1000) {
			echo '1000�𒴂����̂�count��' . $count . '�ŏI�����܂�<br>';
			break;
		}
		
		$count += 1;
	}
	
	// ���v��\������
	echo 'sum��' . $sum;
	?>
	</div>
</body>
</html>
