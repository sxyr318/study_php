<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>パス名からディレクトリ名を取得したい</title>
</head>
<body>
<?php
// パス名を設定する
$pathName = '../test/sample/pathinfo.txt'; // 存在していないパス／ファイル

echo "<p>パス名: $pathName </p>";

// dirname()関数で取得、表示する
echo '<p>dirname()関数で取得する</p>';
echo '<p>ディレクトリ名: ' . dirname($pathName) . '</p>';

// pathinfo()関数で取得、表示する
$pathInfo = pathinfo($pathName);
echo '<p>pathinfo()関数で取得する</p>';
echo'<p>ディレクトリ名: ' . $pathINfo['dirname'] . '</p>';
?>
</body>
</html>
