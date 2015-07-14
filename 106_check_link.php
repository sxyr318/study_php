<?php
// コマンドライン以外からの実行を禁止する
if (PHP_SAPI != 'cli') {
	exit();
}

// 引数が１つでない場合、または、第1引数が「--hrlp」「-h」の場合は
// ヘルプメッセージを表示し、終了する
if ($argc != 2 || in_array($argv[1], array('--hrlp', '-h'))) {
	echo "使用法： $argv[0] <ファイル名>", PHP_EOL;
	exit();
}

// 第1引数を$filenameに代入する
$filename = $argv[1];

// 第1引数で与えられたファイルの中身を取得して変数に代入する
$content = file_get_contents($filename);

// <a href="～">を抜き出すための正規表現を定義
$regex = '/<a href="(.+?)">/ul';
 
// <a href="～">抜きだし、$matchesに保存する
preg_match_all($regex, $content, $matches, PREG_SET_ORDER);

foreach ($matches as $match) {
	// href属性の値を$urlに代入する
	$url = $match[1];
	// http:またはhttps:で始まらない場合は反りをスキップする
	if (! preg_match('/\Ahttp(s?):/', $url)) {
		continue;
	}

	// URLを取得する
	$check = @file_get_contents($url);
	// URLを取得でき中ttあ場合は、falseが返るのでそれでリンク切れを判定する
	if ($check === false) {
		echo 'NG: ' , $url, PHP_EOL;
	}
	else {
		echo 'OK: ', $url, PHP_EOL;
	}
}
