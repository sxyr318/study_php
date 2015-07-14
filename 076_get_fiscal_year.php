<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�w�肵�����t�̔N�x�����߂���</title>
</head>
<body>
	<div>
	<?php
		$time = mktime(0, 0, 0, 2, 15, 2013);  // �N�x�����߂������t
		$startMonth = 4;
		
		echo '<p>���t�F ' . date('Y/m/d', $time) . '</p>';
		echo '<p>�؂�ւ���: ' . $startMonth . '��</p>';
		
		$ret = getFiscalYear($startMonth,$time);
		if ($ret !== false) {
			echo '<p>�N�x: ' . $ret . '�N�x</p>';
		}
		else {
			echo '<p>�s���ȔN�x�؂�ւ����ł�</p>';
		}
		
		// getFiscalYear()�֐�
		// �N�x���擾����B��1�����ɔN�x�̐؂�ւ������w�肷��B
		// ��2�����ɔN�x�����߂������t�̃^�C���X�^���v���w�肷��B
		// �ȗ������ꍇ�͌��݂̓����Ōv�Z���s���B
		function getFiscalYear($startMonth, $timestamp = false)
		{
			if ($startMonth < 1 || $startMonth > 12) {
				return false;
			}
			
			// ���t���ȗ����ꂽ�ꍇ�͌��݂̓��t���g�p
			if ($timestamp === false) {
				$date = getdate();
			}
			else {
				$date = getdate($timestamp);
			}
			
			// �N�x�̌v�Z������
			$year = $date['year'];
			$month = $date['mon'] - ($startMonth - 1);
			$result = getdate(mktime(0, 0, 0, $month, 1, $year));
			
			return $result['year'];
		}
	?>
	</div>
</body>
</html>