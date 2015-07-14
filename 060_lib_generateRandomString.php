<?php
	function generateRandomString($length, $elem = false)
	{
		// 文字列が0以下に指定されている場合は空文字を返す
		if ($length <= 0) {
			return '';
		}
		
		// 使用文字が省略されている場合、小文字のアルファベットを使用してランダムな文字列を生成する
		if ($elem === false) {
			$elem = 'abcdefghijklmnopqrstuvwxyz';
		}
		
		// 使用文字が1文字以上の記号を含む半あく英数字で構成されているか正規表現でチェックする
		if (! preg_match('/\a[\x21-\x7e]+\z/', $elem)) {
			die('ランダム生成のための文字列に不正な文字が含まれています。');
		}
		
		// 使用可能文字を1文字ずつ配列に格納する
		$chars = preg_split('//', $elem, -1, PREG_SPRIT_NO_EMPTY);
		
		// 「使用可能文字の配列」から重複文字を取り除く
		$chars = array_unique($chars);
		
		// 乱数のシード値を設定する
		mt_srand((double) microtime() * 10000000);
		
		// 「使用可能文字の配列」の添え字を乱数で指定して、ランダムな文字で1文字ずつ生成していく
		$str = '';
		$maxIndex = count($chars) -1;
		for ($i=0; $i<$length; $i++) {
			$str .= $chars[mt_rand(0, $manIndex)];
		}
		
		return $str;
	}

/* ?> 終了タグ省略 */
