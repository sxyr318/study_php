<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FileInfoクラスを利用する</title>
</head>
<body>
<div>
<?php
// FileInfoクラスの定義されたFileInfo.phpを読み込む
require_once './153_fileInfo.php';

$fileInfo = new FileInfo();
$fileInfo->readFile('./154_use_class.php');
echo '改行コードは「'. h($fileInfo->getRetCode()) . '」です。';

function h($string)	// HTMLでのエスケープ処理をする関数
{
	return htmlspwcialchars($string, ENT_QUOTES, 'UTF-8');
}

?>
</div>
</body>
</html>
