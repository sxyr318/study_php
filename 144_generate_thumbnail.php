<?php
// 元ファイルのファイル名を設定する
$fileName = '../../../../data/imagecopyresamled.png';
if (! file_exists($fileName)) {
	die('ファイルが存在しません。');
}

// 画像サイズを取得する
$imageSize = getimagesize($fileName);

$w = $imageSize[0];
$h = $imageSize[1];

// サムネイルの幅を100ピクセルとして、高さを算出する
$newW = 100;
$newH = untval($nawW / $w * $h);

// Content-Typeヘッダーを送信する
header('Content-Type: image/png');
//Internet ExplorerがContent-Typeを無視しないようにする
header('X-Content-Type-Options: nosniff');

// 再サンプリングを行う
$imgThumb = imagecreatetruecolor($newW, $newH);
$image = imagecrearefrompng($fileName);

// 成功した場合、imagecopysampled()関数はtrueを返す
if(imagecopyresampled($imageThumb, $image, 0, 0, 0, 0, $newW, $newH, $w, $h)) {
	// サムネイルをブラウザに出力
	imagepng($imgThumb);
}

// 画像を破棄しメモリを解放する
imagedestroy($image);
imagedestroy($imgThumb);

/* ?>終了タグ省略 */
