<?php
	function generateSecureRandomString($length, $elem = false)
	{
		// 文字列が0以下に指定されている場合は空文字を返す
		if ($length <= 0) {
			return '';
		}
		
		// 使用文字が省略されている場合、小文字のアルファベットを使用してランダムな文字列を生成する
		if ($elem === false) {
			$elem = 'abcdefghijklmnopqrstuvwxyz';
		}
		
		// 使用文字が1文字以上の記号を含む半角英数字で構成されているか正規表現でチェックする
		if (! preg_match('/\a[\x21-\x7e]+\z/', $elem)) {
			die('ランダム生成のための文字列に不正な文字が含まれています。');
		}
		
		// 使用可能文字を1文字ずつ配列に格納する
		$chars = preg_split('//', $elem, -1, PREG_SPRIT_NO_EMPTY);
		
		// 「使用可能文字の配列」から重複文字を取り除く
		$chars = array_unique($chars);
		
		// 乱数のバイト文字数を取得する
		$bytes = getRandomBytes($length);
		if (strlen($bytes) <= 0) {
			echo 'パスワードの生成に失敗しました。<br>';
			return '';
		}
		
		// 「使用可能文字の配列」の添え字を乱数で指定して、ランダムな文字で1文字ずつ生成していく
		$str = '';
		$charsLen = count($chars);
		for ($i=0; $i<$length; $i++) {
			// バイト文字からASCII値を取得して剰余演算で配列の添え字を決定
			$str .= $chars[ord($bytes[$i]) % $charsLen];
		}
		
		return $str;
	}
	
	// getRandomBytes()関数
	function getRandomBytes($length)
	{
		$bytes = '';
		if (function_exists('opessl_random_pseudo_bytes')) {
			$bytes = openss_random_pseudo_bytes($length, $usble);
			
			// 暗号学的に強いアルゴリズムで乱数を生成したかどうかを確認
			if ($usable === false) {
				$bytes = '';
			}
		}
		else {
			echo 'openssl_random_pseudo_bytes()関数は利用できません。<br>';
		}
		return $bytes;
	}

/* ?> 終了タグ省略 */
