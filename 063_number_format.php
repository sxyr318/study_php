<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���l��3�����ƂɃJ���}��؂�ɂ�����</title>
</head>
<body>
	<div>
	<?php
		$num1 = 10000;
		$num2 = 100;
		$num3 = 1234567890.5;
		
		echo '<p>3�����Ƃɋ�؂��ĕ\������</p>';
		echo '<ul>';
		echo '<li>' . $num1 . ' -> ' . number_format($num1) . '</li>';
		echo '<li>' . $num2 . ' -> ' . number_format($num2) . '</li>';
		echo '<li>' . $num3 . ' -> ' . number_format($num3) . '</li>';
		echo '</ul>';
		
		echo '<p>3�����Ƃɋ�؂�A�����_��2�ʂ܂ŕ\������</p>';
		echo '<ul>';
		echo '<li>' . $num1 . ' -> ' . number_format($num1, 2) . '</li>';
		echo '<li>' . $num2 . ' -> ' . number_format($num2, 2) . '</li>';
		echo '<li>' . $num3 . ' -> ' . number_format($num3, 2) . '</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
