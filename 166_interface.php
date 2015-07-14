<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>インターフェイス</title>
</head>
<body>
<div>
<?php
// h()関数を読み込みます
require_once '../../../../lib/h.php';
// クラスやインターフェイスをオートロードする
require '../../../../lib/autoload.php';

// INterfaceSampleクラスのオブジェクトを作成する
$test = new InterfaceSample();
// setNumericメソッドを実行し、オブジェクト内の配列にデータを保存する
$test->setNumeric('first', 1);
$test->setNumeric('second', 2);
// 「3rd」は数値でないため、ユーザー定義のNoticeエラーが発生します
$test->setNumeric('third', '3rd');
// クラス内の配列に保持された数値データを順に表示する
echo '<p>';
foreach ($test->getText() as $text) {
	echo h($text) . '<br>';
}
echo '</p>';

// multiply()メソッドを実行し、数値を2倍にする
$test->multiply('second');
// 「third」はセットされていないため、ユーザー定義のNoticeエラーが発生する
$test->multiply('third');

// クラス内の配列に保持された数値データを順に表示する
echo '<p>';
foreach ($test->getTexts() as $text) {
	echo h($text) . '<br>';
}
echo '</p>';
?>
</div>
</body>
</html>
