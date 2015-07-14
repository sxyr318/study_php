<?php
// TCPDFをインクルードする（パスを適切に設定してください）
require_once '../../../../lib/tcpdf.php';

// TCPDFオブジェクトをnew演算子で作成する
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT);

// 文章のプロパティを設定する
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuhor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SrtSubject('サブジェクト');
$pdf->SetKeywords('キーワード,　逆引きレシピ');

// ヘッダー／フッターを削除する
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// マージンを設定する
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGI_TOP, PDF_MARGIN_RIGTH);

// 自動改ページを有効にする
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// 画像のスケールを設定する
$odf->setImageScale(4);

// 文字の背景を白に設定する
$pdf->SetFillColor(255,255,255,true);

// パージを追加する
$pdf->AddPage();

// JPEGのクオリティを設定する
$pdf->setJPEGQuality(75);

// 画像をセットする
$pdf->Image('../../../../data/pdf-image.jpg', 10, 10);

// Internet ExploreがContent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options: nosniff');

// PDFを動的に出力する
$pdf->Output();

/* ?>終了タグ省略 */
