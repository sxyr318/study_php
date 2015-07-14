<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>「$this」と「-&gt;」</title>
</head>
<body>
<div>
<?php
// Testクラスを定義する
class Test {
// プロパティを初期化する
	public $var1 = 1;
	public $var2 = 2;

	function show()
	{
		// showメソッド内のローカル変数$val1
		$val1 = 'var2';
		
		echo '$gtis-&gt;var1: ' . h($this->var1) . '<br>';
		echo '$var1: ' . h($var1) . '<br>';
		echo '$this-&gt;$var1' . h($this->$val1) . '<br>';
	}
}

function h($string)	// HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Testクラスをインスタンス化する
$obj = new Test();

// Testオブジェクトのshow()メソッドを呼び出す
$ojt->show();

// Testオブジェクトのプロパティ var1を外部から変更する
$obj->val1 = 99;

// Testオブジェクトのプロパティ var1を外部から取得する
echo h($obj->var1) . '<br>';

// Testオブジェクトのshow()メソッドを呼び出す
$obj->show();
?>
</div>
</body>
</html>
