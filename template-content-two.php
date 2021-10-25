<?php
/**
* Template Name: Content Two
*
* @package WordPress
* @subpackage Raw Labs
*/
get_header();
?>
    <main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <!-- <small data-aos="fade-left">CAREERS @ RAW LABS</small><br><br> -->
            <div class="grid-2_md-1">
                <div class="col pl-0">
                    <h2 class="page-title" data-aos="fade-in">
                        <?php echo get_the_title(); ?>
                    </h2>
                    <div class="tagline" data-aos="fade-left">
                    <?php echo get_field('tagline');?>
                </div>
                </div>
                <div class="col p-0">
                    <div class="top-card" data-aos="fade-up-left" data-aos-delay="100">
                        <?php echo get_field('highlights');?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="block-inner-small pt-0">  
            <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
            ?>
        </div> -->
        <div class="block-inner">
            <div class="grid">
                <div class="col-4_sm-12_md-6 ta-c">
                    <img src="<?php echo get_field("founder_one_image")?>" class="founder-image">
                </div>
                <div class="col-8_sm-12_md-6">
                    <?php echo get_field("founder_one_text")?>
                </div>
            </div>
        </div>
        <div class="block-inner pt-0">
            <div class="grid">
                <div class="col-4_sm-12_md-6 ta-c">
                    <img src="<?php echo get_field("founder_two_image")?>" class="founder-image">
                </div>
                <div class="col-8_sm-12_md-6">
                    <?php echo get_field("founder_two_text")?>
                </div>
            </div>
        </div>
    </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
