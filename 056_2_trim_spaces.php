<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>������̑O��̔��p�󔒕������폜����</title>
</head>
<body>
	<div>
	<?php
		$text = '�@abc�@123�@';
		echo '<pre>�폜�O�̕�����[' . $text . ']</pre>';
		echo '<ul>';
		
		echo '<li><p>�O��̋󔒂��폜</p><pre>[';
		echo mb_trim($text) . ']</pre></li>';
		
		echo '<li><p>�擪�̋󔒂��폜</p><pre>[';
		echo mb_ltrim($text) . ']</pre></li>';
		
		echo '<li><p>�����̋󔒂��폜</p><pre>[';
		echo mb_rtrim($text) . ']</pre></li>';
		
		echo '</ul>';
		
		// mb_trim()�֐�
		// ������̑O��̋󔒁i�S�p�X�y�[�X�܂ށj���폜�����������Ԃ��B
		function mb_trim($str)
		{
			return mb_ereg_replace('\A(\s|�@)+(\s|�@)+\z', '', $str);
		}
		
		// mb_ltrim()�֐�
		// ������̐擪�̋󔒁i�S�p�X�y�[�X�܂ށj���폜�����������Ԃ��B
		function mb_ltrim($str)
		{
			return mb_ereg_replace('\A(\s|�@)+', '', $str);
		}
		
		// mb_rtrim()�֐�
		// ������̖����̋󔒁i�S�p�X�y�[�X�܂ށj���폜�����������Ԃ��B
		function mb_rtrim($str)
		{
			return mb_ereg_replace('(\s|�@)+\z', '', $str);
		}
	?>
	</div>
</body>
</html>
