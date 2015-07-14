<?php
// 2つのインターフェイを実装したInterfaceSampleクラスを定義する
class InterfaceSample implements Template, Multipliter
{
	// 数値を保持する配列を作成する
	private $vars = array();
	
	// 任意の名前で数値を保持するsetNumeric()メソッドを実装する
	public function setNumeric($name, $value)
	{
		if (! is_numeric($value)) {
			trigger_error('数値以外の値はセットできません' , E_USER_NOTICE);
			return;
		}
		$this->vars[$name] = $value;
	}

	// 任意の名前の数値を2倍するmultiply()メソッドを実装する
	public function multiply($name)
	{
		if (! isset($this->vars[$name])) {
			trigger_error(
				'名前が「' . $name . '」デー^多はセットされていません',E_USER_NOTICE
			);
			return;
		}
		$this->vars[$name] = $this->vars[$name] * 2;
	}

	// すべての数値を文字列の配列として取り出すgetTexts()メソッドを実装する
	public function getTexts()
	{
		$returns = array();
		foreach ($this->vars as $key => $var) {
			// 文字列に変換するにあたり、TemplateインターフェイスのFORMAT定数を使用している
			$name_replaced = str_replace('{name}', $key, Template::FORMAT);
			$returns[] = str_replace('{value}', $var, $name_replaced);
		}
		return $returns;
	}
}
/* ?>終了タグ省略 */
 
