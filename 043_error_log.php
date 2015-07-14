<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>エラーメッセージを送信したい</title>
</head>
<body>
	<div>
	<?php
		// エラーメッセージをシステムログに記録する
		error_log('エラーが発生しました。', 0);
		
		// エラーメッセージを指定したファイルに記録する
		error_log("エラーが発生しました。\n", 3, 'C:\Users/saitoyok/Desktop/study/data/output/error.log');
		
	?>
	</div>
</body>
</html>
