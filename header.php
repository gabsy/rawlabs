<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70403824-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-70403824-1');
	</script>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet"> -->

	<?php wp_head(); ?>
	<script> (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_DzLR5a5wlKD7BoQ2.js'); })(); </script>
    <script>var w=window;var p = w.location.protocol;if(p.indexOf("http") < 0){p = "http"+":";}var d = document;var f = d.getElementsByTagName('script')[0],s = d.createElement('script');s.type = 'text/javascript'; s.async = false; if (s.readyState){s.onreadystatechange = function(){if (s.readyState=="loaded"||s.readyState == "complete"){s.onreadystatechange = null;try{loadwaprops("3z6e38d080f11b1b918ea3b2267a122470","3z237a9d76f2c3c34ddaa27927c20c27b1","3zd769d120d248c9fd67aefbadec2400d9ae3a900cdfde5a2e53c4e883f8677559","3zeca5e25fff8863d059c09599aaa0e60c","0.0");}catch(e){}}};}else {s.onload = function(){try{loadwaprops("3z6e38d080f11b1b918ea3b2267a122470","3z237a9d76f2c3c34ddaa27927c20c27b1","3zd769d120d248c9fd67aefbadec2400d9ae3a900cdfde5a2e53c4e883f8677559","3zeca5e25fff8863d059c09599aaa0e60c","0.0");}catch(e){}};};s.src =p+"//mh.zoho.com/hub/js/WebsiteAutomation.js";f.parentNode.insertBefore(s, f);</script>
	<!-- <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=9a2a70bec00b6' async='true'></script> -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
    if (is_front_page() ) :
        ?>
        <div class="page-loader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <?php
    endif;
?>
<?php if (is_front_page() ) { ?>
<header id="header" class="navbar-dark">
<?php } else { ?>
<header id="header">
<?php } ?>
    <div class="block-inner">
        <div class="grid-2">
            <div class="col-2">
                <h1 class="logo">
                    <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-raw.svg" width="65" height="66" alt="Raw Labs"></a>
                </h1>
            </div>
            <div class="col-10">
                <nav id="site-navigation" class="main-navigation">
                    <div class="hamburger hamburger--elastic">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <?php 
                    $walker = new Menu_With_Description;
                    wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'menu', 'walker' => $walker ) ); 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
