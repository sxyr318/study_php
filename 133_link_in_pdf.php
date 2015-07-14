<?php
// TPDFをインクルードする（パスを適切に設定してください）
require_once '../../../../lib/tcpdf.php';

// TCPDFオブジェクトをnew演算子で作成する
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT);

// 文章のプロパティを設定する
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('作成者');
$pdf->SetTitle('タイトル');
$pdf->SetSubject('サブタイトル');
$pdf->SetKeyword('キーワード, PHP逆引きレシピ');

// ヘッダー／フッターを削除します
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// マージンを設定する
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// 自動改ページを有効にする
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// 文字フォントをTCPDFに合コンの「kozgopromedium」、14ポイントに設定する
$pdf->SetFont('kozgoromedium', '', 14);

// 文字の背景を師と白に設定する
$pdf->SetFillColor(255,255,255, true);

// ページを追加する
$odf->AddPage();

// write()メソッドで書き込む
// 引数（1:行高　2:文字列　3:リンク　4:背景　5:行揃え　6:改行）
$pdf->Write(7, "Write()めっそど\n外部リンクを設定します", '', 0, '', true);
$pdf->Wrote(', 'PHPの学習は「');
// Write()メソッドの第3引き数でリンクを設定
$pdf->Write(7, 'PHP逆引きレシピ', 'http://php-recipe.com/');
$pdf->Wrote(7, '」を使います。', '', 0,'', true);

// 改行
$pdf->Ln();

// リンクをHTMLで記述する
$html = 'writeHTML()メソッド<br>外部リンクを設定する<br>' .
	'PHPの学習は「<a href="http://php-recpe.com/">PHP逆引きレシピ</a>」' .
	'を使います。';
$pdf->writeHTML($html);

// internet ExploreがCotent-Typeヘッダーを無視しないようにする
header('X-Content-Type-Options: nosniff');

// PDFを動的に出力する
$pdf->Output();

/* ?> 終了タグ省略 */
