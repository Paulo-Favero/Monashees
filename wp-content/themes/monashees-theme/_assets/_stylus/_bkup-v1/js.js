/*
	$('#site').fullpage({
		anchors: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'],
		navigation: true,
		navigationPosition: 'right',
		scrollBar: false,
		//fitToSection: false,
		//autoScrolling: false,
		onLeave: function(index, nextIndex, direction){
			$('.white-text .big-text').toggleClass('animated fadeInLeft', index == 1);
			$('.video-texto-2 .texto-1').toggleClass('animated fadeInLeft', index == 2);
			$('.video-texto-2 .texto-2').toggleClass('animated fadeInUpBig', index == 2);
			$('.white-2 .big-text').toggleClass('animated fadeInDownBig', index == 3);
	
			if(nextIndex > 2){
				$('.video-1').fadeOut();
			}else{
				$('.video-1').fadeIn();
			}
		}
	});

	*/