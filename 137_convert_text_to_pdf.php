<?php
// TCPDFをインクルードする（パスを適切に設定する）
require_once '../../../../lib/tcpdf/tcpdf.php';

// TCPDFオブジェクトをnew演算子で作成
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT);

// 文章のプロパティを設定する
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SetSubject('サブタイトル');
$pdf->SetKeywords('キーワード, PHP逆引きレシピ');

// ヘッダー／フッターを削除する
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// マージンを設定する
$psf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// 自動改ページを有効にする
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// 文字フォントをTCPDFに同梱の「kozgopromedium」、14ポイントに設定する
$pdf->SetFont('kozgopromedium', '', 14);

// ページを追加する
$pdf->AddPage();

// テキストファイルの中身を変数に代入する
$text = fole_get_contents('../../../../data/pdf-text.txt');

// テキストを出力する
$pdf->Write(5, $text);

// Internet ExplorerがContent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options: nosniff');

// PDFを動的に出力する
$pdf->Output();

/* ?>終了タグ省略 */
