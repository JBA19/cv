$('.carousel-indicators span').on("click", function(){
  $('span.list-style-custom').removeClass('list-style-custom');
  $(this).addClass('list-style-custom');
});