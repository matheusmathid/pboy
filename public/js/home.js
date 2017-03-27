
	var productOffset = $('#product').offset().top;
	var options = 
	[ 
		{
			selector: '#imagem-camisinha-playboy',  offset: 0 , callback: function(el) {
		 		Materialize.fadeInImage($(el)); 
			} 
		},
		{
		    selector: '#list_novidades',
		    offset: 200,
		    callback: function(el) {
		        Materialize.showStaggeredList($(el));
		    }
		},
	]; 
	Materialize.scrollFire(options); 


$(document).ready(function(){
	
	var scroll_start = 0;
   	var startchange = $('#product');
   	var offset = startchange.offset();

    if (startchange.length){

	   $(document).scroll(function() { 
	      scroll_start = $(this).scrollTop();
	      if(scroll_start > offset.top-200) {

	          $("nav").removeClass("transparent");
	          $("nav").addClass("black");

	       } else {
	          $("nav").addClass("transparent");
	          $("nav").removeClass("black");
	       }
	   });

    }

    if($(this).scrollTop() > offset.top){
    	$("nav").removeClass("transparent");
        $("nav").addClass("black");
    }


    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);

        if($($anchor.attr('href')).offset().top > offset.top){
        	$("nav").removeClass("transparent");
	        $("nav").addClass("black");
		}

        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {     

            window.scrollTo(0,$($anchor.attr('href')).offset().top);// first value for left offset, second value for top offset
            $('.button-collapse').sideNav('hide');  
        }else{
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 'slow');
            event.preventDefault();
        }
        
    });
});