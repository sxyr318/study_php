<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���l��K�������_�ȉ��܂łɕ\����������</title>
</head>
<body>
	<div>
	<?php
		$num1 = 10;
		$num2 = 1000.5;
		$num3 = 0.456789;
		
		echo '<p>sprintf()�֐��ŏ����_��2�ʂ܂ŕ\��������</p>';
		echo '<ul>';
		echo '<li>' . $num1 . ' -> ' . sprintf('%0.2f', $num1) . '</li>';
		echo '<li>' . $num2 . ' -> ' . sprintf('%0.2f', $num2) . '</li>';
		echo '<li>' . $num3 . ' -> ' . sprintf('%0.2f', $num3) . '</li>';
		echo '</ul>';
		
		echo '<p>nuber_format()�֐��ŏ����_��2�ʂ܂ŕ\������</p>';
		echo '<ul>';
		echo '<li>' . $num1 . ' -> ' . number_format($num1, 2) . '</li>';
		echo '<li>' . $num2 . ' -> ' . number_format($num2, 2) . '</li>';
		echo '<li>' . $num3 . ' -> ' . number_format($num3, 2) . '</li>';
		echo '</ul>';
		
		echo '<p>nuber_format()�֐��ŏ����_��2�ʂ܂ŕ\������i�J���}��؂�Ȃ��j</p>';
		echo '<ul>';
		echo '<li>' . $num1 . ' -> ' . number_format($num1, 2, '.', '') . '</li>';
		echo '<li>' . $num2 . ' -> ' . number_format($num2, 2, '.', '') . '</li>';
		echo '<li>' . $num3 . ' -> ' . number_format($num3, 2, '.', '') . '</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
