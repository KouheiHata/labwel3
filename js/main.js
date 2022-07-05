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

// 透明＆不透明化処理
$(window).scroll(function(){
	if( $('.header-img').hasClass('small-header') ){
		if ($(window).scrollTop() <= 10) {
			$('.nav-wrap').addClass('transparent');
		} else {
			$('.nav-wrap').removeClass('transparent');
		}
	} else {
		if ($(window).scrollTop() <= 100) {
			$('.nav-wrap').addClass('transparent');
		} else {
			$('.nav-wrap').removeClass('transparent');
		}
	}
});

// ハンバーガーメニュー開閉＆クラス追加
const ham = document.getElementById('ham');
const ham_nav = document.getElementById('ham_nav');
ham.addEventListener('click', function() {
	ham.classList.toggle('clicked');
	ham_nav.classList.toggle('clicked');
});

$(function(){ 
    var pos;
    $(".ham").on('click',function(){    
        if( $('body').hasClass('fixed-body') ) {
            $("body").removeClass("fixed-body").css({'top': 0});
            window.scrollTo(0, pos);
        } else {
            pos = $(window).scrollTop();
            $("body").addClass("fixed-body").css({'top': -pos});
        }
});    
});

// スマホ=>PCレイアウト切り替え時スクロール禁止を解除
$(window).resize(function(){
	if( !window.matchMedia("(max-width: 990.98px)").matches ){
		if( $('body').hasClass('fixed-body') ) {
			$("body").removeClass("fixed-body").css({'top': 0});
			$("#ham").removeClass('clicked');
			$("#ham_nav").removeClass('clicked');
		}
	}
});