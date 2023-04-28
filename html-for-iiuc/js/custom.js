// jquery ready start
$(document).ready(function() {
	
	            $('#owl-slider').owlCarousel({
                loop:true,
                margin:10,
                // animateOut: 'slideOutDown',
                // animateIn: 'flipInX',
                autoplay:true,
                nav:false,
                responsive:{
                    0:{
                      items:1
                    },
                    600:{
                      items:1
                    },
                    1000:{
                      items:1
                    }
                }
            });



	       $('#owl-testimonial').owlCarousel({
                loop:true,
                margin:15,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                autoplay:true,
                nav:true,
                responsive:{
                    0:{
                      items:1
                    },
                    600:{
                      items:3
                    },
                    1000:{
                      items:3
                    }
                }
            });

	
	
	
	
}); // jquery end
