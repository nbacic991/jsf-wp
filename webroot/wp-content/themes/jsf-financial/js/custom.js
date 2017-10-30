( function( $ ) {

    $(document).ready(function(){
        $(".menu-toggle").click(function(){
            $(".main-navigation, .site-header").toggleClass('open');
            preventDefault();
        });
    });


} )( jQuery );

//Program created by Ryan Tarson Updated 6.15.16, under this code is my pure JS Version
jQuery(document).ready(function($) {
    var wHeight = window.innerHeight;
    //search bar middle alignment
    $('#mk-fullscreen-searchform').css('top', wHeight / 2);
    //reform search bar
    jQuery(window).resize(function() {
        wHeight = window.innerHeight;
        $('#mk-fullscreen-searchform').css('top', wHeight / 2);
    });
    // Search
    $('#search-button').click(function() {
        console.log("Open Search, Search Centered");
        $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
    });
    $("a.mk-fullscreen-close").click(function() {
        console.log("Closed Search");
        $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
    });
});