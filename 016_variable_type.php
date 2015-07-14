<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>•Ï”‚ÌŒ^‚ğ’²‚×‚é</title>
</head>
<body>
	<div>
	<?php
		// •Ï”‚É”š‚ğ‘ã“ü
		$a = 123;
		
		// •Ï”‚É•¶š—ñ‚ğ‘ã“ü
		$b = '321';
		
		echo '$a ‚ÌŒ^F ' . gettype($a) . '<br>';
		echo '$b ‚ÌŒ^F ' . gettype($b) . '<br>';
		
		// is_int()ŠÖ”‚Í®”Œ^‚©‚Ç‚¤‚©•Ô‚·
		if (is_int($a)) {
			echo '$a ‚Í integer ‚Å‚·<br>';
		}
		else {
			'$a ‚Í integer‚Å‚Í‚ ‚è‚Ü‚¹‚ñ<br>';
		}
		
		// is_string()ŠÖ”‚Í•¶šŒ^‚©‚Ç‚¤‚©•Ô‚·
		if (is_string($b)) {
			echo '$b ‚Í string ‚Å‚·';
		}
		else {
			echo '$b ‚Í string ‚Å‚Í‚ ‚è‚Ü‚¹‚ñ';
		}
		
		// var_dump()ŠÖ”‚Å‚àŒ^‚ª‚í‚©‚é
		echo '<pre>';
		var_dump($a);
		var_dump($b);
		echo'</pre>';
	?>
	</div>
</body>
</html>