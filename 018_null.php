<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>null</title>
</head>
<body>
	<div>
	<?php
		$a = null;
		$b = '';
		
		// �ǂ�����l�͉����\������Ȃ�
		echo '$a: ' . $a . '<br>';
		echo '$b: ' . $b . '<br>';
		
		if ($a == $b) {
			echo '$a �� $b �͓�����(==)<br>';
		}
		else {
			echo '$a �� $b �͈قȂ�(==)<br>';
		}
		
		if ($a === $b) {
			echo '$a �� $b �͓�����(===)<br>';
		}
		else {
			echo '$a �� $b �͈قȂ�(===)<br>';
		}
		
		if (is_null($a)) {
			echo '$a �� null �ł�<br>';
		}
		else {
			echo '$a �� null �ł͂���܂���<br>';
		}
		
		if (isset($a)) {
			echo '$a �͒�`����Ă��܂�<br>';
		}
		else {
			echo '$a �͒�`����Ă��܂���<br>';
		}
	?>
	</div>
</body>
</html>
