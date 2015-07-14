<?php
// グラフを描画するJavascriptの関数とグラフを表示させる<div>タグを
// 静止絵するユーザー定義関数を定義する
function makeChartParts($data, $options, $type)
{
	// JavaScriptの関数名、<div>タブのIdが
	// 重複しないようにするための連番
	static $index = 1;

	// グラフの種類からAPIロードジの「packages」を認定し、APIロードを生成
	$package = 'corechart';
	$special_type = array('GeoChart', 'AnnotatedTimeLine', 'TreeMap',
				'OrgChart', 'Table', 'TimeLine', 'GeoMap',
				'MotionChart');
	if(in_array($type, $special_type)) {
		$package = strtolower($type);
	}
	$load = 'google.load("visualization", "1",
			{packages:["'.$package.'"]});';
	
	// データとオプションをJSON形式へ
	$jsData = json_encode($data);
	$jsonOptions = json_encode($options);

	// グラフを描画するJavascript関数を生成
	$chart = <<<CHART_FUNC
		{$load}
		google.setOnLoadCallback(drawChart{$index});
		function drawChart{$index}() {
			var data = {$jsData};
			var chartData = new google.visualization.arrayToTable(data);
			var options = {$jsonOptions};
			var chartDiv = document.getElementById('chart{$index}');
			var chart = new google.visualization.{$type}(chartDiv);
			chart.draw(chartData, options);
		}\n
	CHART_FUNC;
	
	// グラフを表示する<div>タグを生成
	$div = '<div id="chart' . $index . '"></div>';
	
	$index++; // 連番を1加算しておく
	return array($chart, $div);
}
/* ?>終了タグ省略 */
