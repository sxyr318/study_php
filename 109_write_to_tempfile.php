<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>一時ファイルにデータを書き込みたい</title>
</head>
<body>
<div>
<?php
// 一時ファイルを作成する
$tempFile = tmpfile();

// データを書き込みする
fwrite($tempFile, '一時ファイルにデータを書き込みたい！');

// 一時ファイルのファイルポインタを先頭に戻し、ブラウザへ出力する
rewind($tempFile);
fpassthru($tempFile);

// ファイルを閉じる
fclose($tempFile);
?>
</div>
</body>
</html>

