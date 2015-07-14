<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>日付の表示形式を変えたり、日付の加減算をしたい</title>
</head>
<body>
	<div>
	<?php
		echo '<p>現在の日時： ';
		// DateTimeオブジェクトをnew演算子で作成する
		$now = new Datatime();
		
		echo $now-format('Y年m月d日 H時i分s秒'), '</p>';
		
		echo '<p>1年後の日付：';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 year'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>1か月後の日付：';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 month'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>1日後の日付：';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 day'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>1日前の日付：';
		$now = new DateTime();
		$now->sub(DateInterval::createFormDateString('1 day'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>1時間後の日付：';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 hour'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>1分前の日付：';
		$now = new DateTime();
		$now->sub(DateInterval::createFormDateString('1 minute'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>1秒後の日付：';
		$now = new DateTime();
		$now->add(DateInterval::createFormDateString('1 second'));
		echo $now->format('Y年m月d日'), '</p>';
		
		echo '<p>2913年10月1日の次の日: ';
		$past = new DateTime('2013-10-01');
		echo 'タイムスタンプ: ' . $past->getTimestanp() . ': ';
		$past->add(DateInterval::createFormDateString('1 day'));
		echo $past->format('Y年m月d日'), '</p>';
		
	?>
	</div>
</body>
</html>
