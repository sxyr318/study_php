<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルが読み取り可能亜調べたい</title>
</head>
<body>
<div>
<?php
// ファイル名を設定する
$fileName = '../../../../data/is-readable.txt';

// ファイルが読み取り可能か調べる
if (is_readable($fileName)) {
	echo "<p>$fileName は読み取り可能なファイルです。</p>";
}
else {
	echo "<p>$fileName は読み取りできないファイルか、または存在しません。</p>";
}
?>
</div>
</body>
</html>
