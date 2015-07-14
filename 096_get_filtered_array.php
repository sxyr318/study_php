<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>配列の中から条件に合うデータのみを抜き出した配列を取り出したい</title>
</head>
<body>
<div>
<?php
// 引数として渡された値が奇数の場合のみtrueを返す関数を宣言する
function odd($value)
{
	// 渡された値が整数でなければfalseを返す
	if (! is_int($value)) {
		return false;
	}

	// 渡された値を２で割った結果、余りがあれば奇数とみなしてtrueを返す
	return ($value % 2 != 0);
}

// 引数として渡された値が偶数の場合のみtrueを返す関数を宣言する
function even($value)
{
	// 渡された値が整数でなければfalseを返す
	if (! is_int($value)){
		return false;
	}

	// 渡された値を2で割った結果、余りがなければ偶数とみなしてtreuを返す
	return ($value % 2 == 0);
}

// 処理対象の配列を用意する
$data = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 'four');

// odd()関数をarray_filter()関数のコールバック関数として使用し、
// 奇数のデータのみの配列を取得する
$odds = array_filter($data, 'odd');

// 奇数のデータを表示する
echo '<p>奇数のデータのみ表示: </p>';
echo '<ul>';
foreach ($odds as $key => $value){
	echo '<li>'. $key . ': ' . $value . '</li>';
}
echo '</ul>';

// even()関数をarray_filter()関数のコールバック関数ろして使用し、
// 偶数のデータのみの配列を取得する
$evens = array_filter($data, 'even');

// 偶数のデータを表示する
echo '<p>偶数のデータのみ表示: </p>';
echo '<ul>';
foreach ($evens as $key => $value) {
	echo '<li>' . $key . ':' . $value . '</li>';
}
echo '</ul>';
?>
</div>
</body>
</html>

