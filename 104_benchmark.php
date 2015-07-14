<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ベンチマークを取得したい（１）</title>
</head>
<body>
<div>
<?php
// PEAR::Benchmark_Timerをインクルードします
require_once 'Benchmark/Timer.php';
// タイマーオブジェクトをnew演算子で作成する
$timer = new Benchmark_Timer();

// 計測を開始する
$timer->start();

// 計測対象（１）（sha1()関数を1000回実行)
for ($i=0; $i<1000; $i++) {
	sha1($i);
}

// マーカーをセットする
$timer->setMarker('sha1()関数を1000回位実行');

// b計測対象（２）（md()関数を1000回実行)
for ($i=0; $i<1000; $i++) {
	md5($i);
}
$timer->setMarker('md5()関数を1000回実行');

// 計測を終了し、結果を表示する
$timer->stop();
$timer->display();
?>
</div>
</body>
</html>

