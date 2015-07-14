<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ユーザーエラーを発生させたい</title>
</head>
<body>
	<div>
	<?php
		$check = 1;
		
		// ユーザーエラーを発生させる
		if ($check == 1) {
			trigger_error('E_USER_NOTICE を発生させます');
			trigger_error('E_USER_WORNING を発生させます', E_USER_WARNING);
			trigger_error('E_USER_NOTICE を発生させます', U_USER_ERROR);
		}
		
		// E_USER_ERROR で処理が止まるため、これ以降は出力されない
		echo $check;
		
	?>
	</div>
</body>
</html>
