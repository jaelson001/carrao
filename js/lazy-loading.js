(function($, win) {
	$.fn.inViewport = function(callback) {
	    return this.each(function(i,el){
	    	function visPx(){
	        	var H = $(this).height(),
	    		r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
	    		return callback.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));  
	    	}
	    	visPx();
	    	$(win).on("resize scroll", visPx);
	    });
	};
}(jQuery, window));

$(".lazy").inViewport(function(isIn){
	isIn ? $(this).addClass('visible') : $(this).removeClass('visible');
});