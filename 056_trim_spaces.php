<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>•¶Žš—ñ‚Ì‘OŒã‚Ì”¼Šp‹ó”’•¶Žš‚ðíœ‚·‚é</title>
</head>
<body>
	<div>
	<?php
		$text = ' abc 123 ';
		echo '<pre>íœ‘O‚Ì•¶Žš—ñ[' . $text . ']</pre>';
		echo '<ul>';
		
		echo '<li><p>‘OŒã‚Ì‹ó”’‚ðíœ</p><pre>[';
		echo trim($text) . ']</pre></li>';
		
		echo '<li><p>æ“ª‚Ì‹ó”’‚ðíœ</p><pre>[';
		echo ltrim($text) . ']</pre></li>';
		
		echo '<li><p>––”ö‚Ì‹ó”’‚ðíœ</p><pre>[';
		echo rtrim($text) . ']</pre></li>';
		
		echo '</ul>';
	?>
	</div>
</body>
</html>
