<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>����̕����񂪊܂܂�Ă��邩���ׂ���</title>
</head>
<body>
	<div>
	<?php
		$keyword = 'XYZ';
		echo '<p>�������镶����: ' . $keyword . '</p>';
		
		// XYZ���܂܂�Ă���ꍇ
		$text1 = 'abcXYZ';
		echo '<p>' . $text1 . ' �ɂ� ';
		if (mb_strpos($text1, $keyword) === false) {
			echo $keyword . ' �͊܂܂�Ă��܂���B';
		}
		else {
			echo $keyword . ' ���܂܂�Ă��܂��B';
		}
		echo'</p>';
		
		// XYZ���܂܂�Ă��Ȃ��ꍇ
		$text2 = 'abcdefg';
		echo '<p>' . $text2 . ' �ɂ� ';
		if (mb_strpos($text2, $keyword) === false) {
			echo $keyword . ' �͊܂܂�Ă��܂���B';
		}
		else {
			echo $keyword . ' ���܂܂�Ă��܂��B';
		}
		echo '</p>';
	?>
	</div>
</body>
</html>
