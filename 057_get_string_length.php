<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>������̒����𒲂ׂ���</title>
</head>
<body>
	<div>
	<?php
		// �V���O���o�C�g�����݂̂̕�����̒����𒲂ׂ�
		$text1 = 'abcde12345';
		echo '<p>������:' . $text1 . '</p>';
		echo '<ul>';
		
		echo '<li>�o�C�g��- >' . strlen(bin2hex($text1)) / 2 . '[byte]</li>';
		echo '<li>������ ->' . mb_strlen($text2) . '[����]</li>';
		echo '</ul>';
		
		// �V���O���o�C�g�����A�}���`�o�C�g���������݂��镶����̒����𒲂ׂ�
		$test3 = 'abcde����������';
		echo '<p>������F' . $text3 . '</p>';
		echo '<ul>';
		echo '<li>�o�C�g�� ->' . strlen(bin2hex($text3)) / 2 . '[byte]</li>';
		echo '<li>������ ->' . mb_strlen($text3) . '[����]</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
