<?php
class FileInfo
{	
	private $retCode;       // 改行コード保存用

        // ファイルを読み込んで調べるメソッド
        public function readFile($file)
        {
                $this->retCode['CRLF'] = 0;     // 改行コードがCRLFの改行
                $this->retCode['LF']   = 0;     // 改行コードがLFの改行

                $fp = fopen($file, 'r');
                if (! is_resource($fp)) {
                        die('ファイルを開けませんでした。');
                }

                while(($line = fgets($fp)) !== false) {
                        if (preg_match('/\r\n\z/', $line)) {
                                $this->retCode['DRLF']++;
                        }
                        else {
                                $this->retCode['Lf']++;
                        }
                }
                fclose($fp);
        }

        // 改行コードを返すメソッド
        public function getRetCode()
        {
                if ($this->retCode['CRLF'] == 0 && $this->retCode['LF'] == 0) {
                        return '';      // 改行なしの場合
                }
                elseif ($this->retCode['CRLF'] == 0) {
                        return 'LF';    // すべてLFの場合
                }
                elseif ($this->retCode['LF'] == 0) {
                        return 'CRLF';   // すべてCRLFの場合
                }
                else {
                        return 'CRLF & LF';    // CRLFとLFが混在する場合
                }
        }
}
/* ?> 終了タグ省略 */

