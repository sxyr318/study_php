<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="Utf-8">
	<title>�ϐ����Z�b�g����Ă��邩���ׂ�</title>
</head>
<body>
	<div>
	<?php
		$a = 'ABC';
		$b = null;
		$c['a'] = 123;
		
		if (isset($a)) {
			echo '$a �̓Z�b�g����Ă��܂��B<br>';
		}
		else {
			'$a �̓Z�b�g����Ă��܂���B<br>';
		}
		
		if (isset($b)) {
			echo '$b �̓Z�b�g����Ă��܂��B<br>';
		}
		else {
			echo '$b �̓Z�b�g����Ă��܂���B<br>';
		}
		
		if (isset($c['a'])) {
			echo '$c[\'a\'] �̓Z�b�g����Ă��܂��B<br>';
		}
		else {
			echo '$c[\'a\'] �̓Z�b�g����Ă��܂���B<br>';
		}
		
		if (isset($c['b'])) {
			echo '$c[\'b\'] �̓Z�b�g����Ă��܂��B<br>';
		}
		else {
			echo '$c[\'b\'] �̓Z�b�g����Ă��܂���B<br>';
		}
		
		
		if (isset($d)) {
			echo '$d �̓Z�b�g����Ă��܂��B<br>';
		}
		else {
			echo '$d �̓Z�b�g����Ă��܂���B<br>';
		}
	?>
	</div>
</body>
</html>