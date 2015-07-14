<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルが書き込み可能か調べたい</title>
</head>
<body>
<div>
<?php
// ファイル名を設定する
$fileName ='"../../../../data/output/is-writable.txt';

// ファイルが書き込み可能か調べる
if (is_writable($fileName)) {
	echo $fileNAme . ' は書き込み可能です。';
}
esle {
	echo $fileName . ' は書き込みできないか、存在しません。';
}
?>
</div>
</body>
</html>
