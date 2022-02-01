// When the user scrolls the page,

(function($){
    var header = $('#masthead');
    var sticky = header.offset();
   
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