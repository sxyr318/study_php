<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�������u����������</title>
</head>
<body>
	<div>
	<?php
		$text = 'XXaaXXbbXXXccX11XXXX';
		echo '<p>���̕�����: ' . $text . '</p>';
		
		echo '<p>XX��*�ɒu��: ' . str_replace('XX', '*', $text) . '</p>';
		echo '<p>XX���폜: ' . str_replace('XX', '', $text) . '</p>';
		
	?>
	</div>
</body>
</html>
