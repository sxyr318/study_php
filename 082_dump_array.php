<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�z��̓��e���f�o�b�N�\��������</title>
	<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
	<div>
	<?php
		$data = array(array('string' => '��Y', 'bool' => true),
					  array('string' => '', 'float' => 3.1415),
					  array('int' => '10', 'null' => null));
					  
		echo '<table><tr>';
		echo '<td class="vtop">print_r()�֐��ŕ\��<pre>';
		print_r($data);
		echo '</pre></td>';
		
		echo '<td class="vtop">var_dump()�֐��ŕ\��<pre>';
		var_dump($data);
		echo '</pre></td>';
		
		echo '<td class="vtop">var_export()�֐��ŕ\��<pre>';
		var_export($data);
		echo '</pre></td>';
		echo '</tr></table>';
	?>
	</div>
</body>
</html>