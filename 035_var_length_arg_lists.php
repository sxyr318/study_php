<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�ϒ������̊֐����`����</title>
</head>
<body>
	<div>
	<?php
		// �ϒ������̊֐�
		function config()
		{
			// �����̐���������
			$num = func_num_args();
			
			// ������z��Ƃ��đ��
			$args = func_get_args();
			
			$config = array();
			
			// �����̐�����foreach�\���Ń��[�v����
			foreach ($args as $arg) {
				// �����ł̓T���v���̂��߁A�󂯂����������ƂɘA�z�z��ɑ�����邾���ł����A
				// ���ۂ́A�f�[�^�x�[�X�ɐݒ��ۑ�����Ȃǂ��l�����܂��B
				
				$config[$arg[0]] = $arg[1];
			}
			
			echo '�����̐�' . $num . '<br>';
			echo '���e';
			var_dump($config);
		}
		
		// �ݒ荀�ږ��Ɛݒ�l���`����
		$config1 = array('�ݒ�1', 100);
		$config2 = array('�ݒ�2', 200);
		$config3 = array('�ݒ�3', 'ABC');
		
		// �����ɐݒ�l��n���֐����Ăяo���B�����̐��͂�����ł����₹��B
		config($config1, $config2, $config3);
	?>
	</div>
</body>
</html>
	