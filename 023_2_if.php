<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>条件で処理を分岐するには？</title>
</head>
<body>
	<div>
	<?php
		// if文の省略表記
		if ($kuji == true) {
			echo '当選';
		}
		
		if ($kuji == true) echo '当選';
		
		
		// 論理値の省略
		if ($kuji == true) {
			echo '当選';
		}
		
		if ($kuji) {
			echo '当選';
		}
		
		if ($kuji != true) {
			echo '落選';
		}
		
		if (! $kuji) {
		 echo '落選';
		}
		
	?>
	</div>
</body>
</html>


