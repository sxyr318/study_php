<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset"UTF-8">
	<title>�ϐ��̃X�R�[�v</title>
</head>
<body>
	<div>
	<?php
		// �ϐ�$a�̓O���[�o���X�R�[�v�̕ϐ��ɂȂ�
		$a = '�O���[�o��$a';
		
		// �ϐ�$b���O���[�o���ϐ��ł���
		$b = '�O���[�o��$b';
		
		function test ()
		{
			// ������̕ϐ�$a�́A���̊֐����ł̂ݗL���ȃ��[�J���X�R�[�v�̕ϐ��ł��B
			// �O���[�o���ϐ�$a�Ƃ͕ʂ̕ϐ��ɂȂ�܂��B
			$a = '���[�J��$a';
			echo $a . '<br>';
			
			// �֐����ŃO���[�o���ϐ����g�������ꍇ��global�L�[���[�h���g���܂��B
			global $b;
			echo $b . '<br>';
		}
		
		test();
		echo $a . '<br>';
		echo $b;
	?>
	</div>
</body>
</html>	
