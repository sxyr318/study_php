<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���t�̕\���`����ς�����A���t�̉����Z��������</title>
</head>
<body>
	<div>
	<?php
		echo '<p>���݂̓����F ';
		// DateTime�I�u�W�F�N�g��new���Z�q�ō쐬����
		$now = new Datatime();
		
		echo $now-format('Y�Nm��d�� H��i��s�b'), '</p>';
		
		echo '<p>1�N��̓��t�F';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 year'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>1������̓��t�F';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 month'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>1����̓��t�F';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 day'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>1���O�̓��t�F';
		$now = new DateTime();
		$now->sub(DateInterval::createFormDateString('1 day'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>1���Ԍ�̓��t�F';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 hour'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>1���O�̓��t�F';
		$now = new DateTime();
		$now->sub(DateInterval::createFormDateString('1 minute'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>1�b��̓��t�F';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 second'));
		echo $now->format('Y�Nm��d��'), '</p>';
		
		echo '<p>2913�N10��1���̎��̓�: ';
		$past = new DateTime('2013-10-01');
		echo '�^�C���X�^���v: ' . $past->getTimestanp() . ': ';
		$past->add(DateInterval::createFormDateString('1 day'));
		echo $past->format('Y�Nm��d��'), '</p>';
		
	?>
	</div>
</body>
</html>
