( function($) {

    AOS.init({
        // easing: 'ease-in-out-sine',
        offset: 40,
        duration: 500,
        once: true,
    });

    // $('#header .logo').fadeIn(400);
    // $('#header .main-navigation').fadeIn(400);
    
    /* Window Load */
    $(window).on('load',function(){
        if( $('body').hasClass('home') )
        {
            $('.lds-ellipsis').fadeOut(300);
            $('.page-loader').fadeOut(1000, function(){
                // $('#header .logo').delay(1900).fadeIn(500);
                // $('#header .main-navigation').delay(1900).fadeIn(500);
                
                $('.scroll-down').css("opacity","1");
            });
        }

        $('.main-navigation .menu').find('ul.sub-menu').wrap('<div class="sub-menu-wrapper">');
    });

    if ($('#fullpage').length > 0){

        var myFullpage = new fullpage('#fullpage', {
			licenseKey: 'ED83D1C3-05D347BD-BF85F459-A030CDAE',
            scrollOverflow: true,
            verticalCentered: true,
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ["Data APIs", "Create Data Products", "Collaborate & Deliver", "Faster. Simpler.", "Security", "Swiss Made", "Get Started!"],
            responsiveWidth: 1024,
            normalScrollElements: '.modal',
            afterRender: function(origin, destination, direction){
                NavbarColor();
            },
            afterLoad: function(origin, destination, direction){
                $(".section:not(#get-started)").removeClass('animate');
                $(".section.active").addClass('animate');
                NavbarColor();
            }
            // onLeave: function(origin, destination, direction){
            //     var leavingSection = this;
                
            //     if ($(window).width() < 1025) {
            //         if(origin.index == 0 && direction =='down'){
            //             $('#header .logo').fadeOut(500);
            //         }
            
            //         else if(origin.index == 1 && direction == 'up'){
            //             $('#header .logo').fadeIn(500);
            //         }
            //     }
            // }
        });

        function NavbarColor(){
        if ($('.fp-section.active').hasClass('navbar-is-dark')){
                $('#header').addClass('navbar-dark');
                // $(".menu-item-has-children").hover(
                // function(){
                //     $('#header').removeClass('navbar-dark');
                // },
                // function(){
                //     $('#header').addClass('navbar-dark');
                // });
            }
            else{
                $('#header').removeClass('navbar-dark');
                // $(".menu-item-has-children").hover(
                // function(){
                //     $('#header').removeClass('navbar-dark');
                // },
                // function(){
                //     $('#header').removeClass('navbar-dark');
                // });
            }
        }

        
    }

    function displayWindowResize() {
        if ($(window).width() >= 1024) {
            $(".section").addClass('animate');
            $('.hamburger').removeClass("is-active");
            $(".main-navigation ul").removeClass("is-open");
        }
    }

    window.addEventListener("resize", displayWindowResize);

    // toggle menu 
    $('.hamburger').on('click', function() {
        $(this).toggleClass("is-active");
        $(".main-navigation ul").toggleClass("is-open");
    });

    /* Modal triggers */
    $('a[href="#modal-schedule-demo"], a[href="#modal-schedule-custom-demo"], a[href="#modal-learn-more"], .modal-trigger').on('click',function(event) {
        event.preventDefault();
        $(this).modal({
            fadeDuration: 400,
        });
    });

    
    
	
	// in Page Anchor  Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
    
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // in Page Anchor  Scroll on load Hash
    if (window.location.hash) {
        var hash = window.location.hash;
    
        if ($(hash).length) {
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, 'swing');
        }
    }
  
})(jQuery);