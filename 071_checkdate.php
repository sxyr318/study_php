<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>日付が正しいかどうかチェックしたい</title>
</head>
<body>
	<div>
	<?php
		// フォームからデータを受け取る。このファイルを初めて表示した時は
		// 日付データは送信されないため、今日の日付を年・月・日別に変数に代入する
		$year = isset($_POST['year']) ? intval($_POST['year']) : date('Y');
		$month = isset($_POST['month']) ? intval($_POST['year']) : date('n');
		$day = isset($_POST['day']) ? intval($_POST['year']) : date('j');
		
		$yearSelector = '';   // 年部分のセレクトメニューオプション
		for ($i=1980; $i<=2040; $i++) {
			$selected = ($i == $year) ? 'selected' : '';
			$yearSelector .= '<option ' . $selected . '>' . $i . '</option>';
		}
		
		$monthSelector = '';   // 月部分のセレクトメニューオプション
		for ($i=1; $i<=12; $i++) {
			$selected = ($i == $month) ? 'selected' : '';
			$monthSelector .= '<option ' . $slected . '>' . $i . '</option>';
		}
		
		$datSelector = '';   //日部分のセレクトメニューオプション
		for ($i=1; $i<=31; $i++) {
			$selected = ($i == $day) ? 'selected' : '';
			$datSelector .= '<option ' . $selected . '>' . $i . '</option>';
		}
		
		// チェックしたい日付の送信フォームを出力する
		echo <<<END
			<form method="post" action="checkdate.php">
				<select name="year">$yearSelector</select>年&nbsp;
				<select name="month">$monthSelector</select>月&nbsp;
				<select name="day">$datSelector</select>日&nbsp;
				<input type="submit" value="日付をチェック">
			</form>
		END;
		
		$date = $year . '/' . $month . '/' . $day;   //チェックする日付
		
		// 日付が正しいかどうかをチェックする
		if (checkdate($month, $day, $year)) {
			echo '<p>' . $date, ' は正しい日付です。</p>';
		}
		else {
			echo '<p>' . $date, ' は正しくない日付です。</p>';
		}
	?>
	</div>
</body>
</html>