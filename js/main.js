//横にスクロールする要素をマウスホイールで動かせるようにするJavaScript
$.fn.mycus_hScroll = function (amount) {
	amount = amount || 120;
	$(this).bind("DOMMouseScroll mousewheel", function (event) {
		var oEvent = event.originalEvent, 
		direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta, 
		position = $(this).scrollLeft();
		position += direction > 0 ? -amount : amount;
		$(this).scrollLeft(position);
		event.preventDefault();
	})
};

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

// 揺らすアニメーション
// $(function(){
// 	$('.angle').yurayura({
// 		'move' : 5,
// 		'delay' : 100,
// 		'duration' : 1000
// 	});
// });