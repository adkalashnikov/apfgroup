( function( $ ) {

    let width = $(document).width();

    if(width > 1199) {
        $(function() {
            $.scrollify({
                section : ".section",
                updateHash: false,
            });
        });
    }

} )( jQuery );
