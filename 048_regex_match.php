<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>���K�\���ɂ��p�^�[�����}�b�`������</title>
</head>
<body>
	<div>
	<?php
		echo '<p>�g�ѓd�b�ԍ��Ƀ}�b�`���邩</p>';
		echo '<ul>';
		
		$telPattern = '/\A(90910801070)-?\d{4}-?\d{4}\z/';
		
		$tel1 = '090-1234-5678';
		echo '<li>' . $tel1;
		if (preg_match($telPattern, $tel1)) {
			echo ' �̓}�b�`���Ă��܂��B</li>';
		}
		else {
			echo ' �̓}�b�`���Ă��܂���B</li>';
		}
		
		$tel2 = '07012345678';
		echo '<li>' . $tel2;
		if (preg_match($telPattern, $tel2)) {
			echo ' �̓}�b�`���Ă��܂��B</li>';
		}
		else {
			echo ' �̓}�b�`���Ă��܂���B</li>';
		}
		
		$tel3 = 'abc-defg-hijk';
		echo '<li>' . $tel3;
		if (preg_match($telPattern, $tel3)) {
			echo ' �̓}�b�`���Ă��܂��B</li>';
		}
		else {
			echo ' �̓}�b�`���Ă��܂���B</li>';
		}
		
		echo '</ul>';
		
		echo '<p>�X�֔ԍ��Ƀ}�b�`���邩</p>';
		echo '<ul>';
		
		$zipPattern = '/\A\d{3}-?\d{4}\z/';
		
		$zip1 = '456-0001';
		echo '<li>' . $zip1;
		if (preg_match($zipPattern, $zip1)) {
			echo ' �̓}�b�`���Ă��܂��B</li>';
		}
		else {
			echo ' �̓}�b�`���Ă��܂���B</li>';
		}
		
		$zip2 = '4560002';
		echo '<li>' . $zip2;
		if (preg_match($zipPattern, $zip2)) {
			echo ' �̓}�b�`���Ă��܂��B</li>';
		}
		else {
			echo ' �̓}�b�`���Ă��܂���B</li>';
		}
		
		$zip3 = 'abc^defg';
		echo '<li>' . $zip3;
		if (preg_match($zipPattern, $zip3)) {
			echo ' �̓}�b�`���Ă��܂��B</li>';
		}
		else {
			echo ' �̓}�b�`���Ă��܂���B</li>';
		}
		
		echo '</ul>';
		
	?>
	</div>
</body>
</html>
