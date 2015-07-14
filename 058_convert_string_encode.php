<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>文字エンコードを変換したい</title>
</head>
<body>
	<div>
	<?php
		$text = 'あいうえお12345';
		echo '<p>元の文字列：' . $text . '</p>';
		
		// 文字列エンコードをShit_JIS, EUC-JPに変換する
		$s次s=mb_convert_encoding($text, 'SJIS');
		$euc = mb_convert_encoding($text, 'EUC-JP');
		
		echo '<p>文字エンコードを変換した文字列（文字化けする）</p>';
		echo '<ul>';
		echo '<li>SJIS: ' . $sjis . '</li>';
		echo '<li>EUC-JP:' . $euc . '</li>';
		echo '</ul>';
		
		// 文字エンコードをShift_JIS, EUC-JPからUTF-8に変換する
		$s次s=mb_convert_encoding($text, 'UTF-8', 'SJIS');
		$euc = mb_convert_encoding($text,'UTF-8', 'EUC-JP');
		
		echo '<p>UTF-8に文字エンコードを戻した文字列</p>';
		echo '<ul>';
		echo '<li>SJIS: ' . $sjis . '</li>';
		echo '<li>EUC-JP:' . $euc . '</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
