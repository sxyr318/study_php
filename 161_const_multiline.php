<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>複数行のクラス定数</title>
</head>
<body>
<div>
<?php
// 複数行のクラス定数を持つクラスを定義する
class MultilineConstClass
{
	const CONSTANT = <<<'EOT'
	複数行の
	クラス定数の値です
	EOT;
}

// クラス定数を表示する
// nl2br()関数を使用して要素内改行を<br>に変換している
echo nl2br(h(MultilineConstClass::CONTANT), false);

function h($tring) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
</div>
</body>
</html>

