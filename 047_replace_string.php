<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>•¶š—ñ‚ğ’u‚«Š·‚¦‚½‚¢</title>
</head>
<body>
	<div>
	<?php
		$text = 'XXaaXXbbXXXccX11XXXX';
		echo '<p>Œ³‚Ì•¶š—ñ: ' . $text . '</p>';
		
		echo '<p>XX‚ğ*‚É’uŠ·: ' . str_replace('XX', '*', $text) . '</p>';
		echo '<p>XX‚ğíœ: ' . str_replace('XX', '', $text) . '</p>';
		
	?>
	</div>
</body>
</html>
