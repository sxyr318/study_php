<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>変数と文字列の出力</title>
</head>
<body>
<?php
	// 変数$nameに文字列を代入
	$name = 'PHP逆引きレシピ';
	
	// 変数$Nameに文字列を代入。$nameと$Nameは別の変数
	$Name = 'CadeIgiter徹底入門';
	
	// 文字列と変数の値をecho文で表示
	echo '書籍名：' . $name . '<br>';
	echo "書籍名： {$Name}\n<br>";
	echo '書籍名： {$Name}\n<br>';
	
	$format = '書籍名： %s、%s<br>';
	echo sprintf($format, $name, $Name);
?>
</body>
</html>