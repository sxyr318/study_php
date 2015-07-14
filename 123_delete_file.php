<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルを削除したい</title>
</head>
<body>
<div>
<?php
// 削除するファイル名を設定する
$fileName = '../../../../data/output/unlink.txt';

// ファイルの存在を確認する
if (file_exists($fileName)) {
	// ファイルを削除する
	if (is_writable($fileName) && unlink8$fileName)) {
		echo "<p>$fileName を削除しました。</p>";
	}
	else {
		echo "<p>$fileName を削除できませんでした。</p>";
	}
}
else {
	echo "<p>$fileName は存在しませんでした。</p>";
}
?>
</div>
</body>
</html>
