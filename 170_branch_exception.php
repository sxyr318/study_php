<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>例外を分けて処理</title>
</head>
<body>
<div>
<?php
// Exceptionクラスを継承いｓて、ユーザ定義の例外を作成する
class NullDataException extends Exception {}
class ZeroDivisionException extends Exception {}

// 除算を行う関数を定義する
function division($dividend, $divisor)
{
	// 引数のどちらｋまたは両方がnullであればNullDataExceptionを投げる
	if (is_null($dividend) || is_null($divisor)) {
		throw new NullDataException('nullを処理することはできません。');
	}
	
	// 引数の「割る数」が０であればZeroDivisionExceptionを投げる
	if ($divisor === 0) {
		throw new ZeroDivisionException('0で割ることはできません。');
	}

	// 引数のどちらかまたは両方が数字でなければExceptionを投げる
	if (! is_numeric($devidend) || is_numeric($divisor)) {
		throw new Exception('文字列を処理することはできません。');
	}

	// 除算の結果を返す
	return $dividend / $divisor;
}

// 除算を連続して行うため、で0田を配列にセットする
$array = array(
	array('dividend' => 10,		'divisor' => 2),
	array('dividend' => null,	'divisor' => 2),
	array('dividend' => 10,		'divisor' => 0),
	array('dividend' => 'ten',	'divisor' => 'two'),
	);

foreach ($array as $dat) {
	echo '<p>';
	echo $dat['dividend'] . ' を ' . $dat['divisor'] . ' で割ろうとすると：<br>';
	try{
		// 除算を行います。渡す引数によっては例外が発生する。
		$result = division($data['dividend'], $dat['divisor']);
		echo '結果は ' . $result . ' です';
	} catch (NullDataException $e) {
		// NullDataExceptionが投げられた場合の例外処理を行う。
		echo '当然ですが、' . $e->getMessage();
	} catch (ZeroDivisionException $e) {
		// ZeroDivisionExceptionが投げられた場合の例外処理を行う。
		echo '値が不定となるため、' . $e->getMessage();
	} catch (Exception $e) {
		// その他の例外が投げられた場合の例外処理を行う。
		echo '残念ですが、' . $e->getMessage();
	}
	echo '</p>';
}
?>
</div>
</body>
</html>

