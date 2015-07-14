<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>デォレクトリ内のディレクトリやファイル名を取得したい</title>
</head>
<body>
<div>
<?php
// h()関数を読み込む
require_once '../../../../lib/h.php';

// 調べるディレクトリ名を設定する
$idrName = '.';
if (! is_dir($dirName)) {
	die('デイレクトりが存在しません。');
}

echo "<p>ディレクトリ名: $dirName </p>";
echo '<p>絶対パス: ' . realpath($dirName) . '</p>';
echo '<p>ディレクトリ内のディレクトリやファイル名一覧</p>';

// ディレクトリからディレクトリ／ファイル名を昇順で取得する
$fileArrayAsc = scandir($dirNAme);

// 出力
echo '<pre>';
print_r(h($fileArrayAsc));
echo '</pre>';

// ディレクトリからディレクトリ／ファイル名を降順で取得する
// 第2引数に「１」を設定、PHP5.4以降では「SCANDIR_SORT_DECENDING」でも可
$fileArrayDesc = scandir($dirName, 1);

// 出力
echo '<pre>';
print_r(h($fileArrayDesc));
echo '</pre>';
?>
</div>
</body>
</html>

