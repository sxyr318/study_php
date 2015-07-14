<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>��3���j�������߂���</title>
</head>
<body>
	<div>
	<?php
		echo '<p>2013�N7���̑�3���j���i�C�̓��j���v�Z����</p>';
		
		$year= 2013;
		$month = 7;
		$week = 3;
		$weekday = 1;  // ���j��
		
		echo '<ul>';
		echo '<li>�N�F' . $year . '</li>';
		echo '<li>���F' . $month . '</li>';
		echo '<li>�T�ԍ��F' . $week . '</li>';
		echo '<li>�j���A0(���j)����6(�y�j)�F' . $weekday . '</li>';
		echo '</ul>';
		
		echo '<p>�v�Z����: ';
		$ret = getNthWeekday($year, $month, $week, $weekday);
		if ($ret !== false) {
			echo $ret . '��';
		}
		else {
			echo '�Y��������t�͑��݂��܂���B';
		}
		echo '</p>';
		
		// getNthWeekday()�֐�
		// �w��N���̑�Z�Ԗڂ́Z�j���̓��t��Ԃ��B
		// �Y��������t�����݂��Ȃ��ꍇ��false��Ԃ��B
		// ��1�����ɂ͔N���w�肷��B
		// ��2�����ɂ͌����w�肷��B
		// ��3�����ɂ͏T�ԍ��i��Z�T�ځj���w�肷��B
		// ��4�����ɂ͗j����0(���j)����6(�y�j)�̐��l�Ŏw�肷��B
		function getNthWeekday($year, $month, $week, $weekday)
		{
			// �T�̎w�肪������������
			if ($week < 1 || $week > 5) {
				return false;
			}
			
			// �j���̎w�肪������������
			if ($weekday < 0 || $weekday > 6) {
				return false;
			}
			
			// �w�肵���N���̌������i1���j�̗j�����擾����
			$weekdayOffFirst = (int)date('w', mktime(0, 0, 0, $month, 1, $year));
			
			// �������̗j�������ɂ��đ�1�Z�j���̓��t�����߂�
			$firstDay = $weekday - $weekdayOffFirst + 1;
			if ($firstDay <= 0) {
				$firstDay += 7;
			}
			
			// ��1�Z�j����7�̔{�������Z���āA��Z�T�́Z�j���̓��t�����߂�
			$resultDay = $firstDay + 7 * ($week - 1);
			
			// �Ō�Ɍv�Z���ʂ��Ó��ȓ��t���ǂ����`�F�b�N����
			if (!checkdate($month, $resultDay, $year)) {
				return false;
			}
			
			return $resultDay;
		}
	?>
	</div>
</body>
</html>