<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Raw_labs
 */

get_header();
?>
    <main class="site-main">
        <div class="block-inner">
            <div class="grid-2_md-1-noGutter title-image-wrapper">
                <div class="col align-items-center">
                    <h2 class="page-title">
                        <?php echo get_the_title(); ?>
                        <div class="news-meta">
                            <div class="news-date">
                                <?php echo get_the_date() ?>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="news-category">
                                <?php the_category()?>
                            </div>
                        </div>
                    </h2>
                    
                </div>
                <div class="col">
                    <?php the_post_thumbnail();?>
                </div>
            </div>
            <div class="block-inner-small no-padding">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                ?>
                    <a href="#<?php echo get_post_field( 'post_name', get_post() ) ?>" class="btn modal-trigger">Download</a>
                    <div id="<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal">
                    <?php echo get_field("form_script")?>
                    </div>
                <?php 
                endwhile; 
                ?>
            </div>
        </div>
        
	</main><!-- #main -->

<?php
get_footer();
?>