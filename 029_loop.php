<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>PHP�̌J��Ԃ��\����m�肽��</title>
</head>
<body>
	<div>
	<?php
		echo 'while�\��: ';
		$value= 5;
		while ($value > 0) {
			echo $value . ' ';
			$value--;
		}
		
		echo '<br>for�\��: ';
		for ($value=0; $value<3; $value++) {
			echo $value . ' ';
		}
		
		echo '<br>do-while�\��: ';
		$value = 5;
		do {
			echo $value . ' ';
			$value--;
		}while($value > 10);
		
		echo '<br>foreach�\��: ';
		$fruit = array('apple' => 200, 'orange' => 100, 'green' => 200);
		foreach ($fruit as $key => $value) {
			echo $key . '��' . $value . '�~';
		}
	?>
	</div>
</body>
</html>
