<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>絶対パス名を取得したい</title>
</head>
<body>
<div>
<?php
// 相対パス名を設定する
$relativePath = '../././../data/full_path.txt';

// 絶対パスを取得する
$absolutePath = realpath($relativePath);

// パス名を出力する
echo "<p>相対パス名: $relativePath </p>";
echo "<p>絶対パス名: $absolutePath </p>";
?>
</div>
</body>
</html>
