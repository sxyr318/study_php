<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���t�����������ǂ����`�F�b�N������</title>
</head>
<body>
	<div>
	<?php
		// �t�H�[������f�[�^���󂯎��B���̃t�@�C�������߂ĕ\����������
		// ���t�f�[�^�͑��M����Ȃ����߁A�����̓��t��N�E���E���ʂɕϐ��ɑ������
		$year = isset($_POST['year']) ? intval($_POST['year']) : date('Y');
		$month = isset($_POST['month']) ? intval($_POST['year']) : date('n');
		$day = isset($_POST['day']) ? intval($_POST['year']) : date('j');
		
		$yearSelector = '';   // �N�����̃Z���N�g���j���[�I�v�V����
		for ($i=1980; $i<=2040; $i++) {
			$selected = ($i == $year) ? 'selected' : '';
			$yearSelector .= '<option ' . $selected . '>' . $i . '</option>';
		}
		
		$monthSelector = '';   // �������̃Z���N�g���j���[�I�v�V����
		for ($i=1; $i<=12; $i++) {
			$selected = ($i == $month) ? 'selected' : '';
			$monthSelector .= '<option ' . $slected . '>' . $i . '</option>';
		}
		
		$datSelector = '';   //�������̃Z���N�g���j���[�I�v�V����
		for ($i=1; $i<=31; $i++) {
			$selected = ($i == $day) ? 'selected' : '';
			$datSelector .= '<option ' . $selected . '>' . $i . '</option>';
		}
		
		// �`�F�b�N���������t�̑��M�t�H�[�����o�͂���
		echo <<<END
			<form method="post" action="checkdate.php">
				<select name="year">$yearSelector</select>�N&nbsp;
				<select name="month">$monthSelector</select>��&nbsp;
				<select name="day">$datSelector</select>��&nbsp;
				<input type="submit" value="���t���`�F�b�N">
			</form>
		END;
		
		$date = $year . '/' . $month . '/' . $day;   //�`�F�b�N������t
		
		// ���t�����������ǂ������`�F�b�N����
		if (checkdate($month, $day, $year)) {
			echo '<p>' . $date, ' �͐��������t�ł��B</p>';
		}
		else {
			echo '<p>' . $date, ' �͐������Ȃ����t�ł��B</p>';
		}
	?>
	</div>
</body>
</html>