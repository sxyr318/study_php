<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����ŏ����𕪊򂷂�ɂ́H</title>
</head>
<body>
	<div>
	<?php
	// �ϐ��ɐ��l��������
	$point      = 30;
	$line       = 80;
	$underline  = 40;
	
	// �ϐ����r����
	if ($point >= $line) {
		echo '���i���C��';
	}
	else if ($point >= $underline) {
		echo '�ǎ����C��';
	}
	else {
		echo '���惉�C��';
	}
	?>
	</div>
</body>
</html>