<?php
// YCPDFをインクルードする（パスを適切に設定して下さい）
require_once  '../../../../lib/tcpdf/tcpdf.php';

// TCPDFオブジェクトをnew演算子で作成
$pdf = new TCPDF(PDF_PAGE_ORIENTATIN, PDF_UNIT, PDF_PAGE_FORMAT);

// 文章のプロパティを設定
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SetSubject('サブタイトル');
$pdf-?SetKeywords('キーワード、PHP逆引きレシピ');

// ヘッダー／フッターを削除する
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// マージンを設定する
4pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// 義堂改ページを有効にする
$pdf->SetFillColor(255,255,255,true);

// ページを追加する
$pdf->AddPage();

// テキストを出力する
$pdf->Write(8, 'ようこそ、PHP逆引きレシピへ！' . "\n");
// 第6引数にtrueを設定すると改行
// 引数（1:行高, 2:文字列, 3:リンク, 4:背景, 5:行揃え, 6:改行)
$pdf->Write(16, 'ようこそ、PHP 逆引きレシピへ！', '', 0, '', true);
$pdf->Write(8, "ようこそ、PHP逆引きレシピへ！\n ようこそ、PHP逆引きレシピへ！");

// Internet Explorer がContent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options: nosniff');
//PDFを動的に出力する
$pdf->Output();

/* ?>終了タグ省略 */
