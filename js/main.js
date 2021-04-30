// フェードインとスクロールの連携
$(function() {
	$('.side-scroll-content').mycus_hScroll(60); // カッコ内の数字でスクロール量を調節できます。
});

// フェードインアニメーション
$(window).scroll(function(){
	$('.fadein').each(function(){
		var elemPos = $(this).offset().top,
		scroll = $(window).scrollTop(),
		windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight + 100){
			$(this).addClass('scrollin');
		}
	});
});

//　透明＆不透明化処理
$(window).scroll(function(){
	if ($(window).scrollTop() <= 100) {
		$('.nav-wrap').addClass('transparent');
	} else {
		$('.nav-wrap').removeClass('transparent');
	}
});