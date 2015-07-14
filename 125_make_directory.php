<!DOCTYPE html>
<html kang="ja">
<head>
<meta charset="UTF-8">
<title>ディレクトリを作成したい</title>
</head>
<body>
<?php
// 作成するディレクトリ名を設定する
$dir = '../../../../data/output/madeDir';

//ディレクトリの存在を確認する
if (is_dir($dir)) {
	echo "<p>ディレクトリ $dir は既に存在しています</p>";
}
else {
	// ディレクトリを作成する
	if (mkdir($dir)) {
		echo "<p>ディレクトリ ＄dir の作成に成功しました</p>";
	}
	else {
		echo "<p>ディレクトリ $dir の作成に失敗しました</p>";
	}
}
?>
</body>
</html> 
