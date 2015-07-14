<?php
// Content-Typeヘッダーを送信する
header('Content-Type: image/png');
// Internet ExplorerがContent -TYpeヘッダを無視しないようにする
header('X-Content_Type-Options: nosniff');

// 画像を作成する
$image = imagecreatetruecolor(400, 300);
// 背景色を灰色に設定する
$bg_color = imagecolorallocate($image, 200, 200, 200);
imagefill($image, 0, 0, $bg_color);
// 点の色を黒に設定する
$color = imagecolorallocate($image, 0, 0, 0);

// 点を描画する
// 縦横10ピクセル感覚のグリッドの考査を左上にして4つのドットを四角に設置
for ($x = 10; $x < 400; $x += 10) {
	for ($y = 10; $y < 300; $y += 10) {
		imagesetpixel($image, $x, $y, $color);
		imagesetpixel($image, $x+1, $y, $color);
		imagesetpixel($image, $x, $y+1, $color);
		imagesetpixel($image, $x+1, $y+1, $color);
	}
}

// 画像を出力する
imagepng($image);

// 画像を破棄しメモリを解放する
imagedestroy($image);

/* ?>終了タグ省略 */

