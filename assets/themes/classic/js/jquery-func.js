$(document).ready(function(){


  //=================================== Nav Responsive ===================================//
    $('#menu').tinyNav({
       active: 'selected'
    });
  
    
  //=================================== Subtmit Form  =================================//

	$('#form').submit(function(event) {  
	  event.preventDefault();  
	  var url = $(this).attr('action');  
	  var datos = $(this).serialize();  
	  $.get(url, datos, function(resultado) {  
	    $('#result').html(resultado);  
	  });  
	}); 

  //=================================== Slide Border  =================================//
    $('#dg-container').gallery();

 //=================================== Nav Superfish ===============================//
    jQuery(document).ready(function() {
		jQuery('ul.sf-menu').superfish();
	});

  //=================================== Last version of Fancybox V2  ===================================//
	
	$('.fancybox').fancybox();
	  jQuery("a[class*=fancybox]").fancybox({
		'overlayOpacity'	:	0.7,
		'overlayColor'		:	'#000000',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'easingIn'      	: 'easeOutBack',
		'easingOut'     	: 'easeInBack',
		'speedIn' 			: '700',
		'centerOnScroll'	: true,
		'titlePosition'     : 'over'
	});
		
         
});

$('.tool_tip').tooltip('hide')