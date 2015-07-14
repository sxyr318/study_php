<!DOCTYPE html>
<html lang="ja">
<head>
	<neta charset="UTF-8">
	<title>Œ^‚Ì•ÏŠ·</title>
</head>
<body>
	<div>
	<?php
		// •Ï”‚É®”‚ğ‘ã“ü
		$a = 123;
		
		// •Ï”‚É•¶š—ñ‚ğ‘ã“ü
		$b = '321';
		
		echo '$a ‚ÌŒ^F ' . gettype($a) . '<br>';
		echo '$b ‚ÌŒ^F ' . gettype($b) . '<br><br>';
		
		// ŠÖ”‚ğg‚¢‚½‚¢Œ^‚É•ÏŠ·
		$a = strval($a);
		$b = intval($b);
		
		echo '$a ‚ÌŒ^F ' . gettype($a) . '<br>';
		echo '$b ‚ÌŒ^F ' . gettype($b) . '<br><br>';
		
		// Œ^ƒLƒƒƒXƒg‚ÅŒ^‚ğ•ÏŠ·
		$a = (int) $a;
		$b = (string) $b;
		
		echo '$a ‚ÌŒ^F ' . gettype($a) . '<br>';
		echo '$b ‚ÌŒ^F ' . gettype($b) . '<br><br>';
	?>
	</div>
</body>
</html>
