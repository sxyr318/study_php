<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ベンチマークを取得したい（２）</title>
</head>
<body>
<div>
<?php
// 処理開始前のタイムスタンプをfloat値で取得する
$start = microtime(true);

// 計測対象の処理(sha1()関数を1000回実行）
for ($i=0; $i<1000; $i++) {
	sha1($i);
}

// 処理終了後のタイムスタンプをfloat値で取得する
$end = microtime(true);

// 計測結果をミリ秒単位で表示する
$time = $end - $start;
echo '<p>' . $time * 1000 . '[msec]</p>';
?>
</div>
</body>
</html>
