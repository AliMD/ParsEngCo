
$(function(){
	
	var open = $('div#anim'),
		a = $('a#hideupdn'),
		mode = false;

	a.click(function(){
		if(!mode){
			open.removeClass('open');
			open.addClass('close');
			mode = true;
		}
		else if(mode){
			open.removeClass('close');
			open.addClass('open');
			mode = false;
		}
	});

});