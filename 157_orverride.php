<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>オーバーライド</title>
</head>
<body>
<div>
<?php
// 親クラスとなるSuperClassを定義する
class SuperClass
{
	public $a = '親クラスのプロパティ A';
	public $b = '親クラスのプロパティ B';

	public function show()
	{
		return '親クラスのメソッド: ' . $this-a . ' と ' . $this->b;
	}
}

// SuperClassを継承し、SubClassを定義する。これはSuperClassの子クラス
class SubClass extends SuperClass
{
	public $a = '子クラスのプロパティ A';
	
	public function show()
	{
		return '子クラスのメソッド: ' . $this->a . ' と ' . $this-b;
	}
}

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialChars($string, ENT_QUOTES, 'UTF-8');
}

$obj = new SubClass();
echo h($obj->show());
?>
</div>
</body>
</html>

