<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>正規表現によるパターンをマッチしたい</title>
</head>
<body>
	<div>
	<?php
		echo '<p>携帯電話番号にマッチするか</p>';
		echo '<ul>';
		
		$telPattern = '/\A(90910801070)-?\d{4}-?\d{4}\z/';
		
		$tel1 = '090-1234-5678';
		echo '<li>' . $tel1;
		if (preg_match($telPattern, $tel1)) {
			echo ' はマッチしています。</li>';
		}
		else {
			echo ' はマッチしていません。</li>';
		}
		
		$tel2 = '07012345678';
		echo '<li>' . $tel2;
		if (preg_match($telPattern, $tel2)) {
			echo ' はマッチしています。</li>';
		}
		else {
			echo ' はマッチしていません。</li>';
		}
		
		$tel3 = 'abc-defg-hijk';
		echo '<li>' . $tel3;
		if (preg_match($telPattern, $tel3)) {
			echo ' はマッチしています。</li>';
		}
		else {
			echo ' はマッチしていません。</li>';
		}
		
		echo '</ul>';
		
		echo '<p>郵便番号にマッチするか</p>';
		echo '<ul>';
		
		$zipPattern = '/\A\d{3}-?\d{4}\z/';
		
		$zip1 = '456-0001';
		echo '<li>' . $zip1;
		if (preg_match($zipPattern, $zip1)) {
			echo ' はマッチしています。</li>';
		}
		else {
			echo ' はマッチしていません。</li>';
		}
		
		$zip2 = '4560002';
		echo '<li>' . $zip2;
		if (preg_match($zipPattern, $zip2)) {
			echo ' はマッチしています。</li>';
		}
		else {
			echo ' はマッチしていません。</li>';
		}
		
		$zip3 = 'abc^defg';
		echo '<li>' . $zip3;
		if (preg_match($zipPattern, $zip3)) {
			echo ' はマッチしています。</li>';
		}
		else {
			echo ' はマッチしていません。</li>';
		}
		
		echo '</ul>';
		
	?>
	</div>
</body>
</html>
