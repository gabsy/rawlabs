<?php
/**
* Template Name: Get Started
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <div class="grid-2_md-1">
                <div class="col pl-0">
                    <h2 class="page-title" data-aos="fade-in">Let's get started!</h2>
                    <div class="tagline" data-aos="fade-down">We're on a mission to create a paradigm shift in the way companies exploit their data.</div>
                    <br><br>
                    <a href="https://just-ask.raw-labs.com" target="_blank" class="btn btn-big">Try RAW now!</a>
                </div>
                <div class="col p-0">
                </div>
            </div>
        </div>
        <div class="block-inner get-started-inner">
           
            <div class="grid">
                <div class="col-4_sm-12_md-6_lg-6">
                    <div class="get-started-card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Access our online tutorial</h3>
                        <p>RAW Online Tutorial</p>

                        <a href="http://docs.raw-labs.com/latest/getting_started.html" class="btn btn-big" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                </div>
                <div class="col-4_sm-12_md-6_lg-6">
                    <div class="get-started-card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Read our documentation</h3>
                        <p>RAW Online Documentation</p>
                        <a href="http://docs.raw-labs.com/latest/" class="btn btn-big" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                </div>
                <div class="col-4_sm-12_md-6_lg-6">
                    <div class="get-started-card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Talk to us!</h3>
                        <p>We'd love to hear from you.<br></p>
                        <!-- <p>Talk to one of our data management experts and learn more about what we can do and how we might help.<br></p><br> -->
                        <a href="<?php echo get_home_url();?>/contact-us" class="btn btn-big"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                </div>
                
                
            </div>
        </div>
        
        <div class="block-inner pt-0">
            <div class="grid-2_md-1">
                <div class="col pl-0">
                    <h3>How to reach us?</h3>
                    <p>
                        <b>Email:</b> <a href="mailto:hello@raw-labs.com">hello@raw-labs.com</a>
                    </p>
                    <p>
                        <b>Phone:</b> +41 58 001 35 58
                    </p>
                    <p>
                        <b>Where are we?</b><br>
                        RAW Labs SA, EPFL Innovation Park, Building I, 1015 Lausanne
                    </p>
                    <p>
                        <b>IDE Number:</b> CHE-215.716.321
                    </p>
                    <p>
                        <b>Office Hours:</b> Weekdays : 9am to 6pm
                    </p>
                </div>
                <div class="col p-0">
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2745.583263865705!2d6.559125315593028!3d46.51635897912744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c30fb57f97db3%3A0x486b5705b17eb8c3!2sRAW+Labs!5e0!3m2!1sen!2sch!4v1561569331728!5m2!1sen!2sch" width="93%" height="400" align="center" allowfullscreen frameBorder="0" class="contact-map-iframe"></iframe>
                    <br>
                </div>
            </div>
        </div>
        
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
