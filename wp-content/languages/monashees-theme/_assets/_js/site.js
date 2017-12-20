jQuery(document).ready(function(){
	$ = jQuery;

	//$('.hover-effect').tilt();

	$('.menu-empresas').onePageNav({
		currentClass: 'current',
	});

	$('.btn-menu-site').on('click', function(){
		$('.menu-site').fadeIn(300);
		
	})
	$('.btn-close-menu').on('click', function(){
		$('.menu-site').fadeOut(300);
		scrollToSection("#inicio");
		
	})


	function rollar(){
		$(".section-video-texto").addClass('on');
		clearInterval(rol);
	}

	var rol = setInterval(rollar, 1000);


	function rollar2(){
		$(".mobile-texto-1").addClass('on');
		clearInterval(rol);
	}

	var rol2 = setInterval(rollar2, 1000);


	/******************************************************************
	* Controle dos vídeos
	******************************************************************/

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

	videoActions();
	textoActions();

	/******************************************************************
	* controle do texto paralax
	******************************************************************/

	if ($("#texto-fixo-scroll").length > 0) {
		var texto = $("#texto-fixo-scroll").offset().top - ($(window).height() / 2) + 180;
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


	if ($("#texto-fixo-scroll-mobile").length > 0) {
		var texto2 = $("#texto-fixo-scroll-mobile").offset().top - ($(window).height() / 2) + 150;
	}

	function textoActionsMobile(){
		if ($(window).scrollTop() > texto2 ) {
			$("#texto-fixo-scroll-mobile").addClass('texto-fixed-mobile');
		}else{
			$("#texto-fixo-scroll-mobile").removeClass('texto-fixed-mobile');
		}
		if ($(window).scrollTop() > texto2 + 300) {
			$("#texto-fixo-scroll-mobile").addClass('color-white');
		}else{
			$("#texto-fixo-scroll-mobile").removeClass('color-white');
		}
		if ($(window).scrollTop() > texto2 + 310) {
			$("#texto-fixo-scroll-mobile").removeClass("texto-fixed-mobile").addClass('texto-corret-mobile');
		}else{
			$("#texto-fixo-scroll-mobile").removeClass("texto-corret-mobile");
		}
	}

	$(window).bind('scroll', function() {
		textoActionsMobile();
	});


	/******************************************************************
	* Link section scroll
	******************************************************************/

	function scrollToSection(elID, tempo){
		var aTag = $(elID);
		$('html,body').animate({scrollTop: aTag.offset().top},tempo);
	};

	scrollToSection("#inicio", 500);

	
	/*

	$('html,body').delay(1000).animate({scrollTop: $('#inicio').offset().top + 300},500, function(){
		scrollToSection("#inicio", 500);
	});
	*/


	/******************************************************************
	* Menu de empresas
	******************************************************************/


	
	function menuEmpresas(){
		if ($(".first-empresa").length > 0) {
			var firstEmpresa = $(".first-empresa").offset().top;
			var textoFinal = $(".section-final").offset().top;
			var topo = $(window).scrollTop();
			if (topo >= firstEmpresa && topo < textoFinal) {
				$('.menu-empresas').fadeIn();
			}else{
				$('.menu-empresas').fadeOut();
			}
		}
	}

	menuEmpresas();

	$(window).bind('scroll', function() {
		menuEmpresas();
	});

	
	/******************************************************************
	* Efeito de sobreposição ao rolar página - EMPRESAS
	******************************************************************/

	// init
	var controller = new ScrollMagic.Controller({
		globalSceneOptions: {
			triggerHook: 'onLeave',
		},

	});

	controller.scrollTo(function (newpos) {
		TweenMax.to(window, 0.8, {scrollTo: {y: newpos}});
	});

	// get all slides
	var slides = $("section.section-empresa");

	// create scene for every slide
	for (var i=0; i<slides.length; i++) {
		var id = $(slides[i]).attr("id");
		new ScrollMagic.Scene({
				triggerElement: slides[i],
				offset: 0,
			})
			.setPin(slides[i])
			.addTo(controller)
	}

	/******************************************************************
	* CONTROLE DO SCROLL
	******************************************************************/


	var smootscroll = true;

	var altura = $(window).height();
    var $window = $('.smooth-scroll'); 
    

    
    

    if ($(".section-texto-first").length > 0) {
		var inicio = $(".section-texto-first").offset().top;
	}

	var scrollTime = 0.5;
    var scrollDistance = 100;

    $window.on("mousewheel DOMMouseScroll", function(event){
    	if (smootscroll === true) {

	    	if ($(window).scrollTop() >= inicio ) {
			 	var scrollTime = 1;
	    		var scrollDistance = altura/2 - 200;
	    		
			}else{
				var scrollTime = 0.5;
	   			var scrollDistance = 100;

			}
	        event.preventDefault(); 
	        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
	        var scrollTop = $window.scrollTop();
	        var finalScroll = scrollTop - parseInt(delta*scrollDistance);
	        TweenMax.to($window, scrollTime, {
	       		scrollTo : { y: finalScroll, autoKill:true },
	            ease: Power1.easeOut,
	            overwrite: 5                         
	        });
        }
    });




    var $window2 = $('.modal'); 

    $window2.on("mousewheel DOMMouseScroll", function(event){
        event.preventDefault(); 
        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window2.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*80);
        TweenMax.to($window2, 0.6, {
       		scrollTo : { y: finalScroll, autoKill:true },
            ease: Power1.easeOut,
            autoKill: true,
            overwrite: 5                         
        });
    });


    var $window3 = $('.grid-empresas'); 

    $window3.on("mousewheel DOMMouseScroll", function(event){
        event.preventDefault(); 
        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window3.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*80);
        TweenMax.to($window3, 0.6, {
       		scrollTo : { y: finalScroll, autoKill:true },
            ease: Power1.easeOut,
            autoKill: true,
            overwrite: 5                         
        });
    });

    /******************************************************************
	* Altura dos triangulos
	******************************************************************/

    function resizeTriangulo(){
    	var altura = $(window).height();
		var triangulo = 2000;
		var trH = ((triangulo - altura) / 2);
		$('.topo-design-black').css('height', trH+"px");
		$('.topo-design-white').css('height', trH+"px");
    }

   	resizeTriangulo();

    $(window).on('resize', function(){
      resizeTriangulo();
     // location.reload();
	});

    /******************************************************************
	* Grid
	******************************************************************/

	$('.box-busca input').on('focus', function(){
		$(this).closest('.box-busca').addClass('on');
	})

	

	/******************************************************************
	* Busca
	******************************************************************/
	/*

	$('.grid-empresas .itens .item').each(function(i, el) {
		setTimeout(function() {
			$(el).addClass('animated fadeInDown');
		}, i * 200);
	});

	*/

	var grid = false;

	$('.open-grid-empresas').on('click', function(){
		grid = true;
		$('.grid-empresas').addClass('on');
		$('body').addClass('no-overflow');
		$('.menu-site').fadeOut(300);

		var galeriaGrid2 = $('.grid-empresas .itens').isotope({
			itemSelector: '.item',
			layoutMode: 'packery',
		});
	})


	$('.grid-empresas #btn-fechar-empresas').on('click', function(){
		$('.grid-empresas').removeClass('on');
		$('body').removeClass('no-overflow');
		grid = false;
	})

    $('.btn-open-grid-empresas').on('click', function(){
		grid = true;
		$('.grid-empresas').addClass('on');
		$('body').addClass('no-overflow');
		var galeriaGrid2 = $('.grid-empresas .itens').isotope({
			itemSelector: '.item',
			layoutMode: 'packery',
		});
	})


	$('[data-scroll=no]').on('click', function(){
		$('body').addClass('no-overflow');
		smootscroll = false;
	})

	$('[data-dismiss=modal]').on('click', function(){
		if (grid === false) {
			$('body').removeClass('no-overflow');
		}
		smootscroll = true;
	})

	$('.modal').on('hidden.bs.modal', function () {
		if (grid === false) {
			$('body').removeClass('no-overflow');
		}
		smootscroll = true;
	})
	


    /******************************************************************
	* PESSOAS EQUIPE
	******************************************************************/

	var pessoasEquipe = jQuery('.lista-funcionarios .item').isotope({
		itemSelector: '.item',
		layoutMode: 'packery',
	});

	pessoasEquipe.imagesLoaded(
	function() {
		pessoasEquipe.isotope('layout');
	});


	

});