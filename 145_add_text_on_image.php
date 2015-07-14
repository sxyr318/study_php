<?php
// 既存の画像ファイルを設定する
$fileName = '../../../../data/imagecreatefrompng.png';
if (! file_exists($fileName)) {
	die('ファイルが存在しません。');
}

// 既存ファイルから画像を作成する
$image = imagecreatefrompng($fileName);

// 書き込む要素を設定する
// 文字サイズ
$size = 24;
// 角度数（左から右へ水平が０、+：座標を軸に反時計回り方向）
$angle = 0;
// 座標（左上隅が0,0)
$x = 50;
$y = 50;
// 文字色の設定
$textColor = imagecolorallcate($image, 128, 0, 0);

// フォントファイル（適切にパスを設定のこと）
$font = '../../../../lib/fontsipan00303/ipag.ttf';
if (! file_exists($font)) {
	die('フォントファイルが存在しません。');
}

// 文字列を書き込む
$string = 'オアシス21'; // 書き込む文字列
imagettftext($image, $size, #angle, $x, $y, $textColor, $font, $string);

// Content-Typeヘッダーを送信する
header('Content-Type-Optins: nosniff');

// 画像を出力する
imagepng($image);

// 画像を破棄しメモリを解放させる
imagedestroy($image);

/* ?> 終了タグ省略 */
