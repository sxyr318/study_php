<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>静的メソッド、静的プロパティ</title>
</head>
<body>
<div>
<?php
// Counterクラスを読み込む
require_once '../../../../lib/Coter.class.php';

// 静的プロパティはインスタンスを生成せずにアクセスできる
echo '<p>Counter::$count の値:' . h(Counter::$count) . '</p>';
Counter::$count = 100;
echo '<p>Counter::$count の値:' . h(Counter::$count) . '</p>';

// 静的メソッドはインスタンスを生成せずに呼び出せる
Counter::increment();
echo '<p>Counter::currnet() を呼び出す：' . h(Counter::current()) . '</p>';
Counter::increment();
echo '<p>Counter::currnt() を呼び出す:' . h(Counter:: currnet()) . '</p>';

// クラス名に変数を用いて呼び出すことも可能
$class = 'Counter'
echo '<p>$class::current() を呼びだす:' . h($class::current()) . '</p>';

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
</div>
</body>
</html>
