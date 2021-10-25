<?php
/**
* Template Name: Library
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="tagline" data-aos="fade-left">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
        <?php
            $library = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'study',
                'posts_per_page' => '-1'
                ));
        ?>
        <?php 
            if ( $library->have_posts() ):
            $counter = 1;
            while($library -> have_posts()) : $library -> the_post(); 
        ?>
        <?php 
            if ($counter % 2 == 0) {
        ?>
            <section class="background-shape-right">
        <?php } else { ?>
            <section class="background-shape-left">
        <?php } ?>
        
            <div class="block-inner">
                <div class="grid align-items-center">
                    <div class="col-6_md-12_lg-7" data-aos="fade-down">
                        <div class="image-container">
                            <?php the_post_thumbnail();?>
                        </div>
                    </div>
                    <div class="col-6_md-12_lg-5" data-aos="fade-right">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <?php 
                            if (get_field("form_script") !== '') {
                        ?>
                            <a href="#<?php echo get_post_field( 'post_name', get_post() ) ?>" class="btn modal-trigger">Download</a>
                            <div id="<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal">
                            <?php echo get_field("form_script")?>
                        <?php } else { ?>
                            <a href="<?php echo get_field( 'download_file' ) ?>" class="btn">Download</a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            $counter++;
            endwhile; 
            endif; 
            wp_reset_query(); 
        ?>
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();
