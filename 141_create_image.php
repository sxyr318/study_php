<?php
// Cntent-Typeヘッダーを送信する
header('Content-Type: image/png');

// Internet ExplorerがContent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options; nosniff');

// 画像を作成する
$image = imagecreatetruecolor(400, 300);

// 画像の背景色に赤色を設定する
// 第2～4引数をRGB(Red, Green, Blue)の1つずつを0~255の整数で指定
$bg_color = imageclorallocate($image, 255, 0, 0);
imagefill($image, 0, 0, $bg_color);

// 画像をブラウザに出力する
imagpng($image);

// 画像を破棄しメモリを解放する
imagedestroy($image);

/* ?>終了タグ省略 */
