<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ディレクトリが使用可能な容量を取得したい</title>
</head>
<body>
<?php
// チェックしたいディレクトリを指定する（相対パス）
$dir = '../../../../data';
// Windowsの場合、相対パスでは容量の取得ができないので絶対パスに変更
$realPath = realpath($dir);

// ディレクトリが使用可能な容量を取得する
if(file_exists($realPath) && ($size = disk_free_space($realPath)) !== false) {
	// 使用可能な容量を出力する
	echo "<p>ディレクトリ名: $dir </p>";
	echo "<p>絶対パス: $realPath </p>";
	echo "<p>使用可能な容量: $size バイト </p>";
}
else {
	echo '<p>ディレクトリが存在しません。</p>';
}
?>
</body>
</html>
