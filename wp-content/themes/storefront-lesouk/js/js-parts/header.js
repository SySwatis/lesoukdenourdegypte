// When the user scrolls the page,

(function($){
    var header = $('#masthead');
    var sticky = header.offset();

    $(".handheld-navigation").on("swipeleft",function(){
        $('.menu-toggle').trigger('click');
    });
   
    $('.menu-toggle').on('click',function()
    {
        $('html').toggleClass('nav-open');
    });

    $(window).scroll(function(){
        if (window.pageYOffset > sticky.top) {
            header.addClass('sticky');
            $('body').addClass('site-header-sticky');
        } else {
            header.removeClass('sticky');
            $('body').removeClass('site-header-sticky');
        }
    });
    
})(jQuery);