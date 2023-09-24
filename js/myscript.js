$(document).ready(function(){
    $('.search-icon').on('click',function(){
      $('.search-box').addClass('search-show');
      $('.header-search i').toggle();
    });

    $('.close-icon').on('click',function(){
        $('.search-box').removeClass('search-show');
        $('.header-search i').toggle();
      });
});