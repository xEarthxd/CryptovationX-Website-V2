

$(window).scroll(function() {    
    
    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
        $(".navbar-default").css({
            background: '#fff',
            padding: '0'
        });
        $(".navbar-default .navbar-nav>li>a").css('color','#000');
        $(".navbar-brand-mat>img").attr("src","images/Token.png");
        $(".navbar-default .navbar-toggle .icon-bar").css("color","#3498db");
        $("..custom-toggler .navbar-toggler-icon").css("background-color","#000");
        // $(".navbar-default").css('border-bottom','0.5px solid #090c1b');
    } else {
        $(".navbar-default, .navbar-default .navbar-nav>li>a").removeAttr('style');
        $(".navbar-brand-mat>img").attr("src","images/Token3.png");
        $(".navbar-default .navbar-toggle .icon-bar").css("color","#fff");
        $(".custom-toggler .navbar-toggler-icon").css("background-color","#fff");
        // $(".navbar-default").css('none');
    }

});