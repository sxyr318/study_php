<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����_���ȕ�����𐶐�������</title>
</head>
<body>
	<div>
	<?php
		// �K�v�Ȋ֐���Ǎ���
		require_once 'C:\xampp/htdocs/study/060_lib_generateRandomString.php';
		require_once 'C:\xampp/htdocs/study/060_lib_generateSecureRandomString.php';
		
		echo '<p>generateRandomString()�֐�<br>';
		echo '10�����̃����_��������𐶐��F ';
		echo generateRandomString(10) . '<br>';
		echo '15�����ł���abcde_!#$@�݂̂̕�����𐶐�: ';
		echo generateRandomString(15, 'abcde_!#$@') . '</p>';
		
		echo '<p>generateSecureRandomString()�֐�<br>';
		echo '10�����̃����_��������𐶐��F ';
		echo generateSecureRandomString(10) . '<br>';
		echo '15�����ł���abcde_!#$@�݂̂̕�����𐶐�: ';
		echo generateSecureRandomString(15, 'abcde_!#$@') . '</p>';
	?>
	</div>
</body>
</html>
