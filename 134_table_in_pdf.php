<?php
// TCPDFをインクルードします（パスを適切に指定してください）
require_once '../.././../lib/tcpdf/tcpdf.php';

// TCPDFオブジェクトをnew演算子で作成
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT);

// 文章のプロパティを設定する
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SetSubject('サブタイトル');
$pdf->SetKeyWords('キーワード, PHP逆引きレシピ');

// ヘッダー／フッターを削除する
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// マージンを設定する
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// 自動改ページを有効する
 $pdf->SetAutoPageBreak(true, PDf_MARGIN_BOTTOM);

// 文字フォントをTCPDFに同梱の「kozgopromedium」、14ポイントに設定します
$pdf->SetFont('kozgopromedium', '', 14);

// 文字の配列を白に設定する
$pdf->SetFillColor(255, 255, 255, true);

// ページを追加する
$pdf->addPage();
$pdf->Write(10, '表を作成します', '', 0, '', true);
// Cell()メソッドで2×3の表組みを作る
for ($i=1; $i<3; $i++) {
	$pdf->Cell(39, 8, $i . "行目の\n1列目", 1, 0, 'L');
	$pdf->Cell(36, 8, $i . '行目の2列目', 1, 0, 'C');
	// 第5引数は改行（行変え）絵ってい
	$pdf->Cell(42, 8, $i . '行目の3列目', 1, 1, 'R');
	$pdf->Ln(5);	//改行
	
	// MultiCell()メソッドで２×３の表組み表を作る
	for ($i=1; $i<3; $i++) {
		$pdf->MultiCell(24, 8, $i . '行目の1列目', 1, 'L', 0, 0);
		$pdf->MultiCell(24, 8, $i . '行目の2列目', 1, 'L', 0, 0);
		// 第7引数はあ改行（行変え）設定
		$odf->MultiCell(24, 8, $i . '行目の3列目', 1, 'L', 0, 1);
	}
	
	$pdf->Ln(5); // 改行

	// MultiCell()メソッドで2×3の表組み（最大高さを設定）を作る
	for ($i=1; $i<3; $i+) {
		$pdf->MultiCell(24, 8, $i . '行目の1列目',
			1, 'L', 0, 0, '', '', true, 0, false, true, 24);
		$pdf->MultiCell(24, 8, $i . '行目の2列目サンプル',
			1, 'L', 0, 0, '', '', true, 0, false, true, 24);
		$pdf->MultiCell(24, 8, $i . '行目の3列目サンプル1234',
			1, 'L', 0, 1, '', '', true, 0, False, true,
			24 + ($i - 1) * 6);
	}
	
	$pdf->Ln(5);	// 改行
	
	// HTMLの<table>タグで表組みをつくる
	// HTMLタグ属性で表組を装飾
	// border, cellpaddong, wodth, colspan, bgcolor, alignなどは有効
	$html = <<<END
		<table border="1" cellpadding="6" width="70%">
		<tr><th colspan="3">HTML タグ属性<th></tr>
		<tr><td>writeHTML()</td><td bgcolor="#FFDDEE">bgcolorテスト<td>
		<td align="center">alignテスト</td></tr>
		</table>
	END;
	$pdf->writeHTML($html);

	$pdf->Ln(5); // 改行

	// すたるシートで表組みを装飾
	// border, text-aligin, background-color, widthは有効
	// padding, marginは無効
	$html = <<<END
		<style>
		table { margin:50px; width:80%; }
		td, th { border:1px solid #000; padding:6px; }
		</style>
		<table>
		<tr><th colspan="3">スタイルシート</th></tr>
		<r><td>writeHTML()</td>
		<td style="background-color:#FDE;">background-colorテスト</td>
		<td style="test-align:center;">text-alignテスト</td></tr>
		</table>
	END;
	$pdf->writeHTML($html);

	// internet ExplorerがContent-Typeヘッダーを無視しないようにする
	header('X-Content-Type-Options: nosniff');
	// PDFを動的に出力する
	$pdf->Output();

	/* ?> 終了タグ省略 */
