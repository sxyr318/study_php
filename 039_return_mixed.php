<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�֐����琔�l�̒l���󂯎��</title>
</head>
<body>
	<?php
		function sales($string = '')
		{
			$array = array('apple', 'orange', 'grape', 'pear', 'peach', 'mango');
			if ($string) {
				$result = in_array($string, $array);
			}
			else {
				$result = '';
			}
			
			return array($array, $result);
		}
		
		// �ʕ����X�g���擾����
		list($list,) = sales();
		echo '<p>���������t���[�c�ꗗ<br>';
		foreach($list as $value) {
			echo $value . '<br>';
		}
		echo '</p>';
		
		// �ʕ����X�g��apple�����邩���ׂ�
		list(, $result) = sales('apple');
		echo '<p>apple�͂��������t���[�c�ꗗ�ɂ���܂����H<br>';
		if ($result == true) {
			echo '������܂����I';
		}
		echo '</p>';
	?>
</body>
</html>
