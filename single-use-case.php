<?php
/**
 * The template for displaying jobs single posts
 *
 *
 * @package Raw_labs
 */

get_header();
?>
    <main class="site-main">
        <div class="block-inner">
            <div class="grid-2_md-1-noGutter title-image-wrapper">
                <div class="col" data-aos="fade-right">
                    <small>USE CASE</small><br><br>
                    <h2 class="page-title">
                        <?php echo get_the_title(); ?>
                    </h2>
                    <div class="tagline">
                    <?php the_excerpt()?>
                    </div>
                    
                    <a href="<?php echo site_url('/use-cases'); ?>">
                    <svg style="width:20px;height:20px; vertical-align: middle;" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" />
                    </svg>
                    <small> ALL USE CASES</small></a>
                   
                </div>
                <div class="col" data-aos="fade-left">
                    <?php the_post_thumbnail();?>
                </div>
            </div>
            <div class="grid-2 use-case-content">
                <div class="col-5_md-12 p-0">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile; 
                    ?>
                </div>
                <div  class="col-6_md-12 p-0" data-push-left="off-1_md-0">
                    <div class="use-case-example">
                        <h3>
                            <span>USE CASE</span>    
                            <?php echo get_field("example_1_title")?>
                        </h3>
                        <?php echo get_field("example_1_details")?>
                    </div>
                    <div class="use-case-example">
                        <h3>
                            <span>USE CASE</span>      
                            <?php echo get_field("example_2_title")?>
                        </h3>
                        <?php echo get_field("example_2_details")?>
                    </div>
                    <div class="use-case-features">
                        <h3>
                            Features
                        </h3>
                        <?php echo get_field("features")?>
                    </div>
                </div>
            </div>
            <?php //echo do_shortcode('[wpforms id="406" title="false"]');?>
            <br>
                <p>
                    <a href="<?php echo site_url('/use-cases'); ?>">
                    <svg style="width:20px;height:20px; vertical-align: middle;" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" />
                    </svg>
                    <small> ALL USE CASES</small></a>
                </p>
            </div>
        </div>
        
	</main><!-- #main -->

<?php
get_footer();
?>