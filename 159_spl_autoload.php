<!DOCTYPE html>
<html lang="ja">
<head>
<meta cjarset="UTF-8">
<title>spl_autoload_register()関数によるp-とロード</title>
</head>
<body>
<div>
<?php
// オートロードの設定を読み込む
require_once '../../../../lib/autoload/php';

echo 'FileInfoクラスをインスタンス化する: ';
$obj = new FileInfo();
$obj->readFile(__FILE__);
echo '<br>getRetCode()メソッドを呼びだす:';
echo $obj->getRetCode();
echo '<br>';
echo 'Conter::current()呼びだす:';
echo conter::current();
?>
</div>
</body>
</html>

