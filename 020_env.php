<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���ϐ��̏��</title>
</head>
<body>
	<div>
	<?php
	// h()�֐���ǂݍ���
	require_once '../../../../lib/h.php';
	
	$agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$ip    = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
	$ref   = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
	
	echo '�u���E�U: ' . h($agent) . '<br>';
	echo 'IP�A�h���X: ' . h($ip) . '<br>';
	echo '�Q�ƌ�: ' . h($ref) . '<br>';
	
	echo '<pre>';
	var_dump(h($_SERVER));
	echo '</pre>';
	?>
	</div>
</body>
</html>
