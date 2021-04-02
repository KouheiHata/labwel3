// 横スクロール用
$(function(){
    // マウスホイールで横スクロール処理
    var moving;
    var speed = 30;
    $('.side-scroll-content').mousewheel(function(event, mov) {
        // スクロール後の位置の算出
        var moving = $(this).scrollLeft() - mov * speed;
        $(this).scrollLeft(moving);
        return false;
    });
});