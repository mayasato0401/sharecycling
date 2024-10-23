$(function() {

  $('.sp-nemu').on('click', function(){
      $('.sp-nemu-open').fadeIn(200);
      $('.sp-nemu-open').css('opacity', '1');
  });

  $('.sp-nemu-close').on('click', function(){
    $('.sp-nemu-open').fadeOut(200);
    $('.sp-nemu-open').css('opacity', '0');
  });

  $('.price, .cyclestation').on('inview', function(event, isInView){
    if(isInView){
      $('.price, .cyclestation').stop().addClass("show");
    }
  });

});