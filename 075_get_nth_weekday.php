<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>第3月曜日を求めたい</title>
</head>
<body>
	<div>
	<?php
		echo '<p>2013年7月の第3月曜日（海の日）を計算する</p>';
		
		$year= 2013;
		$month = 7;
		$week = 3;
		$weekday = 1;  // 月曜日
		
		echo '<ul>';
		echo '<li>年：' . $year . '</li>';
		echo '<li>月：' . $month . '</li>';
		echo '<li>週番号：' . $week . '</li>';
		echo '<li>曜日、0(日曜)から6(土曜)：' . $weekday . '</li>';
		echo '</ul>';
		
		echo '<p>計算結果: ';
		$ret = getNthWeekday($year, $month, $week, $weekday);
		if ($ret !== false) {
			echo $ret . '日';
		}
		else {
			echo '該当する日付は存在しません。';
		}
		echo '</p>';
		
		// getNthWeekday()関数
		// 指定年月の第〇番目の〇曜日の日付を返す。
		// 該当する日付が存在しない場合はfalseを返す。
		// 第1引数には年を指定する。
		// 第2引数には月を指定する。
		// 第3引数には週番号（第〇週目）を指定する。
		// 第4引数には曜日を0(日曜)から6(土曜)の数値で指定する。
		function getNthWeekday($year, $month, $week, $weekday)
		{
			// 週の指定が正しいか判定
			if ($week < 1 || $week > 5) {
				return false;
			}
			
			// 曜日の指定が正しいか判定
			if ($weekday < 0 || $weekday > 6) {
				return false;
			}
			
			// 指定した年月の月初日（1日）の曜日を取得する
			$weekdayOffFirst = (int)date('w', mktime(0, 0, 0, $month, 1, $year));
			
			// 月初日の曜日を元にして第1〇曜日の日付を求める
			$firstDay = $weekday - $weekdayOffFirst + 1;
			if ($firstDay <= 0) {
				$firstDay += 7;
			}
			
			// 第1〇曜日に7の倍数を加算して、第〇週の〇曜日の日付を求める
			$resultDay = $firstDay + 7 * ($week - 1);
			
			// 最後に計算結果が妥当な日付かどうかチェックする
			if (!checkdate($month, $resultDay, $year)) {
				return false;
			}
			
			return $resultDay;
		}
	?>
	</div>
</body>
</html>