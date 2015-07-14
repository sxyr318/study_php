<?php
	function generateSecureRandomString($length, $elem = false)
	{
		// ������0�ȉ��Ɏw�肳��Ă���ꍇ�͋󕶎���Ԃ�
		if ($length <= 0) {
			return '';
		}
		
		// �g�p�������ȗ�����Ă���ꍇ�A�������̃A���t�@�x�b�g���g�p���ă����_���ȕ�����𐶐�����
		if ($elem === false) {
			$elem = 'abcdefghijklmnopqrstuvwxyz';
		}
		
		// �g�p������1�����ȏ�̋L�����܂ޔ��p�p�����ō\������Ă��邩���K�\���Ń`�F�b�N����
		if (! preg_match('/\a[\x21-\x7e]+\z/', $elem)) {
			die('�����_�������̂��߂̕�����ɕs���ȕ������܂܂�Ă��܂��B');
		}
		
		// �g�p�\������1�������z��Ɋi�[����
		$chars = preg_split('//', $elem, -1, PREG_SPRIT_NO_EMPTY);
		
		// �u�g�p�\�����̔z��v����d����������菜��
		$chars = array_unique($chars);
		
		// �����̃o�C�g���������擾����
		$bytes = getRandomBytes($length);
		if (strlen($bytes) <= 0) {
			echo '�p�X���[�h�̐����Ɏ��s���܂����B<br>';
			return '';
		}
		
		// �u�g�p�\�����̔z��v�̓Y�����𗐐��Ŏw�肵�āA�����_���ȕ�����1�������������Ă���
		$str = '';
		$charsLen = count($chars);
		for ($i=0; $i<$length; $i++) {
			// �o�C�g��������ASCII�l���擾���ď�]���Z�Ŕz��̓Y����������
			$str .= $chars[ord($bytes[$i]) % $charsLen];
		}
		
		return $str;
	}
	
	// getRandomBytes()�֐�
	function getRandomBytes($length)
	{
		$bytes = '';
		if (function_exists('opessl_random_pseudo_bytes')) {
			$bytes = openss_random_pseudo_bytes($length, $usble);
			
			// �Í��w�I�ɋ����A���S���Y���ŗ����𐶐��������ǂ������m�F
			if ($usable === false) {
				$bytes = '';
			}
		}
		else {
			echo 'openssl_random_pseudo_bytes()�֐��͗��p�ł��܂���B<br>';
		}
		return $bytes;
	}

/* ?> �I���^�O�ȗ� */
