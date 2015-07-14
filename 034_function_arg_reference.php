<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>関数の引数に付いた＆って何ですか</title>
</head>
	<body>
	<div>
	<?php
	// 引き数が参照渡しの関数を定義する
	function breakfast(&$drink)
	{
		$drink = 'アイスコーヒー';
	}
	
	// 変数に文字列を代入し、そのまま表示する
	$string = 'ホットコーヒー';
	echo '関数実行前んｐ$string: ' . $string . '<br>';
	
	// 変数を引き数にして関数を実行する
	breakfast($string);
	
	// 関数実行後の変数を表示する
	echo '関数実行後の$string: ' . $string;
	?>
	</div>
</body>
</html>
