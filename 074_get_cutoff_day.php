<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>月末日を求めたい</title>
</head>
<body>
	<div>
	<?php
		$cutOffDay = 25;
		$date = mktime(0, 0, 0, 10, 27, 2013);
		
		echo '<p>締め日: ' . $cutOffDay . '日</p>';
		echo '<p>計算基準日: ' . date('Y/m/d', $date) . '</p>';
		
		$ret = getCutOffDate($cutOffDay, $date);
		if ($ret !== false) {
			echo '<p>結果: ' . date('Y/m/d', $ret) . '</p>';
		}
		else {
			echo '<p>不正な締め日です。</p>';
		}
		
		// getCutOffDate()関数
		// 第1引数には締日を指定する。1から31に数値を指定する。
		// 第2引数には計算基準日のタイムスタンプを指定する。
		// 省略した場合は、現在の日時の締日を計算する。
		function getCutOffDate($cutOffDay, $timestamp = false)
		{
			// タイムスタンプ省略時は現在の日時を計算基準日とする
			if ($timestamp === false) {
				$timestamp = time();
			}
			
			// 指定した締日が1から31の範囲で指定されているか判断する
			if ($cutOffDay < 1 || $cutOffDay >31) {
				return false;
			}
			
			// 計算基準日のタイムスタンプから年、月、日、月末日を取得する
			$date = getdate($timestamp);
			$year = $date['year'];
			$month = $date['mon'];
			$day = $date['mday'];
			$endOfMonth = (int)date('t', $timestamp);
			
			// 月末日が指定締日より前となってしまっている場合、月末日を締日として扱う。
			// 月末日ろ指定締日はともに数値なので、min()関数を使って1行で値の判定と代入を行う。
			$fixedCutOffDay = min($endOfMonth, $cutOffDay);
			
			// 計算基準日が締日を過ぎている場合、翌日の締日を取得する
			if ($day > $fixedCutOffDay) {
				$month++; // 月を加算;
				
				// 指定締日と翌月の月末日を比較し、小さな方を締日とする
				$endOfNextMonth = (int)date('t', mktime(0, 0, 0, $month, 1, $year));
				$fixedCutOffDay = min($endOfNextMonth, $cutOffDay);
			}
			
			// 締め日のタイムスタンプを返す
			return mktime(0, 0, 0, $month, $fixedCutOffDay, $year);
		}
	?>
	</div>
</body>
</html>