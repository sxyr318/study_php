<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�֐��̈����ɕt���������ĉ��ł���</title>
</head>
	<body>
	<div>
	<?php
	// ���������Q�Ɠn���̊֐����`����
	function breakfast(&$drink)
	{
		$drink = '�A�C�X�R�[�q�[';
	}
	
	// �ϐ��ɕ�����������A���̂܂ܕ\������
	$string = '�z�b�g�R�[�q�[';
	echo '�֐����s�O��$string: ' . $string . '<br>';
	
	// �ϐ����������ɂ��Ċ֐������s����
	breakfast($string);
	
	// �֐����s��̕ϐ���\������
	echo '�֐����s���$string: ' . $string;
	?>
	</div>
</body>
</html>
