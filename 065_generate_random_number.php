<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����𔭐���������</title>
</head>
<body>
	<div>
	<?php
		// �����̃V�[�h�l��ݒ肷��
		mt_srand((double) microtime() * 100000);
		
		echo '<p>�����𐶐�����F 0 �` ' . mt_getrandmax() . '</p>';
		echo '<ul>';
		echo '<li>' . mt_rand() . '</li>';
		echo '<li>' . mt_rand() . '</li>';
		echo '<li>' . mt_rand() . '</li>';
		echo '</ul>';
		
		echo '<p>5 �` 20 �܂ł̗����𐶐�����</p>';
		echo '<ul>';
		echo '<li>' . mt_rand(5, 20) . '</li>';
		echo '<li>' . mt_rand(5, 20) . '</li>';
		echo '<li>' . mt_rand(5, 20) . '</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
