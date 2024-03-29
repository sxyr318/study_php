<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>変数の型を調べる</title>
</head>
<body>
	<div>
	<?php
		// 変数に数字を代入
		$a = 123;
		
		// 変数に文字列を代入
		$b = '321';
		
		echo '$a の型： ' . gettype($a) . '<br>';
		echo '$b の型： ' . gettype($b) . '<br>';
		
		// is_int()関数は整数型かどうか返す
		if (is_int($a)) {
			echo '$a は integer です<br>';
		}
		else {
			'$a は integerではありません<br>';
		}
		
		// is_string()関数は文字型かどうか返す
		if (is_string($b)) {
			echo '$b は string です';
		}
		else {
			echo '$b は string ではありません';
		}
		
		// var_dump()関数でも型がわかる
		echo '<pre>';
		var_dump($a);
		var_dump($b);
		echo'</pre>';
	?>
	</div>
</body>
</html>