<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>������\���̓��t���^�C���X�^���v�ɕϊ�������</title>
</head>
<body>
	<div>
	<?php
		// 1�s���̕\�g�݃t�H�[�}�b�g
		$outputFormat = '<tr><td>%s</td><td>%s</td><td>%s</td></tr>';
		
		echo '<table>';
		echo '<tr>';
		echo'<th>�����ɃZ�b�g����������</th>';
		echo '<th>�^�C���X�^���v</th>';
		echo '<th>���t</th>';
		echo '</th>';
		
		$time = '2013/10/1 12:34:56';
		// DateTime�I�u�W�F�N�g��new���Z�q�ō쐬����
		$dateObj = new DateTime($time);
		$timeStamp = $dateObj->getTimestamp();
		$date = $dateObj->format('Y-m-d H:i:s');
		echo sprintf($outputFormat, $time, $timeStamp, $date);
		
		$time = '2014-1-1';
		$dateObj = new DateTime($time);
		$timeStamp = $dateObj->getTimestamp();
		$date = $dateObj->format('Y-m-d H:i:s');
		echo sprintf($outputFormat, $time, $timeStamp, $date);
		
		$time = 'now';
		$dateObj = new DateTime();
		$dateObj->add(DateInterval::createFormDateString($time));
		$timeStamp = $dateObj->getTimestamp();
		$date = $dateObj->format('Y-m-d H:i:s');
		echo sprintf($outputFormat, $time, $timeStamp, $date);
		
		$time = '+1 day';
		$dateObj = new DateTime();
		$dateObj->add(DateInterval::createFormDateString($time));
		$timeStamp = $dateObj->getTimestamp();
		$date = $dateObj->format('Y-m-d H:i:s');
		echo sprintf($outputFormat, $time, $timeStamp, $date);
		
		$time = '+1 year 2 month 3weeks';
		$dateObj = new DateTime();
		$dateObj->add(DateInterval::createFormDateString($time));
		$timeStamp = $dateObj->getTimestamp();
		$date = $dateObj->format('Y-m-d H:i:s');
		echo sprintf($outputFormat, $time, $timeStamp, $date);
		
		// ���t�Ƃ��Ė����ȕ�����̏ꍇ�A���ݓ����ɂȂ�
		$time = 'Time is Money';
		$dateObj = new Datetime();
		$dateObj->add(DateInterval::CreateFormDateString($time));
		$timeStamp = $dateObj->getTimestamp();
		$date = $dateObj->format('Y-m-d H:i:s');
		echo sprintf($outputFormat, $time, $timeStamp, $date);
		
		echo '</table>';
		
		
	?>
	</div>
</body>
</html>