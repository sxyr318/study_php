<!DOCTYPE html>
<tml lang="ja">
<head>
	<meta charset="UTF-8">
	<title>������̈ꕔ�����o������</title>
</head>
<doby>
	<div>
	<?php
		// ���p�p�����݂̂̕����񂩂�ꕔ�����o��
		$english = 'abcde-12';
		echo '<p>���p�p�����i�Ώۂ̕�����F' . $english . '�j</p>';
		echo '<ul>';
		echo '<li>1�����ڂ���5����: ' . mb_substr($english, 0, 5) . '</li>';
		echo '<li>3�����ڂ���Ō�܂�: ' . mb_substr($english, 3) . '</li>';
		echo '<li>�Ō��4����: ' . mb_substr($english, -4) . '</li>';
		echo '</ul>';
		
		// �S�p�����݂̂̕����񂩂�ꕔ�����o��
		$japanese = '�����������P�Q�R���O';
		echo '<p>�S�p�����i�Ώۂ̕�����F' . $japanese . '�j</p>';
		echo '<ul>';
		echo '<li>1�����ڂ���5����: ' . mb_substr($japanese, 0, 5) . '</li>';
		echo '<li>3�����ڂ���Ō�܂�: ' . mb_substr($japanese, 3) . '</li>';
		echo '<li>�Ō��4����: ' . mb_substr($japanese, -4) . '</li>';
		echo '</ul>';
		
		// �S���p���݂̕����񂩂�ꕔ�����o��
		$bilingual = 'abc�������������O123';
		echo '<p> �S���p���݁i�Ώۂ̕�����F' . $bilingual . '�j</p>';
		echo '<ul>';
		echo '<li>1�����ڂ���5����: ' . mb_substr($bilingual, 0, 5) . '</li>';
		echo '<li>3�����ڂ���Ō�܂�: ' . mb_substr($bilingual, 3) . '</li>';
		echo '<li>�Ō��4����: ' . mb_substr($bilingual, -4) . '</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>	
