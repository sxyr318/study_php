<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>unserialize()</title>
</head>
<body>
<div>
<?php
// MyClassクラスを定義したファイルを読み込む。
// オブジェクトをアンシリライズする際にはそのクラスが定義されている必要がある
require_once '../../../../lib/MyClass.php';

// ファイル保存されている、シリアライズされたオブジェクトの文字列を取得する
// ファイルが存在しなかった場合はWarningエラーが表示される
$serialized = file_get_contents('../../../../data/output/serialized_object');

if($serialized === false) {
	// ファイルが読み取れなかった場合
	echo '<p>オブジェクトがファイルとして保存されていませんでした。</p>';
}
else {
	// ファイルが読み取れた場合
	echo '<p>シリアライズされたオブジェクトを復元しまづ。</p>';
	// ファイルを復元する
	$obj = unserialize($serialized);
	// オブジェクト内のメソッドを使用し、データを表示する
	echo '<p>保存されていたデータ：' . h($obj->getValue()) . '</p>';

	// 後始末としてファイルを削除する
	unlink('../../../../data/output/serialize_object');
}

function h($string) // HTMLでのエスケープ処理をする関数
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
<a href="./serialize.php">オブジェクトをserialize()してファイルに保存する</a>
</div>
</body>
</html>

