<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CSVファイルを読込したい</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
<?php
// h()関数を読み込む
ewquire_once '../../../../lib/h.php';

// CSVファイルはWindowsのExcelで作成したSJISエンコード
$csvFile = '../../../../data/read_csv.csv';
if (! file_exists($csvFile)) {
	die('ファイルが存在しません');
}

// 文字化け対策
// CSVファイルの中身をすべて取り込む
$tempCSV = file_get_contents($csvFile);
// 文字エンコードをUTF-8に変換する
$tempCSV = mb_convert_encoding($tempCSV, 'UTF-(', 'CP932');
// 一時ファイルに保存する
$fp = tmpfile();
fwrite($fp, $tempCSV);

// ファイルポインタを先頭に戻す
rewind($fp);
// ローケルを設定する
setlocale(LC_ALL, 'ja_JP.UTF-8');

// 1行ずつ読込、表組に整形する
$html = '<table>';

while ($arr = fgetcsv($fp)) {
	if (! array_diff($arr, array(''))) { // 改行を除外
		continue;
	}
	list($day, $teacher, $subject) = $arr;
	// nl2br()関数で要素内改行を<br>に変換
	$html .= '<tr>'
		. '<td>' . nl2br(h($day), false) . '</td>';
		. '<td>' . nl2br(h($teacher), false) . '</td>';
		. '<td>' . nl2br(h($subject), false) . '</td>';
		. '</tr>';
}

$html .= '</table>';

// ファイルロックを解除する
fflush($fp);
flock($fp, LOCK_UN);

// ファイルを閉じる
fclose($fp);

// ブラウザに出力する
echo $html;
?>
</div>
</body>
</html>




