<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�֐�����`�ς݂����ׂ�</title>
</head>
<body>
	<?php
		if (function_exists('mysqli_connect')) {
			echo'mysqli_connect()�֐������p�ł��܂��B<br>';
		}
		else {
			echo 'my_sqli_connect()�֐��͗��p�ł��܂���B<br>';
		}
		
		// test()�֐����`����
		function test()
		{
			var_dump(function_exists('test'));
			var_dump(function_exists('xyz'));
		}
	?>
</body>
</html>
