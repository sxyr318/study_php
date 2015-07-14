<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>マジックメソッド</title>
</head>
<body>
<div>
<?php
// h()関数を読み込む
require_once '../../../../lib/h.php';

// __toString()メソッドを持ったAnimalクラスを定義する
class Animal
{
	public function __toString()
	{
		// 「__CLASS__」はマジック定数の1つで、現在のクラス名が定義されている
		return 'これは' . __CLASS__ . 'クラスです。';
	}
}

// Animalクラスをインスタンス化する
$animal = new Animal();

// オブジェクト$animalを文字列型にキャストして表示する
$str = (string) $animal;
echo '<p>h($str): ' . h($str) . '</p>';

// オブジェクト$animalを直接h()関数に渡して自動キャストさせ、表示する
echo '<p>h($animal):' . h($animal) . '</p>';
?>
</div>
</body>
</html>

