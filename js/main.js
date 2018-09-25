( function( $ ) {

    let width = $(document).width();

    if(width > 1199) {
        $(function() {
            $.scrollify({
                section : ".section",
                interstitialSection : ".section",
                updateHash: false,
            });
        });
    }

} )( jQuery );
