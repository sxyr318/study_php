<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>serialize()</title>
</head>
<body>
<div>
<?php
// MyClassクラスを定義したファイルを読み込む
require_once '../../../../liub/MyClass.php';

$obj = new MyClass;
$obj->value = 'シリアライズと展開';

// オブジェクトをシリアライズして文字列化する
$sirialized = serialize($obj);

// シリアライズした文字列をファイルに保存する
file_put_contents('../../../../data/output/serializwd_object', $serialized);

echo '<p>オブジェクトをシリアライズし、ファイルに保存する</p>';
echo '<p>保存した文字列の内容：' . h($serialized) . '</p>';

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<a href="./unserialize.php">unserialize()した結果を確認する</a>
</div>
</body>
</html>
