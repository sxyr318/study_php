<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�q�A�h�L�������g</title>
</head>

<body>
	<div>
	<?php
		$book = 'PHP�t�������V�s';
		$text = <<<EOL
			�q�A�h�L�������g�ŕϐ��ɕ��͂������܂��B<br>
			���Ж��F $book<br>
			EOL;
			
		echo $text;
		
		echo <<<END
		echo �Œ��ڕ��͂��o�͂��邱�Ƃ�
		�ł��܂��B<br><br>
		END;
		
		echo <<<'END'
		Nowdoc�\���ł��B<br>
		�I�[ID���A�V���O���N�H�[�g�ň͂�ł��邱�Ƃɒ��ӂ��Ă��������B<br>
		�ȉ��ɋL�q�����ϐ��͓W�J����܂���B<br>
		���Ж��F $book<br>
		END;
	?>
	</div>
</body>
</html>