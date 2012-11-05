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
		freez : 3000,
		duration : 1300,
		startIndex : 0
	});

	$('#hidebtn').click(function(){
		$('.menu_wrap').toggleClass('close');
		return false;
	});

})(window.Zepto || window.jQuery);
