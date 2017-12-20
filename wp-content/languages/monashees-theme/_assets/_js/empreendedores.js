
jQuery(document).ready(function(){
    $ = jQuery;


    
    $('#select-segmentos').on('change', function(){
		var selector = $(this).val();
		galeriaGrid2.isotope({ filter: selector });
		return false;
	});

	 $('#select-pais').on('change', function(){
		var selector = $(this).val();
		galeriaGrid2.isotope({ filter: selector });
		return false;
	});


    // Portfolio Grid
	var galeriaGrid2 = $('.grid-empresas .itens').isotope({
		itemSelector: '.item',
		layoutMode: 'packery',
	});

	galeriaGrid2.imagesLoaded().progress( function() {
		galeriaGrid2.isotope('layout');
	});


    $('.btn-open-empresa').on('click', function(e) {
        e.preventDefault();
        var empresaID = $(this).data('empresa');
        var grid = $(this).data('grid');
        $(e.target).closest('.btn-open-empresa').append('<div class="ajax-load"></div>');
         $.ajax({
            url: site.ajaxurl,
            type: 'GET',
            data: {
                'action' : 'detalhesEmpresa',
                'empresaID': empresaID,
                'grid': grid,
            },
            success: function( response ){
                $(e.target).closest('.btn-open-empresa').find('.ajax-load').fadeOut(300).remove();
                $('#empresa-detalhes').html(response);
                $('#detalhes-empresa').modal('show');
            }
        });
    });




});