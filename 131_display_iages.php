<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ディレクトリ内の画像を一覧表示したい</title>
</head>
<body>
<div>
<?php
// h()関数を読み込む
require_once '../../../../lib/h.php';

// 画像を一覧表示するディレクトリを設定する
$dirName = '../../../../data';
if (! is_dir($dirName)) {
	die('ディレクトリが存在しません。');
}

echo "<p>ディレクトリ名(相対パス）: $dirName <br>";
echo '絶対パス: ' . realpath($dirName) . '</p>';
echo '<p>ディレクトリに亜の画像一覧</p>';

//ディレクトリを調べる
$dir = scandir($dirName);

// ディレクトリ内の画像を一覧表示する
foreach ($dir as $d) {
	$path = $dirName . '/' . $d;
	// 「.」から始まる要素とディレクトリを削除
	if (strpos($d, '.') === 0 || is_dir($path)) {
		continue;
	}

	// getimagesize()関数で画像ファイルかどうかを確認する
	if (@getimagesize($path) !== false) {
		// 拡張子がGIF, PNG, JPGの画像を表示
		$extension = pathinfo($path, PATHINFO_EXTENSION);
		if (! in_array($extention, array('gif', 'png', 'jpg', 'jpeg'))) {
			continue;
		}
		$imageFile = 'display.php?file=' . rawurlencode($d);
		echo '<a> href="' . h($imageFile) . '" target="_blank">';
		echo '<img src="' . h($imageFile) . '" width=100" alt="写真">';
		echo '</a>&nbsp;';
	}
}
?>
</div>
</body>
</html>
