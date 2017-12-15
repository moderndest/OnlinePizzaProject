$(document).ready(function() {
	$('.nav2 ul').hide();
	$('body').hide();
	$('body').fadeIn(1000);				
		});
			
$(document).ready(function() {									
	$('.nav1 a').on('click', function() {
	$('.nav2 ul').slideToggle(200);
	})
});		

 /*waypoints*/

$(function(){
function onScrollInit( items, trigger ) {
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
      
        osElement.css({
          '-webkit-animation-delay':  osAnimationDelay,
          '-moz-animation-delay':     osAnimationDelay,
          'animation-delay':          osAnimationDelay
        });

        var osTrigger = ( trigger ) ? trigger : osElement;
        
        osTrigger.waypoint(function() {
          osElement.addClass('animated').addClass(osAnimationClass);
          },{
              triggerOnce: true,
              offset: '70%'
        });
  });
}

 onScrollInit( $('.os-animation') );
 onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
});

function myFunction() {
  alert("You have successfully make your order at :" + new Date());
}

 /*add to cart*/

$(function added() {
$('.add-to-cartAnimate').on('click', function() {
  $(this).addClass('active');
  $(this).text("added");
});
})
