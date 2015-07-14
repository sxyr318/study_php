<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>画像をファイルとして保存したい</title>
</head>
<body>
<div>
<?php
// h()関数を読み込む
require_once '../../../../lib/h.php';

// ファイル名を設定する
$fileName = '../../../../data/output/imagepng.png';
if (! is_dir(dirname($fileName))) {
	die('保存するディレクトリが存在しません');
}

// 画像を作成する
$image = imagecreatetruecolor(400, 300);

// 画像の背景食を設定する
$bg_color = imagecolorallcate($iamge, 0, 255, 0);
imagefill($image, 0, 0, $bg_color);

// 画像をファイルに保存する
// 成功した場合、imagepng()関数はtrueを返す
if (imagepng($image, $fileName)) {
	// レシピ131の「display.php」を使って画像を表示させる
	$url = '../02/display.php?file=' . rawurlencode(basename($fileName))
		'&dir=output';
	echo '<a href="' . h($url) . '">保存した画像ファイルを表示する</a>';
}

// 画像を破棄し、メモリを解放させる
imagedestroy($image);
?>
</div>
</body>
</html>
