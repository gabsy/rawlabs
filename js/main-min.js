!function(e){if(AOS.init({offset:40,duration:500,once:!0}),e(window).on("load",(function(){e("body").hasClass("home")&&(e(".lds-ellipsis").fadeOut(300),e(".page-loader").fadeOut(1e3,(function(){e(".scroll-down").css("opacity","1")}))),e(".main-navigation .menu").find("ul.sub-menu").wrap('<div class="sub-menu-wrapper">')})),e("#fullpage").length>0){new fullpage("#fullpage",{licenseKey:"ED83D1C3-05D347BD-BF85F459-A030CDAE",scrollOverflow:!0,verticalCentered:!0,navigation:!0,navigationPosition:"right",navigationTooltips:["Data APIs","Create Data Products","Collaborate & Deliver","Faster. Simpler.","Security","Swiss Made","Get Started!"],responsiveWidth:1024,normalScrollElements:".modal",afterRender:function(e,t,o){a()},afterLoad:function(t,o,n){e(".section:not(#get-started)").removeClass("animate"),e(".section.active").addClass("animate"),a()}});function a(){e(".fp-section.active").hasClass("navbar-is-dark")?e("#header").addClass("navbar-dark"):e("#header").removeClass("navbar-dark")}}if(window.addEventListener("resize",(function(){e(window).width()>=1024&&(e(".section").addClass("animate"),e(".hamburger").removeClass("is-active"),e(".main-navigation ul").removeClass("is-open"))})),e(".hamburger").on("click",(function(){e(this).toggleClass("is-active"),e(".main-navigation ul").toggleClass("is-open")})),e('a[href="#modal-schedule-demo"], a[href="#modal-schedule-custom-demo"], a[href="#modal-learn-more"], .modal-trigger').on("click",(function(a){a.preventDefault(),e(this).modal({fadeDuration:400})})),document.querySelectorAll('a[href^="#"]').forEach((e=>{e.addEventListener("click",(function(e){e.preventDefault(),document.querySelector(this.getAttribute("href")).scrollIntoView({behavior:"smooth"})}))})),window.location.hash){var t=window.location.hash;e(t).length&&e("html, body").animate({scrollTop:e(t).offset().top},900,"swing")}}(jQuery);