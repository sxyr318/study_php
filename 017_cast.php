<!DOCTYPE html>
<html lang="ja">
<head>
	<neta charset="UTF-8">
	<title>型の変換</title>
</head>
<body>
	<div>
	<?php
		// 変数に整数を代入
		$a = 123;
		
		// 変数に文字列を代入
		$b = '321';
		
		echo '$a の型： ' . gettype($a) . '<br>';
		echo '$b の型： ' . gettype($b) . '<br><br>';
		
		// 関数を使いたい型に変換
		$a = strval($a);
		$b = intval($b);
		
		echo '$a の型： ' . gettype($a) . '<br>';
		echo '$b の型： ' . gettype($b) . '<br><br>';
		
		// 型キャストで型を変換
		$a = (int) $a;
		$b = (string) $b;
		
		echo '$a の型： ' . gettype($a) . '<br>';
		echo '$b の型： ' . gettype($b) . '<br><br>';
	?>
	</div>
</body>
</html>
