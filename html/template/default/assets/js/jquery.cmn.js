$(window).on('load', function() {
	_clickDrop();
	_setViewmore();
	_animation();
	if ($(window).width() < 768) {
		_setSpMenu();
	}
});
$(window).on('scroll', function() {
	_animation();
	if ($(window).width() < 768) {
		_fixedHeader();
	}
});
$(window).on('resize', function() {
	//_setViewmore();
});


var ifHide = true;
$(window).scroll(function(){
	if($(window).scrollTop() < 300 && ifHide==false){
		$("#pagetop").animate({bottom:-50});
		ifHide = true;
	} else if ($(window).scrollTop() > 300 && ifHide==true){
		$("#pagetop").animate({bottom:0});
		ifHide = false;
	}
});



/* レスポンシブナビ */
function _setSpMenu(){
	$(".menuBtn").click(function() {
		if($(".naviBox").hasClass("active")) {
			$(".naviBox").removeClass("active");
			$(".navi_overlay").removeClass("menu-open");
    } else {
			$(".naviBox").addClass("active");
			$(".navi_overlay").addClass("menu-open");
    }
	});
	$(".navi_overlay").click(function() {
		$(".naviBox").removeClass("active");
		$(".navi_overlay").removeClass("menu-open");
	});
	$(".foot_cat").click(function() {
		$(this).nextAll('li').slideToggle();
	});
	$(".header-nav-item").click(function() {
		$(this).next('div').toggleClass('menu-open2');
	});
}


function _fixedHeader(){
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 50) {
      $('#header').addClass('fixed');
    } else {
      $('#header').removeClass('fixed');
    }
  });
}


function _animation(){
	$(".animation").each(function(){
	  var position = $(this).offset().top;
	  var scroll = $(window).scrollTop();
	  var windowHeight = $(window).height();
	  if (scroll > position - windowHeight + windowHeight/4){
	    $(this).addClass('moved');
	  }
	});
}

function _clickDrop() {
	$(".faqBox dl dd").hide();
	$(".faqBox dl dt").click(function(){
		$("+dd",this).slideUp();
		$(">i",this).removeClass('dtop');
		if($("+dd",this).css("display")=="none"){
			$("+dd",this).slideDown();
			$(">i",this).addClass('dtop');
		}
	});
}

function _setViewmore(){
	var ratio = 2 / 3;
	wW = $(window).width();
	wH = $(window).height();

	// STYLE 画像クリック表示
	if(wW > 768) {
		var Num = 12;
		var limited = 12;
		gtNum = Num-1;
	} else {
		var Num = 6;
		var limited = 6;
		gtNum = Num-1;
	}
	var listContents = $(".brand_list li").length;
	$(".brand_list").each(function(){
		//最初に表示させるアイテムの数
		gtNum = Num-1;

	  //最初はmoreボタン表示にし、
	  $(this).find('#more_btn').show();
	  $(this).find('#close_btn').hide();
	  //10行目まで表示
	  $(this).find("li:not(:lt("+Num+"))").hide();

	  //moreボタンがクリックされた時
	  $('#more_btn').click(function(){

			//Numに+limitedずつしていく = 3行ずつ追加する
			Num += limited;
	    $(this).parent().find("li:lt("+Num+")").slideDown();
	    //liの個数よりNumが多い時、
	    if(listContents <= Num){
				Num = limited;
				gtNum = Num-1;
				$('#more_btn').hide();
				$('#close_btn').show();

	      //「閉じる」がクリックされたら、
	      $('#close_btn').click(function(){
	        $(this).parent().find("li:gt("+gtNum+")").slideUp();//11行目以降は非表示にし、
	        $(this).hide();//閉じるボタンを非表示
	        $('#more_btn').show();//moreボタン表示に
	      });
	    }
		});
	});

}


$(window).on('load', function(){
  hideLoader();
  setTopSlider();
});

function hideLoader() {
  $('#loader').css({
    'opacity' : '0',
    'z-index' : '0'
  });
}

function setTopSlider() {
  var bxSlider;
  bxSlider = $("#mainimage_in").bxSlider({
    auto: true,
    pause: 5000,
    speed: 1000,
    pager: true,
    controls: true,
    infiniteLoop: true,
    slideMargin: 0,
  });
}
