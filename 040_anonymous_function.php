<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����֐����ĂȂ�ł����H</title>
</head>
<body>
	<div>
	<?php
		// �����Ώۂ̔z���p�ӂ���
		$nature = array('water', 'forest', 'tree', 'cloud', 'sun', 'river');
		
		//�����֐���ϐ��ɃZ�b�g����
		$filter_less5 = function($text) {
			// �f�[�^��5���������ł����ture��Ԃ�
			return strlen($text) < 5;
		};
		
		// �t�B���^�[�������s��
		$filtered_less5 = array_filter($nature, $filter_less5);
		
		// ���ʂ��o�͂���
		echo '<p>5���������̃f�[�^:</p>';
		echo '<ul>';
		foreach ($filtered_less5 as $data) {
			echo '<li>' . h($data) . '</li>';
		}
		echo '</ul>';
		
		// �����֐��𒼐ڃR�[���o�b�N�֐��Ɏw�肵�ăt�B���^�������s��
		$filtered_equal5 = array_filter($nature,
			// �f�[�^��5���������true��Ԃ�
			function ($text) {
				return strlen($text) == 5;
			}
		);
		
		// ���ʂ��o�͂���
		echo '<p>5�����̃f�[�^�F</p>';
		echo '<ul>';
		foreach ($filtered_equal5 as $data) {
			echo '<li>' . h($data) . '</li>';
		}
		echo '</ul>';
		
		function h($string)  // HTML�ł̃G�X�P�[�v����������֐�
		{
			return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		}
	?>
	</div>
</body>
</html>
