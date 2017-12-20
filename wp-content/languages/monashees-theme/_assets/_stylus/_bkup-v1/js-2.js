jQuery(document).ready(function(){
	$ = jQuery;

	//$('.hover-effect').tilt();

	$('.menu-empresas').onePageNav({
		currentClass: 'current',
	});

	$('.menu-empresas').onePageNav({
		currentClass: 'current',
	});



	var texto = $("#texto-fixo-scroll").offset().top - ($(window).height() / 2) + 50;

	function videoActions(){
		// tratamento videos scroll
		var num = 500;
		if($(window).scrollTop() > num) {
			var num = 500;
			$('.video-1').fadeOut(300);
			$('.video-2').fadeIn(300);
			$('.section-apresentacao').fadeOut(300);
		}else{
			var num = 500;
			$('.section-apresentacao').fadeIn(300);
			$('.video-1').fadeIn(300);
			$('.video-2').fadeIn(300);
		}
	}

	function textoActions(){
		if ($(window).scrollTop() > texto ) {
			$("#texto-fixo-scroll").addClass('texto-fixed');
		}else{
			$("#texto-fixo-scroll").removeClass('texto-fixed');
		}
		if ($(window).scrollTop() > texto + 500) {
			$("#texto-fixo-scroll").addClass('color-white');
		}else{
			$("#texto-fixo-scroll").removeClass('color-white');
		}
		if ($(window).scrollTop() > texto + 620) {
			$("#texto-fixo-scroll").removeClass("texto-fixed").addClass('texto-corret');
		}else{
			$("#texto-fixo-scroll").removeClass("texto-corret");
		}
	}

	$(window).bind('scroll', function() {
		videoActions();
		textoActions();
	});
	videoActions();
	textoActions();



	function scrollToSection(elID){
		var aTag = $("#"+ elID);
		$('html,body').animate({scrollTop: aTag.offset().top},'slow');
	};


	scrollToSection("inicio");



	var firstEmpresa = $(".first-empresa").offset().top;
	
	function menuEmpresas(){
		if ($(window).scrollTop() >= firstEmpresa ) {
			$('.menu-empresas').fadeIn();
		}else{
			$('.menu-empresas').fadeOut();
		}
	}

	menuEmpresas();

	$(window).bind('scroll', function() {
		menuEmpresas();
	});


$(function () { // wait for document ready
		// init
		var controller = new ScrollMagic.Controller({
			globalSceneOptions: {
				triggerHook: 'onLeave'
			}
		});

		// get all slides
		var slides = document.querySelectorAll("section.section-empresa");

		// create scene for every slide
		for (var i=0; i<slides.length; i++) {
			new ScrollMagic.Scene({
					triggerElement: slides[i],
					offset: 0,
				})
				.setPin(slides[i])
				.addTo(controller);
		}
	});
	




$(function(){
    
    var $window = $(window);        //Window object
    
    var scrollTime = 0.7;           //Scroll time
    var scrollDistance = 100;       //Distance. Use smaller value for shorter scroll and greater value for longer scroll
        
    $window.on("mousewheel DOMMouseScroll", function(event){
        
        event.preventDefault(); 
                                        
        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);
            
        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,   //For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
                autoKill: true,
                overwrite: 5                            
            });
                    
    });
    
});




});