var aslanCommon = (function(){
	var $menuBtn, $pageTop,	$menu;

	function _init()
	{
		$menuBtn =$('#navi-button .menu-trigger, #menuClose');
		$pageTop = $('#page-top');
		$pageTop.hide();
		$menu = $('#navi');
		$menu.css({'left' : '-80%' });


		// ボタンクリックによるメニュー展開
		$menuBtn.click(menuToggle);

		// スクロールトップの出現
		$(window).scroll(pageTop);

		// ボタンクリックによるトップページ移動
		$pageTop.click(moveTop);

	}

	var menuToggle = function() {
			var $menuBody = $('header'),
			menuHeight = '-80%';
			// body に open クラスを付与する
			$menuBody.toggleClass('open');
			if($menuBody.hasClass('open')){
			// open クラスが body についていたらメニューをスライドインする
				$menu.animate({'left' : 0 }, 500, 'easeInOutQuint');
			
			} else {
			// open クラスが body についていなかったらスライドアウトする
				$menu.animate({'left' : menuHeight }, 500, 'easeInOutQuint');
			}
	}

	var pageTop = function() {
		//スクロールが400に達したら表示
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