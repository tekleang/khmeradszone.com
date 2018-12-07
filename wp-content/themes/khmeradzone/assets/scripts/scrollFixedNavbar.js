$(document).ready(function(){
  function styleScrollMenu(scrollTop){
    var navTop;
    if ($('#header').find('div').hasClass('nav-top')) {
      navTop = $('#header .nav-top').outerHeight()-30;
    }else {
      navTop = 0;
    }
    if (scrollTop > navTop) {
      $('#header .container-fluid-menu').addClass('shrink-container-fluid-menu');
      $('#header .nav-bottom .box-logo').addClass('shrink-box-logo');
      $('#header .nav-bottom .logo').addClass('shrink-logo');
    }else {
      $('#header .container-fluid-menu').removeClass('shrink-container-fluid-menu');
      $('#header .nav-bottom .box-logo').removeClass('shrink-box-logo');
      $('#header .nav-bottom .logo').removeClass('shrink-logo');
    }
  }
  if ($(window).scrollTop()) {
    var scrollTop = $(window).scrollTop();
    styleScrollMenu(scrollTop);
  }
  $(window).scroll(function(){
    var scrollTop = $(this).scrollTop();
    styleScrollMenu(scrollTop);
  });
});