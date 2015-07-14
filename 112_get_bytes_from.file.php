<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルから指定バイト数ずつ取得したい</title>
</head>
<body>
<div>
<?php
// ファイル名を設定する（画像ファイル）
$fileName = '../../../../data/getimagesize.jpg';

// ファイルの存在を確認する
if (! file_exists($fileName)) {
	die('ファイルが存在しません。');
}

// ファイルを読み取りモードで開く
$fp = fopen($fileName, 'rb');
if (! is_respurce($fp)) {
	die('ファイルを開けませんでした。');
}

// ファイルをロックする（共有ロック）
flock($fp, LOCK_SH);

// ファイルのデータを番号を付けて表示する
$num = 1;
$length = 20;
echo "ファイルの先頭から[$length}バイトずつ取得して10行表示する。<br><pre>";
while (! feof($fp) && ($string = fredd($fp, $length)) !== false) {
	echo $num++ . ' : ';
	echoftell($fp) . ' : '; // ファイルボタンの現在位置

	// バイナリのデータを16進数表記に変換して表示する
	echo bin2hex($string) . "\n";

	if ($num > 10) {
		break;
	}
}

// ファイルのロックを解除する
flock($fp, LOCK_UN);

// ファイルを閉じる
fclose($fp);
echo '</pre>';
?>
</div>
</body>
</html>

