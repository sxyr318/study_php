<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�J��Ԃ������̓r���ŃX�L�b�v������</title>
</head>
<body>
	<div>
	<?php
	// �ϐ��ɐ��l��������
	$count1 = 0;
	$sum 	= 0;
	
	// �J��Ԃ��������s��
	while ($count1 < 10) {	// continue�����s���ꂽ���ɏ������ʂ��
		$count1 += 1;
		$count2 = 0;
		echo 'count1=' . $count1 . ' ';
		
		while ($count2 < 10) {
			$count2 += 1;
			echo 'count2=' . $count2 . ' ';
			echo 'count1*count2=' . $count1 * $count2 . '<br>';
			
			if ($count1 * $count2 > 30) {
				countinue 2;
			}
			$sum += $count1 * $count2;
		}
	}
	?>
	</div>
</body>
</html>
