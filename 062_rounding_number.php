<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���l�̊ۂ߁i�l�̌ܓ��j�A�؂�グ�A�؂�̂Ă�������</title>
</head>
<body>
	<div>
		<ul>
		<?php
			$num1 = 123.256;
			$num2 = -123.256;
			
			echo '<li><p>���l�𐮐��Ɋۂ߂�</p>';
			echo '<p>' . $num1 . ' -> ', round($num1) . '</p></li>';
			
			echo '<li><p>���l�������_��2�ʂ܂łɊۂ߂�</p>';
			echo '<p>' . $num1 . ' -> ', round($num1, 2) . '</p></li>';
			
			echo '<li><p>���l��10�̈ʂ܂łɊۂ߂�</p>';
			echo '<p>' . $num1 . ' -> ', round($num1, -1) . '</p></li>';
			
			echo '<li><p>�����_�ȉ���؂�グ��</p>';
			echo '<p>' . $num1 . ' -> ', ceil($num1) . '</p>';
			echo '<p>' . $num2 . ' -> ', ceil($num1) . '</p></li>';
			
			echo '<li><p>�����_�ȉ���؂�̂Ă�</p>';
			echo '<p>' . $num1 . ' -> ', floor($num1) . '</p>';
			echo '<p>' . $num2 . ' -> ', floor($num1) . '</p></li>';
		?>
		</ul>
	</div>
</body>
</html>
