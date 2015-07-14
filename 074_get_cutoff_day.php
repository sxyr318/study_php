<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����������߂���</title>
</head>
<body>
	<div>
	<?php
		$cutOffDay = 25;
		$date = mktime(0, 0, 0, 10, 27, 2013);
		
		echo '<p>���ߓ�: ' . $cutOffDay . '��</p>';
		echo '<p>�v�Z���: ' . date('Y/m/d', $date) . '</p>';
		
		$ret = getCutOffDate($cutOffDay, $date);
		if ($ret !== false) {
			echo '<p>����: ' . date('Y/m/d', $ret) . '</p>';
		}
		else {
			echo '<p>�s���Ȓ��ߓ��ł��B</p>';
		}
		
		// getCutOffDate()�֐�
		// ��1�����ɂ͒������w�肷��B1����31�ɐ��l���w�肷��B
		// ��2�����ɂ͌v�Z����̃^�C���X�^���v���w�肷��B
		// �ȗ������ꍇ�́A���݂̓����̒������v�Z����B
		function getCutOffDate($cutOffDay, $timestamp = false)
		{
			// �^�C���X�^���v�ȗ����͌��݂̓������v�Z����Ƃ���
			if ($timestamp === false) {
				$timestamp = time();
			}
			
			// �w�肵��������1����31�͈̔͂Ŏw�肳��Ă��邩���f����
			if ($cutOffDay < 1 || $cutOffDay >31) {
				return false;
			}
			
			// �v�Z����̃^�C���X�^���v����N�A���A���A���������擾����
			$date = getdate($timestamp);
			$year = $date['year'];
			$month = $date['mon'];
			$day = $date['mday'];
			$endOfMonth = (int)date('t', $timestamp);
			
			// ���������w��������O�ƂȂ��Ă��܂��Ă���ꍇ�A������������Ƃ��Ĉ����B
			// ��������w������͂Ƃ��ɐ��l�Ȃ̂ŁAmin()�֐����g����1�s�Œl�̔���Ƒ�����s���B
			$fixedCutOffDay = min($endOfMonth, $cutOffDay);
			
			// �v�Z������������߂��Ă���ꍇ�A�����̒������擾����
			if ($day > $fixedCutOffDay) {
				$month++; // �������Z;
				
				// �w������Ɨ����̌��������r���A�����ȕ�������Ƃ���
				$endOfNextMonth = (int)date('t', mktime(0, 0, 0, $month, 1, $year));
				$fixedCutOffDay = min($endOfNextMonth, $cutOffDay);
			}
			
			// ���ߓ��̃^�C���X�^���v��Ԃ�
			return mktime(0, 0, 0, $month, $fixedCutOffDay, $year);
		}
	?>
	</div>
</body>
</html>