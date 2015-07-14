<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���t��a��\�L�ɂ�����</title>
</head>
<body>
	<div>
	<?php
		$year = 2013;
		$month = 10;
		$day = 1;
		echo '<p>����: ' . $year . '/' . $month . '/' . $day . '</p>';
		$ret = toJapaneseDate($year, $month, $day);
		
		if ($ret !== false) {
			echo '<p>�a��: ' . $ret . '</p>';
		}
		else {
			echo '<p>�s���Ȑ��N�����ł�</p>';
		}
		
		// toJapaneseDate()�֐�
		// �����a��\�L�̕�����ɕϊ�����B
		// �������A���̊֐���1873�N�i����6�N�j���O�̓��t��ϊ��ł��Ȃ��B
		// �����ɂ͐���̔N�A���A�����w�肷��
		function toJapaneseDate($year, $month, $day)
		{
			// �s���ȔN�����A1872�N�ȑO���w�肳�ꂽ�ꍇ��false��Ԃ�
			if (!checkdate($month, $day, $year) || $year < 1873) {
				return false;
			}
			
			// �����YYYYMMDD�`���̐��l�ɕϊ�����
			$date = (int)sprintf('%04d%02d%02d', $year, $month, $day);
			
			// ���t���l���猳���Ƙa��N�����߂�
			if ($date >= 19890108) {   // 1989�N1��8�����畽��
				$label = '����';
				$localYear = $year - 1989;
			}
			else if ($date >= 19261225) {   // 1926�N12��25�����珺�a
				$label = '���a';
			}
			else if ($date >= 19120730) {   // 1912�N7��30������吳
				$label = '�吳';
			}
			else {   // ����ȑO�͖���
				$label = '����';
				$localYear = $year - 1868;
			}
			
			// �����Z�N�Z���Z���̂悤�ɏ����𐮂���B������1�N�ڂ̏ꍇ�͌��N�Ƃ���B
			if ($localYear ==1 ) {
				$wareki = $lable . '���N';
			}
			else {
				$wareki = $label . $localYear . '�N';
			}
			
			return $wareki . $month . '��' . $day . '��';
		}
	?>
	</div>
</body>
</html>