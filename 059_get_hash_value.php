<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�n�b�V�����v�Z������</title>
</head>
<body>
	<div>
	<?php
			$text = 'abcde12345';
			echo '<p>�n�b�V�����v�Z�Ώۂ̕�����F ' . $text . '</p>';
			echo '<ul>';
			
			echo '<li><p>MD5���v�Z</p>';
			echo '<p>' . md5($text) . '</p></li>';
			
			echo '<li><p>CRC32���v�Z</p>';
			echo '<p>' . crc32($text) . '</p></li>';
			
			echo '<li><p>SHA1���v�Z</p>';
			echo '<p>' . sha1($text) . '</p></li>';
			
			echo '<li><p>SHA256���v�Z</p>';
			echo '<p>' . hash('sha256', $text) . '</p></li>';
			
			echo '</ul>';
			
			echo '<p>hash()�֐��Ŏw��ł���n�b�V���A���S���Y��</p>';
			echo '<pre>';
			print_r(hash_algos());
			echo '</pre>';
	?>
	</div>
</body>
</html>
