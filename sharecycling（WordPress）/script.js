// jQuery(function($) {

  jQuery('.sp-nemu').on('click', function(){
    jQuery('.sp-nemu-open').fadeIn(200);
    jQuery('.sp-nemu-open').css('opacity', '1');
    });

  jQuery('.sp-nemu-close').on('click', function(){
    jQuery('.sp-nemu-open').fadeOut(200);
    jQuery('.sp-nemu-open').css('opacity', '0');
  });

// });