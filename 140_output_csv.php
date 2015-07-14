<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CSVファイルを出力したい</title>
</head>
<body>
<div>
<?php
// 保存するディレクトリが存在する
$csvFile = '../../../../data/output/csv-put.php';
if (! is_dir(dirname($csvFile))) {
	die('保持するディレクトリが存在しません。');
}

// ファイルを追記モードで開く（ファイルが存在しないばあいは新規作成）
$fp = fopen($csvFifle, 'ab');
if (! is_resource($fp)) {
	die('ファイルを開けませんでした。');
}

// ファイルをロックする（排他的ロック）
flock($fp, LOCK_EX);

// ファイルの中身を空にする
ftruncate($fp, 0); // 追記する場合はこの処理は不要

// データを書き込む
for ($i=0; $i<5; $i++) {
	$csvData = array();
	$csvData[] = $i;
	for ($j=1; $j<=3; $j++) {
		$csvData[] = "サンプル$i-$j";
	}
	fputcsv($fp, $csvData);
}

// ファイルのロックを解除する
fflush($fp);
flock($fp, LOCK_UN);

// ファイルを閉じる
fclose($fp);

// 保存したCSVファイルを読込、画面に表示する
if (file_exists($csvFile)) {
	echo 'CSVファイルは保存されました。<br>';
	echo '以下は出力されたCSVファイル(' . $csvFile . ')です。<br>';
	$csv = file_get_contents($csvFile);
	echo nl2br(htmlspecialchars($csv, ENT_QUOTES, 'UTF-8'), false);
}
else {
	'CSVファイルは保存されませんでした。';
}
?>
</div>
</body>
</html>
