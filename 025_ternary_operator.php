<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>三項演算子の使い方を知りたい</title>
</head>
<body>
	<div>
	<?php
		$language = 'ja';
		
		// 三項演算子の結果を変数に代入する
		$message = ($language == 'ja') ? '日本語' : 'japanese';
		echo $message . '<br>';
		
		// 三項演算子の省略形
		$message = $message ?: 'メッセージは空';
		echo $message . '<br>';
		
		// $messageに空文字を代入する
		$message = '';
		$message = $message ?: 'メッセージは空';
		echo $message . '<br>';
	?>
	</div>
</body>
</html>
