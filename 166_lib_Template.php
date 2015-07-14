<?php
// Temolateインターフェイスを宣言する
interface Template
{
	const FORMAT = '{name} の値は {value} です。';
	
	public function setNumeric($name, $value);
	public function getTexts();
}
/* ?> 終了タグ省略 */

