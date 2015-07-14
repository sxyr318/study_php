<?php
// 無名の関数を使用してp-とロード関数を登録する
spl_autoload_register(
	function ($classname) {
		// __DIR__はこのソースファイルがあるディレクトリが定義されるマジック定義です。
		// 引数として渡されたファイル名を元に「暮らす名.class.php」を探している
		$filepath = __DIR__ . '/' . $classname . '.class.php';

		// ファイルの存在確認を行う
		if (is_readable($filepath)) {
			//引数として渡されたkラス名を元に、対応するファイルを読み込む
			require $filepath;
		}
	}
);

/* ?>終了タグ省略 */
