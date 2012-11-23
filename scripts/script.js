
(function($,undefined){
	// Zepto/jQuery fadeLoop plugin for fade slide show effects by ali.md
	
	var	ease = !!window.Zepto ? 'ease-out' : 'swing';
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				freez : 1500,
				delay : 10,
				startIndex : 0,
				fadeFirstImage : true,
				zIndex : -2,
				zIndexAct : -2,
				returnFocus:false
			},options);

			options.startIndex--;

			var nextPic,
				pics	=this,
				indx	=options.startIndex,
				plen	=this.length,
				fadeIn	={opacity:1},
				fadeOut	={opacity:0},
				zIndexChange = options.zIndex != options.zIndexAct

			var nextPic = function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease,function(){
					zIndexChange && $(this).css({'z-index':options.zIndex});

				});
				indx=indx<plen-1?indx+1:0;
				setTimeout(function(){
					pics.eq(indx).css(zIndexChange?{'z-index':options.zIndexAct}:{}).animate(fadeIn,options.duration,ease,function(){
						setTimeout(nextPic,options.freez);
					});
				},options.delay+1);
			};

			pics.css(fadeOut).css({'z-index':options.zIndex});

			if(!options.fadeFirstImage){
				pics.eq(0).css(fadeIn).css({'z-index':options.zIndexAct});
				indx++;
				setTimeout(nextPic,options.freez);
			}else{
				nextPic();
			}
		}
	});
})(window.Zepto || window.jQuery);


// Website js
(function($,undefined){

	// Background images animation
	$('.background > div').fadeLoop({
		delay : 0,
		freez : 6000,
		duration : 3000,
		fadeFirstImage : false
	});

	// Menu hide/show effect
	$('#hidebtn').click(function(){
		$('.menu_wrap').toggleClass('close');
		return false;
	});

	//Contact Form
	var	emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i,
		validateText = function (str,len){
			return str.length >= len;
		},
		validateEmail = function validateEmail(str){
			return emailPattern.test(str);
		}

	$('#contact-form').submit(function(){
		var target=$('#name'), err = false;

		target = $('#name');
		if( validateText(target.val(),3) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#subject');
		if( validateText(target.val(),5) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#mail');
		if( validateEmail(target.val()) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#msg');
		if( validateText(target.val(),10) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		if(!err){
			$('#ifrm').animate({
				height:'70px'
			},700);
		}

		return !err;
	});

	// Colorbox (jQuery only)
	(function($){
		$('.darkbox').colorbox({
			rel			:'darkbox',
			speed		:500,
			opacity		:0.7,
			scrolling	:false,
			maxHeight	:window.innerHeight-50,
			maxWidth	:window.innerWidth-50,
			returnFocus	:false
		});
	})(window.jQuery);

})(window.Zepto || window.jQuery);
