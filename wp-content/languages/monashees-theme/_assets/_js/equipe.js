jQuery(document).ready(function(){
    $ = jQuery;
    $('.lista-pessoas .item').on('click', function(e) {
        var pessoaID = $(this).data('pessoa');
        $(e.target).append('<div class="ajax-load"></div>');
         $.ajax({
            url: site.ajaxurl,
            type: 'GET',
            data: {
                'action' : 'getPessoaEquipe',
                'pessoaID': pessoaID,
            },
            success: function( response ){
                 $(e.target).find('.ajax-load').fadeOut(300);
                 $('#show-pessoa-infos').html(response);
                 $('#detalhes-pessoa').modal('show');
            }
        });
    });
});