<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>&amp;$amp;, ||, !</title>
</head>
<body>
	<div>
	<?php
		$a = 8;
		$b = 16;
		
		if ($a < 10 && $b > 10) {
			$format = '$a(%s)��10��菬�����A���A$b(%s)��10���傫���B<br>';
			echo sprintf($format, $a, $b);
		}
		
		if ($a < 10 && $b < 10) {
			$format = '$a(%s)��10��菬�����A���A$b(%s)��10��菬�����B<br>';
			echo sprintf($format, $a, $b);
		}
		
		if ($a > 10 || $b > 10) {
			$format = '$a(%s)��10���傫���A�܂��́A$b(%s)��10���傫���B<br>';
			echo sprintf($format, $a, $b);
		}
		
		if (! ($a > 10)) {
			$format = '$a(%s)��10���傫���Ȃ��B<br>';
			echo ($format, $a);
		}
		if (! ($a < 10)) {
			$format = '$a(%s)��10��菬�����Ȃ��B<br>';
			echo sprintf($format, $a);
		}
	?>
	</div>
</body>
</html>

