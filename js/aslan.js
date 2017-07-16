var aslanCommon = (function(){
	var $menuBtn, $pageTop,	$menu;

	function _init()
	{
		$menuBtn =$('#navi-button .menu-trigger, #menuClose');
		$pageTop = $('#page-top');
		$pageTop.hide();
		$menu = $('#navi');
		$menu.css({'left' : '-80%' });


		// �{�^���N���b�N�ɂ�郁�j���[�W�J
		$menuBtn.click(menuToggle);

		// �X�N���[���g�b�v�̏o��
		$(window).scroll(pageTop);

		// �{�^���N���b�N�ɂ��g�b�v�y�[�W�ړ�
		$pageTop.click(moveTop);

	}

	var menuToggle = function() {
			var $menuBody = $('header'),
			menuHeight = '-80%';
			// body �� open �N���X��t�^����
			$menuBody.toggleClass('open');
			if($menuBody.hasClass('open')){
			// open �N���X�� body �ɂ��Ă����烁�j���[���X���C�h�C������
				$menu.animate({'left' : 0 }, 500, 'easeInOutQuint');
			
			} else {
			// open �N���X�� body �ɂ��Ă��Ȃ�������X���C�h�A�E�g����
				$menu.animate({'left' : menuHeight }, 500, 'easeInOutQuint');
			}
	}

	var pageTop = function() {
		//�X�N���[����400�ɒB������\��
		if($(this).scrollTop() > 400) {
			$pageTop.fadeIn();
			$('header').addClass('mini');
		} else {
			$pageTop.fadeOut();
			$('header').removeClass('mini');

		}
	}

	var moveTop = function() {
		$('body, html').animate({ scrollTop: 0 }, 1500, "easeInOutCubic");
		return false;
	}

	return {
		init : _init
	}

}());

$(function(){
	aslanCommon.init();
});