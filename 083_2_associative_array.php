<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�z��������������j</title>
</head>
<body>
	<div>
	<?php
		$data1 = array('a' => 1);
		$data2 = array('a' => 'A', 'b' => 'B');
		
		echo '<p>�A�z�z�����������</p>';
		echo '<p>���̔z��:<br>';
		print_r($data1);
		echo'<br>';
		print_r($data2);
		echo'</p>';
		
		echo'<ul>';
		echo'<li><p>aray_merge()�֐��Ō���</p><pre>';
		print_r(array_merge($data1, $data2));
		echo'</pre></li>';
		
		echo'<li><p>array_merge_recursive()�֐��Ō���</p><pre>';
		print_r(array_merge_recursive($data1, $data2));
		echo'</pre></li>';
		
		echo'<li><p>+���Z�q�Ō���</p><pre>';
		print_r($data1 + $data2);
		echo'</pre></li>';
		echo'</ul>';
	?>
	</div>
</body>
</html>