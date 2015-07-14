<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTRF-8">
	<title>文の使い方を知りたい</title>
</head>
<body>
	<div>
	<?php
	// 変数に文字列を代入する
	$point = 'C';
	
	switch ($point) {
		case 'A';
			echo '合格ライン';
			break;
			
		case 'B';
			echo '追試ライン';
			break;
			
		case 'C';
			echo '落第ライン';
			break;
	}
	?>
	</div>
</body>
</html>
	