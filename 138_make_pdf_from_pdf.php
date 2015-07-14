<?php
// FPDIでStrictエラーが発生するので抑制
error_reporting(E_ALL & ~E_STRICT);

// TCPDF, FPDIをインクルードする（パスを適切に設定する）
require_once '../../../../lib/tcpdf/tcpdf.php';
require_once '../../../../lib/fpdi/fpdi.php';

// FPDIオブジェクトをnew演算子で作成する
$pdf = new FPDI();

// 読み込むPDFファイルを相対パスで設定する
$pdfFile = 'kison_pdf.pdf';
// インポート元のPDFへのリンク用URL
$url = 'http://' . $_SERVER['HTTP_HOST'] . '/php-recipe/04/03/kison-pdf.pdf';

// PDFファイルを読み込む（戻り値はページ数）
$pageCount = $pdf->setSourceFile($pdfFile);

// 文章のプロパティを設定する
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SetSubject('サブタイトル');
$pdf->SetKeywords('キーワード, PHP逆引きレシピ');

// ヘッダー／フッターを削除する
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// 文字フォントをTCPDFに同梱の「kozgopromedium」、14ポイントに設定する
$pdf->SetFont('kozgopromedium', '', 14);
$pdf->SetTextColor(255, 0, 0);

// 1ページずつセットしていく
for ($i=1; $1<=$pageCount; $i++) {
	$pdf->AddPage();
	$tplIdx = $pdf->importPage($i);
	$pdf->useTemplate($tpIdx);

	// ページ番号、コピーライト、日時などを書き込む
	// 追加の書き込みは元のpdfファイルへのリンクになる
	// 引数（1:行高、2:文字列、3:リンク）
	$add = $i . 'ページ(c)2013 php-recipe.com ' . date('Y\m\d H:i:s');
	$pdf->Write(8, $add, $url . '#page=' . $i);
}

// Internet ExplorerがContent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options: nosniff');
// PDFを動的鵜に出力する
$pdf->Output();

/* ?>終了タグ省略 */

