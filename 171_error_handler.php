<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>エラーを例外として処理</title>
</head>
<body>
<div>
<?php
// 無名関数を使ってエラーハンドラを設定する
set_error_handler(
	function($errno, $errstr, $errfile, $errline) {
		throw new ErroException($errstr, $errno, 0, $errfile, $errline);
	}
);

// エラーの内容を示す関数を定義する。タイプヒンティングを使用しています。
function show_error_details(ErrorException $e) {
	echo '<p>';
	echo 'エラーコード：'		. $e->getCode()	. '<br>';
	echo 'エラーメッセージ:'	. $e->getMessage() . '<br>';
	echo 'エラー発生ファイル：'	. $e->getFile()	. '<br>';
	echo 'エラー発生行'		. $e->getLine()	. '<br>';
	echo '</p>';
}

// Warningエラーを発生させる
try {
	// strlen()関数に配列を私、Warningエラーを発生させる
	strlen(array());
}catch(ErrorException $e) {
	// エラーコード「２」はWarningエラーを示す。
	show_error_details($e);
}
// エラーコード「８」はNoticeエラーを示す。
	show_error_details($e);
}
?>
</div>
</body>
</html>
