<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>�����ŏ����𕪊򂷂�ɂ́H</title>
</head>
<body>
	<div>
	<?php
		// if���̏ȗ��\�L
		if ($kuji == true) {
			echo '���I';
		}
		
		if ($kuji == true) echo '���I';
		
		
		// �_���l�̏ȗ�
		if ($kuji == true) {
			echo '���I';
		}
		
		if ($kuji) {
			echo '���I';
		}
		
		if ($kuji != true) {
			echo '���I';
		}
		
		if (! $kuji) {
		 echo '���I';
		}
		
	?>
	</div>
</body>
</html>


