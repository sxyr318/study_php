<?php
// ログファイルを設定する
$logPath = __DIR__ . '/../../../../data/output';
if (! is_dir($logPath)) {
	die('ディレクトリが存在しません。');
}

$dateObj = new DateTime();
$date = $dateObj->format('Ymd');
$fileName = realpath($logPath) . '/' . $date . '.log';

// 書き込む文字列を用意する
$accessTime = $dateObj->format('Y-m-d H:i:s');
$accessFile = $_SERVER['SCRIPT_FILENAME'];
$log = "$accessTime $accessFile にアクセス\n";

// ファイルを追記モードで開く
$fp = fopen($fileName, 'ab');
if (! is_resource($fp)) {
	die('ファイルを開けませんでした。');
}

// ファイルをロックする（排他的ロック）
flock($fp, LOCK_EX);

// ログを書き込む
fwrite($fp, $log);

// ファイルのロックを解除する
fflush($fp);
flock($fp, LOCK_UN);

// ファイルを閉じる
fclose($fp);

// ブラウザには何も表示されない
/* ?>終了タグ省略 */
