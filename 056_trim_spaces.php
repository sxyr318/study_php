<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>������̑O��̔��p�󔒕������폜����</title>
</head>
<body>
	<div>
	<?php
		$text = ' abc 123 ';
		echo '<pre>�폜�O�̕�����[' . $text . ']</pre>';
		echo '<ul>';
		
		echo '<li><p>�O��̋󔒂��폜</p><pre>[';
		echo trim($text) . ']</pre></li>';
		
		echo '<li><p>�擪�̋󔒂��폜</p><pre>[';
		echo ltrim($text) . ']</pre></li>';
		
		echo '<li><p>�����̋󔒂��폜</p><pre>[';
		echo rtrim($text) . ']</pre></li>';
		
		echo '</ul>';
	?>
	</div>
</body>
</html>
