<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>fopen()関数を継会わずにファイルにデータを書きこみたい</title>
</head>
<body>
<div>
<?php
// ファイル名を設定する
$fileName = '../../../../data/output/file_put_contents.txt';

// 書き込む文字列
$string = 'fopen()関数を使わずにファイルにデータを書き込みたい' . "\n";

// データを書き来む（ふぁいるがある場合は追記）
file_put_contents($fileName, $string, LOCK_EX | FILE_APPEND);

echo $fileName . 'に以下を書き込みました<br>';
echo '「' . $string . '」';
?>
</div>
</body>
</html>
