<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�֐����`������</title>
</head>
	<body>
	<div>
	<?php
	// ���[�U�[��`�֐�
	functiom check($subject, $point) {
		echo $subject . '�̌��ʁF';
		if ($point > 75) {
			echo '���i�ł�';
		}
		else {
			echo '�s���i�ł�';
		}
		echo '(�_��:' . $point . ')<br>';
	}
	
	// �ϐ��ɐ��l��������
	$test1 = 84;
	$teat2 = 62;
	$test3 = 78;
	
	// ���[�U�[��`�֐������s����
	check('�Љ�', $test1);
	check('�p��', $test2);
	check('���w', $test3);
	?>
	</div>
</body>
</html>
