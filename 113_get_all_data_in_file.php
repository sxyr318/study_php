<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルのデータをまとめて取得したい</title>
</head>
<body>
<div>
<?php
//h()関数を読み込む
require_once '../../../../lib/h.php';

// ファイル名を設定する
$fileName = '../../../../data/get_all_data.txt';

// ファイルの存在を確認する
if (! file_exists($fileName)) {
	die('ファイルが存在しません。');
}

// file_get_contents()関数でデータを取得する
$fileData1 = file_get_contents($fileName);

// データを出力する
echo '<p>file_get_contents()関数でデータを取得</p>';
var_dump(h($fileData1));

// file()関数でデータを取得する
$fileData2 = file($fileName);

// データを出力する
echo '<p>file()関数えデータを取得</p>';
var_dump(h($fileData2));
?>
</div>
</body>
</html>


