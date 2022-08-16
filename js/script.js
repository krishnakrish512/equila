$(document).ready(function() {
    wow = new WOW({}).init();

    
  // float image scroll animation
  $(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    $('.company-name').css({
    'transform' : 'translate(0px, -'+ wScroll /20 +'%)'
    });
    $('.animated .float-logo').css({
        'transform' : 'translate(-50%, -'+ wScroll /30 +'%)'
        });
    });


    $('.close-div span').click(function () {
        $('#quote-form').animate({
            right: "-700px"
        }, 500);

    });

    if ($(window).width() < 1200) {
        $(".menu-item-has-children > a").click(function (event) {
            event.preventDefault();
            $(this).toggleClass("on");
            $(this).next(".sub-menu").slideToggle();
          
        });
    }
    $(".site-nav ul li a").click(function () {
        $('body').removeClass("on");
      
    });
    $('.site-toggle i').click(function() {
        $('body').toggleClass('on');

    });
    $('.nav-close').click(function() {
        $('body').removeClass('on');

    });
   
    $('.close-btn button').click(function() {
        $('body').addClass('menu-on-removed');
        // alert('hello');

    });

    //enquire form slide
    $('.enquire-btn a').click(function(event){
        event.preventDefault();
        $('.enquire-wrap').addClass('on');
        $('body').addClass('on');
    });
    $('.enquire-wrap .nav-close').click(function(){
        $('.enquire-wrap').removeClass('on');
    });


});


