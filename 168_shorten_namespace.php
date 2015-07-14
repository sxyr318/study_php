<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>名前空間の記述を短くする</title>
</head>
<body>
<div>
<?php
// 名前空間を含むソースファイルを読み込む
// 内容についてはレシピ167を参照する
require_once '../../../../lib/MyNamespace/NSClass.php';
require_once '../../../../lib/MyNamespace/SubNamespace/NSC;ass.php';

// グローバル空間にShortenNSClassクラスを定義する
class ShortenNSClass
{
	public static function show()
	{
		return 'グローバル空間の ShortenNSClass の show() メソッド';
	}
}

// use演算子を使用してエイリアス／インポートを行う
// 名前空間に別名を付ける
use MyNamespace\SubNamespace as SubNS;
// クラスに別名を付ける
use MyNamespace\NSClass as NSClassInMyNS;
// 以下は、use MNamespace\NSClass as NSClass; と同じです
use MyNamespace\SubNamespace\NSClass;
// グローバル空間に存在するクラスにも別名をつけることが可能
use ShortenNSClass as GlobalNSClass;

// メソッドを呼び出す
echo '<p>';
echo h(SubNS\NSClass::show()) . '<br>';
echo h(NSClassInMyNS::show()) . '<br>';
echo h(NSClass::show()) . '<br>';
echo '</p>';

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($stging, ENT_QUOTES, 'UTF-8');
}
?>
</div>
</body>
</html>
