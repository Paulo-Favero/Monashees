jQuery(document).ready(function(){
    $ = jQuery;
    $('#btn-busca').on('click', function(e) {
       
      
        var s = $('#campo-busca').val();
        $(e.target).append('<div class="ajax-load"></div>');
         $.ajax({
            url: site.ajaxurl,
            type: 'GET',
            data: {
                'action' : 'buscaEmpresas',
                's': s,
            },
            success: function( response ){
                $(e.target).find('.ajax-load').fadeOut(300);
                $('#lista-itens-empresas').html(response);
                $('#btn-busca').hide();
                $('#btn-remove-busca').show();

                var galeriaGrid2 = $('.grid-empresas .itens').isotope({
                    itemSelector: '.item',
                    layoutMode: 'packery',
                });

                galeriaGrid2.imagesLoaded().progress( function() {
                    galeriaGrid2.isotope('layout');
                });

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
            }
        });
    });


    $('#btn-remove-busca').on('click', function(e) {
        
        var s = ''
        $(e.target).append('<div class="ajax-load"></div>');
         $.ajax({
            url: site.ajaxurl,
            type: 'GET',
            data: {
                'action' : 'buscaEmpresas',
                's': s,
            },
            success: function( response ){
                $(e.target).find('.ajax-load').fadeOut(300);
                $('#lista-itens-empresas').html(response);
                $('#btn-remove-busca').hide();
                $('#btn-busca').show();
                $('#campo-busca').val('');
                $('.box-busca').removeClass('on');

                var galeriaGrid2 = $('.grid-empresas .itens').isotope({
                    itemSelector: '.item',
                    layoutMode: 'packery',
                });

                galeriaGrid2.imagesLoaded().progress( function() {
                    galeriaGrid2.isotope('layout');
                });

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
            }
        });
    });
});