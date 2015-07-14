<?php
// ページIDをセットする
// ページIDごとにカウンタファイルを作る
// このファイルに直接アクセスした場合は「０」として記録
$pageID = ! isset($pageID) ? 0: $pageID;

// 許可するページIDだけをカウントする
// 許可するページIDの配列（直接アクセスを拒否する場合、配列から「０」を削除）
$countPages = array(0, '1', '2', 'top', 'home');
// in_array()関数の第3引き数にtrueを設定し型もチェック
if (! in_array($pageID, $countPages, true)) {
	echo 'カウントできません。';
	return;
}

// パスを含むカウンタ値を記録をするファイルを設定する
$counterPath = __DIR__ . '/../../../../data/output';
if (! is_dir($counterPath)) {
	die('ディレクトリが存在しません。');
}
$counterFile = realpath($counterPath) . '/' . $pageID . '.dat';

// ファイルを開く（追記／読み取りモード）
$fp = fopen($counterFile, 'a+b');
if (! is_resource($fp)) {
	die('ファイルを開けませんでした。');
}

// ファイルをロックする
flock($fp, LOCK_EX);

// カウンタ値を取得し、1加算する
$count = fgets($fp);
$count = $count + 1;

// ファイルの中身をクリアする
ftruncate($fp, 0);

// カウンタ値をファイルに書き込む
fwrite($fp, $count);

// ファイルのロックを解除する
fflush($fp);
flock($fp, LOCL_UN);

// ファイルを閉じる
fclose($fp);

// カウンタ値を出力する
echo "アクセス数: $count(PAGE ID:$pageID)";

/* ?> 終了タグ省略 */
