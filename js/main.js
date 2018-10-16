( function( $ ) {

    let width = $(window).width();
    let height = $(window).height();

    if(width > 1280 && height > 900) {
        $(function() {
            $.scrollify({
                section : ".section",
                interstitialSection : ".section",
                updateHash: false,
            });
        });
    }

} )( jQuery );
