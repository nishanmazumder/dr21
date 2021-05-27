

//TNC
(function(){
	var d = document,
	accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
	setAria,
	setAccordionAria,
	switchAccordion,
  	touchSupported = ('ontouchstart' in window),
 	 pointerSupported = ('pointerdown' in window);
  
  	skipClickDelay = function(e){
    e.preventDefault();
    e.target.click();
  	}

	setAriaAttr = function(el, ariaType, newProperty){
	el.setAttribute(ariaType, newProperty);
	};
	
	setAccordionAria = function(el1, el2, expanded){
		switch(expanded) {
      	case "true":
      	setAriaAttr(el1, 'aria-expanded', 'true');
      	setAriaAttr(el2, 'aria-hidden', 'false');
      	break;
      	case "false":
      	setAriaAttr(el1, 'aria-expanded', 'false');
      	setAriaAttr(el2, 'aria-hidden', 'true');
      	break;
      	default:
		break;
		}
	};

	switchAccordion = function(e) {
	e.preventDefault();
	var thisAnswer = e.target.parentNode.nextElementSibling;
	var thisQuestion = e.target;
	if(thisAnswer.classList.contains('is-collapsed')) {
		setAccordionAria(thisQuestion, thisAnswer, 'true');} 
	else {setAccordionAria(thisQuestion, thisAnswer, 'false');}
  	thisQuestion.classList.toggle('is-collapsed');
  	thisQuestion.classList.toggle('is-expanded');
		thisAnswer.classList.toggle('is-collapsed');
		thisAnswer.classList.toggle('is-expanded');
 	
  	thisAnswer.classList.toggle('animateIn');
	};
	
	for (var i=0,len=accordionToggles.length; i<len; i++) {
	if(touchSupported) { accordionToggles[i].addEventListener('touchstart', skipClickDelay, false); }
    if(pointerSupported){
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();


//Initiat WOW JS
	new WOW().init();


//MOBILE filter
	$(window).load(function(){

		$('.main-slider').addClass('animate-in');
		$('.preloader').remove();
		//End Preloader

		if( $('.masonery_area').length ) {
			$('.masonery_area').masonry();//Masonry
		}

		var $mobile_selectors = $('.mobile-filter >li>a');
		
		if($mobile_selectors.length) {
			
			var $mobile = $('.mobile-items');
			$mobile.isotope({
				itemSelector : '.mobile-item',
				layoutMode : 'fitRows'
			});
			
			$mobile_selectors.on('click', function(){
				$mobile_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$mobile.isotope({ filter: selector });
				return false;
			});
		}
});


//DROPDOWN
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});


//DEPOSIT TAB

