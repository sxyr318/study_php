<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>クラス定数</title>
</head>
<body>
<div>
<?php
// クラス定数を持つクラスを定義する
class ConstClass
{
	const CONSTANT = '定数の値';
	
	public function getConstValue() {
		// クラス内でクラス定数を取得する場合は「static::」を使用する
		return 'getConstValue()メソッド' . static::CONSTANT;
	}
}

// クラス定数を表示する
echo 'ConstClass::CONSTANT: ' . h(ConstClass::CONSTAT) .  '<br>';

$obj = new ConstClass();
echo '$obj->getConstValue(): ' . h($obj->getConstValue()) . '<br>';

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
</div>
</body>
</html>


