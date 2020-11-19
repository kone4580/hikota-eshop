$(window).on('load', function() {
	_pageScroll();
});

/* ページ内リンク */
function _pageScroll(){
	$('a[href^="#"]').click(function() {
		if ($(window).width() < 756) {
			var headerHeight = 80;
		} else {
			var headerHeight = 80;
		}
    var speed = 300;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top-headerHeight;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
		if ($(window).width() < 756) {
			$("#navi_ul").slideUp();
			$("#navi_ul").removeClass("active");
		}
    return false;
	});
}
