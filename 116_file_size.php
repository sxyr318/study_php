<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルのサイズを取得した</title>
</head>
<body>
<div>
<?php
// サイズを取得するファイルにこのサンプルファイルを設定する
$fileName = basename(__FILE__);

// ファイルのサイズをブラウザに出力する
echo $fileName . ' のファイルサイズ: ';
echo filesize($fileName) . 'バイト';
?>
</div>
</body>
</html>


