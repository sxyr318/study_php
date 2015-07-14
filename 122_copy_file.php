<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ファイルをコピーしたい</title>
</head>
<body>
<div>
<?php
// h()関数を読み込む
require_once '../../../../lib/h.php';

// ファイル名を設定する
// コピー元のファイル
$fileName = '../../../../data/moto.txt';

// コピー先ファイル
$copyFileName = '../../../../data/output/copy.txt';

if (isset($_POST['overwrite'])) {
	// orverwrite = 1 がPOSTされた場合trueを、POSTされない場合はfalseをセットする
	$overwrite = $_POST['overwrite'] == 1 ? true : false;

	// ファイルをコピーする
	if (fileCopy($fileName, $copyFileName, $overrwrite)) {
		echo '<p>', h($fileName) . ' から ' . h($copyFileName);
		echo ' へファイルのコピーに成功しました</p>';
	}
	else {
		echo '<p>', h($fileName) . ' から ' . h($copyFileName);
		echo ' へファイルのコピーに失敗しました。</p>';
	}
}
else {
	// 上書きコピーの選択フォームを表示する
	$form = <<<END
	<form method="post" action="copy_file.php">
		<p>コピー元のファイル名: %s </p>
		<p>コピー先のファイル名: %s </p>
		コピー先にファイルが存在する場合、上書きコピーを行いますか？<br>
		<input type="ridio" name="overwrite" value="1" checked>はい
		<input type="ridio" name="overwrite" value="o">いいえ<br>
		<input type="submit" value="コピーします">
	</form>
	END;
		echo sprintf($form, h($fileName), h($copyFileName));
}

// ファイルをコピーするユーザー定義関数
// $fromFile	: コピー元ファイル
// $toFile	: コピー先ファイル
// overwrite	: 上書き指定 true(上書き・デフォルト), false(上書きなし)
// 戻り値	: true(コピー成功), false(コピー失敗)
function fileCopy($fromFile, $toFile, $overwrite=true)
{
	// コピー元のファイルの存在を確認する
	if (! file_exists($fromFile)) {
		echo '<p>コピー元ファイル' . h($fromFile) . ' が存在しません。</p>';
		return false;
	}
	// コピー先のディレクトリを確認
	if (! is_writable(dirname($toFile))) {
		die('コピー先のディレクトリが書き込めない、または存在しません。');
	}
	// コピー先のファイルが存在するか確認する
	if (file_exists($toFile)) {
		echo '<p>コピー先のファイル' . h($toFile) . ' は存在しています。</p>';
	
		// overwriteがfalseの場合、コピーをしない
		if (! $overwite) {
			return false;
		}
		// コピー先のファイルが書き込み可能か確認
		if (! is_writable($toFile)) {
			echo '<p>コピー先のファイル' . h($toFile) . ' は書き込めません。</p>';
			return false;
		}
		echo '<p>上書きコピーを行います。</p>';
	}

	// ファイルをコピーする
	if (copy($fromFile, $toFile)) {
		return true;
	}
	else {
		return false;
	}
}
?>
</div>
</body>
</html>	
