( function( $ ) {

    $(document).ready(function(){
        $(".menu-toggle").click(function(){
            console.log('pocetak');
            $(".menu").slideToggle(300);
            console.log('kraj');
            preventDefault();
        });
    });

} )( jQuery );