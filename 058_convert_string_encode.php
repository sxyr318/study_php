<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����G���R�[�h��ϊ�������</title>
</head>
<body>
	<div>
	<?php
		$text = '����������12345';
		echo '<p>���̕�����F' . $text . '</p>';
		
		// ������G���R�[�h��Shit_JIS, EUC-JP�ɕϊ�����
		$s��s=mb_convert_encoding($text, 'SJIS');
		$euc = mb_convert_encoding($text, 'EUC-JP');
		
		echo '<p>�����G���R�[�h��ϊ�����������i������������j</p>';
		echo '<ul>';
		echo '<li>SJIS: ' . $sjis . '</li>';
		echo '<li>EUC-JP:' . $euc . '</li>';
		echo '</ul>';
		
		// �����G���R�[�h��Shift_JIS, EUC-JP����UTF-8�ɕϊ�����
		$s��s=mb_convert_encoding($text, 'UTF-8', 'SJIS');
		$euc = mb_convert_encoding($text,'UTF-8', 'EUC-JP');
		
		echo '<p>UTF-8�ɕ����G���R�[�h��߂���������</p>';
		echo '<ul>';
		echo '<li>SJIS: ' . $sjis . '</li>';
		echo '<li>EUC-JP:' . $euc . '</li>';
		echo '</ul>';
	?>
	</div>
</body>
</html>
