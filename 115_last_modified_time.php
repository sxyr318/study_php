<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルの最終更新時刻を取得したい</title>
</head>
<body>
<div>
<?php
// 最終更新時刻をチェックするファイルにこのサンプルファイルを設定する
$fileName = basename(__FILE__);

// ファイルの最終う更新時刻を取得して、ブラウザに出力する
echo $fileName . ' の最終更新時刻：';
echo date('Y-m-d H:i:s', filemtime($fileName));
?>
</div>
</body>
</html>
