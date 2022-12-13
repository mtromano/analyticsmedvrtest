$(window).scroll(function(e){ 
  var $el = $('.container-title'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 100 && !isPositionFixed){ 
    $el.css({'position': 'fixed', 'top': '0px'}); 
  }
  if ($(this).scrollTop() < 100 && isPositionFixed){
    $el.css({'position': 'static', 'top': '0px'}); 
  } 
});
