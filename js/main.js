( function( $ ) {

    $('#modalContact').on('show.bs.modal', function (e) {
            $('body').addClass('slide-in');
        }).on('hide.bs.modal', function (e) {
            $('body').removeClass('slide-in');
        })
    ;

} )( jQuery );