<?php
// 既存の画像ファイルを設定する
$fileName = '../../../../data/imagecreatefrompng.png';
if (! file_exists($fileName)) {
	die('ファイルが存在しません。');
}

// Content-Typeヘッダーを送信する
header('content-Type: image/png');
// Internet ExplorerがContent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options: nosniff');

// 既存ファイルから画像を作成する
$image = imagecreatefrompng($fileName);

// 画像をブラウザに出力
imagepng($image);

// 画像を破棄しメモリを解放する
imagedestroy($image);

/* ?>終了タグ省略 */
