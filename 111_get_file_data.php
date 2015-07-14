<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルのデータを取得したい</title>
</head>
<body>
<div>
<?php
// ファイル名を設定する
$fileName = '../../../../data/fgets.txt';

// ファイルの存在を確認する
if (! file_exists($fileName)) {
	die('ファイルが存在しません。');
}

// ファイルを読み取りモードで開く
$fp =  fopen($fileName, 'rb');
if(! is_resource($fp)) {
	die('ファイルを開けませんでした。');
}

// ファイルをロックする（共有ロック）
flock($fp, LOCK_SH);

// データを行番号を付けて表示する
$num = 1;
while (($line = fgets($fp)) !== false) {
	echo $num++ . ' : ' . htmlspecialchars($line, ENT_QUOTES, 'UTF-8') . '<br>';
}

// ファイルのロックを解除する
fflush($fp);
flock($fp, LOCK_UN);

// ファイルを閉じる
fclose($fp);
?>
</div>
</body>
</html>

