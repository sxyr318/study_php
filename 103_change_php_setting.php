<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPの設定を一時的に変更したい</title>
</head>
<body>
<?php
echo '<p>設定変更前の include_path の値:</p>';
echo '<p>' . ini_get('include_path') . '</p>';

$path = '.;C:\xampp\php\mylib';
ini_set('include_path', $path);

echo '<p>設定変更後の include_path の値:</p>';
echo '<p>' . ini_get('include_path'). '</p>';
?>
</body>
</html>
