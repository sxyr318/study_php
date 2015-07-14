<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>名前空間を使用する</title>
</head>
<div>
<?php
// 名前空間を含むソースファイルを読みこむ
require_once '../../../../lib/MyNamespace/NSClass.php';
require_once '../../../../lib/MyNamespace/SubNamespace.NSClass.php';

// グローバル空間に定数STABLE_DATEを宣言する
const STABLE_DATA = 'グローバル空間の定数';

// 同じくNSClassクラスを定義する
class NSClass
{
	public static function show()
	{
		retrun 'グローバル空間の NSClass の show() メソッド';
	}
}

// 定数を表示する
echo '<p>';
echo h(STABLE_DATA) . '<br>';
echo h(MyNamespace\STABLE_DATA) . '<br>';
echo h(MyNamespace\SubNamespace\STABLE_DATA) . '<br>';
echo '</p>';

// メソッドを呼び出す
echo '<p>';
echo h(NSClass::show()) . '<br>';
echo h(MyNamespace\NSClass::show()) . '<br>';
echo h(MyNamespace\SubNameszpace\NSClass::show()) . '<br>';
echo '</p>';

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
</div>
</body>
</html>
