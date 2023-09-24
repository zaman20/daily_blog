$(document).ready(function(){
    $('.search-icon').on('click',function(){
      $('.search-box').addClass('search-show');
      $('.header-search i').toggle();
    });

    $('.close-icon').on('click',function(){
        $('.search-box').removeClass('search-show');
        $('.header-search i').toggle();
      });

  $('.mobile-bar').on('click',function(){
    $('.mobile-menu').addClass('mobile-menu-show');
  });
  $('.menu-close').on('click',function(){
    $('.mobile-menu').removeClass('mobile-menu-show');
  });
});