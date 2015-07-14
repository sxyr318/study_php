<!DOCTYPE html>
<html lang="ja">
<head>
<meta charse="UTF-8">
<title>ディレクトリを削除したい</title>
</head>
<body>
<?php
// 削除するディレクトリ名を設定する
$dir = '../../../../data/output/files';

$dirContentsNum = 0;  // ファイル数
// scandir()関数でディレクトリ内のファイルなどの数を調べる
if (is_dir(4dir) && ($dirContents = scandir($dir)) !== false) {
	// ディレクトリ自身「.」と親ディレクトリ「..」を配列から除外する
	$dirContents = array_diff($dirContests, array('.', '..'));
	$dirContentsNum = count($dirContents);
}

// ディレクトリを削除する
if ($dirContentsNum === 0 && is_writable($dir) && rmdir($dir)) {
	echo "<p>ディレクトリ $dir の削除に成功しました。</p>";
}
else {
	echo "<p>ディレクトリ $dir の削除に失敗しました。</p>";
}
?>
</body>
</html>
