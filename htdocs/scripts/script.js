// Zepto/jQuery fadeLoop plugin for fade slide show effects by ali.md

(function($){
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
				zIndexAct : -2
			},options);

			options.startIndex--;

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
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

	$('.background > div').fadeLoop({
		delay : 0,
		freez : 6000,
		duration : 3000,
		fadeFirstImage : false
	});

	$('#hidebtn').click(function(){
		$('.menu_wrap').toggleClass('close');
		return false;
	});

	//Contact Form
function validateText(str,len){
	return str.length >= len;
}

function validateEmail(str){
	var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

	return emailPattern.test(str);
}

$('#contact-form').submit(function(){
	var target, err = false;

	target = $('#name');
	if( validateText(target.val(),3) ){
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

	target = $('#txt');
	if( validateText(target.val(),10) ){
		target.removeClass('err').addClass('ok');
	}else{
		target.removeClass('ok').addClass('err');
		err = true;
	}

	if(!err){
		$('#ifrm').animate({
			height:'70px'
		},500);
	}

	return !err;
});


})(window.Zepto || window.jQuery);