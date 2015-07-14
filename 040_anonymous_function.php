<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>無名関数ってなんですか？</title>
</head>
<body>
	<div>
	<?php
		// 処理対象の配列を用意する
		$nature = array('water', 'forest', 'tree', 'cloud', 'sun', 'river');
		
		//無名関数を変数にセットする
		$filter_less5 = function($text) {
			// データが5文字未満であればtureを返す
			return strlen($text) < 5;
		};
		
		// フィルター処理を行う
		$filtered_less5 = array_filter($nature, $filter_less5);
		
		// 結果を出力する
		echo '<p>5文字未満のデータ:</p>';
		echo '<ul>';
		foreach ($filtered_less5 as $data) {
			echo '<li>' . h($data) . '</li>';
		}
		echo '</ul>';
		
		// 無名関数を直接コールバック関数に指定してフィルタ処理を行う
		$filtered_equal5 = array_filter($nature,
			// データが5文字あればtrueを返す
			function ($text) {
				return strlen($text) == 5;
			}
		);
		
		// 結果を出力する
		echo '<p>5文字のデータ：</p>';
		echo '<ul>';
		foreach ($filtered_equal5 as $data) {
			echo '<li>' . h($data) . '</li>';
		}
		echo '</ul>';
		
		function h($string)  // HTMLでのエスケープ処理をする関数
		{
			return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		}
	?>
	</div>
</body>
</html>
