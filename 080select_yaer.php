<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���t�Z���N�g���j���[��\��������</title>
</head>
<body>
	<div>
	<?php
		$from = (int)date('Y');   // ���݂̔N
		$to = $from + 5;
		
		echo '<select name="year">';
		for ($i=$from; $i<=$to; $i++) {
			echo "<option value=\"$i\">$i</option>";
		}
		echo '</select> �N ';
	?>
	</div>
</body>
</html>