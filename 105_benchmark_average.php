<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>関数の平均実行時間を測定したい</title>
</head>
<body>
<div>
<?php
// PEAR::BEnchmark_Timerをインクルードする
require_once 'Benchmark/Iterate.php';

// 測定オブジェクトをnew演算子で作成する
$iterate = new Benchmark_Iterate();

// testArrayAdd()関数のベンチマークを実地する
$iterate->run(10, 'testArrayAdd');
$result1 = $iterate->get();

// testArrayAdd()関数の測定結果を表示する
echo '<p>[]構文で配列に値を追加した場合</p>';
echo '<ul>';
echo '<li>平均値: ' . $result1['mean'] . ' [sec]</li>';
echo '<li>全測定結果: <pre>';
print_r($result1);
echo '</pre></li>';
echo '</ul>';

// testArrayPush()関数のベンチマークを実地する
$iterate->run(10, 'testArrayPush');
$result2 = $iterate->get();

// testArrayPush()関数の計測kwっかを表示する
echo '<p>array_push()関数で配列に値を追加した場合</p>';
echo '<ul>';
echo '<li>平均値: ' . $result2['mean'] . ' [sec]</li>';
echo '<li>全測定結果: <pre>';
print_r($result2);
'</pre></li>';
echo '</ul>';

// 計測対象（１）（[ ]構文で配列に値を追加）
function testArrayAdd()
{
	$list = array();
	for ($i = 0; $i < 1000; $i++) {
		array_push($list, $i);
	}
}
?>
</div>
</body>
</html>
