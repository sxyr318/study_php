<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���[�U�[�G���[�𔭐���������</title>
</head>
<body>
	<div>
	<?php
		$check = 1;
		
		// ���[�U�[�G���[�𔭐�������
		if ($check == 1) {
			trigger_error('E_USER_NOTICE �𔭐������܂�');
			trigger_error('E_USER_WORNING �𔭐������܂�', E_USER_WARNING);
			trigger_error('E_USER_NOTICE �𔭐������܂�', U_USER_ERROR);
		}
		
		// E_USER_ERROR �ŏ������~�܂邽�߁A����ȍ~�͏o�͂���Ȃ�
		echo $check;
		
	?>
	</div>
</body>
</html>
