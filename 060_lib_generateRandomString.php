<?php
	function generateRandomString($length, $elem = false)
	{
		// ������0�ȉ��Ɏw�肳��Ă���ꍇ�͋󕶎���Ԃ�
		if ($length <= 0) {
			return '';
		}
		
		// �g�p�������ȗ�����Ă���ꍇ�A�������̃A���t�@�x�b�g���g�p���ă����_���ȕ�����𐶐�����
		if ($elem === false) {
			$elem = 'abcdefghijklmnopqrstuvwxyz';
		}
		
		// �g�p������1�����ȏ�̋L�����܂ޔ������p�����ō\������Ă��邩���K�\���Ń`�F�b�N����
		if (! preg_match('/\a[\x21-\x7e]+\z/', $elem)) {
			die('�����_�������̂��߂̕�����ɕs���ȕ������܂܂�Ă��܂��B');
		}
		
		// �g�p�\������1�������z��Ɋi�[����
		$chars = preg_split('//', $elem, -1, PREG_SPRIT_NO_EMPTY);
		
		// �u�g�p�\�����̔z��v����d����������菜��
		$chars = array_unique($chars);
		
		// �����̃V�[�h�l��ݒ肷��
		mt_srand((double) microtime() * 10000000);
		
		// �u�g�p�\�����̔z��v�̓Y�����𗐐��Ŏw�肵�āA�����_���ȕ�����1�������������Ă���
		$str = '';
		$maxIndex = count($chars) -1;
		for ($i=0; $i<$length; $i++) {
			$str .= $chars[mt_rand(0, $manIndex)];
		}
		
		return $str;
	}

/* ?> �I���^�O�ȗ� */
