jQuery( '#contactFile' ).change( function() {
  var file = this.files[0];
  jQuery(this).parents('label').nextAll('.contact__file--name').text(file.name);
});


document.addEventListener( 'wpcf7mailsent', function( event ) {
    // 対象のURLを入力
    location = '';
}, false );