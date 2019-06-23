jQuery( document ).ready( () => {

  jQuery( document ).scroll( () => {
    if( jQuery( document ).width() >= 1024 )
    {
      jQuery( '.back-to-top' ).fadeIn( 'slow' );
    }  
  });

});
