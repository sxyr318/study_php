<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���݂̃^�C���X�^���v���擾������</title>
</head>
<body>
	<div>
	<?php
		echo '���݂̃^�C���X�^���v(time): ' .time() . '<br>';
		echo '���݂̃^�C���X�^���v(microtime): ' . microtime() .'<br>';
		
		// microtime()�֐��̖߂�l��explode()�֐����g���X�y�[�X�ŕ������Ĕz��Ɋe�X�̒l��������
		$now = explode(' ', microtime());
		
		// �z��ɑ�����ꂽ�l�𑫂�
		$time = $now[0] + $now[1];
		
		// �}�C�N���b�i�����_�ȉ�6���j�܂ŕ\�����邽�߂�sprintf()�֐��𗘗p����
		echo '���݂̃^�C���X�^���v(float�Łj�F' . sprintf('%0.6f', $time) . '<br>';
		
		// ������true���w�肷�邱�ƂŖ߂�l��float�^�ɂȂ�
		echo '���݂̃^�C���X�^���v�ifloat�Łj: ' . sprintf('%0.6f', microtime(true));
		
	?>
	</div>
</body>
</html>
