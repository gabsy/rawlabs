<?php
/**
* Template Name: Use Cases
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <!-- <div class="oversized-bk"><img src="<?php echo get_stylesheet_directory_uri();?>/img/bg-team.svg"></div> -->
                <h2 class="page-title">Use cases</h2>
                <div class="tagline" data-aos="fade-left">
                    Reduced time to answers without the need to copy and transform data. Read how we add value, and then <b>just ask</b>!
                </div>
            </div>
        </div>
        <?php
            $usecases = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'use-case',
                'posts_per_page' => '-1'
                ));
        ?>
        <?php 
            if ( $usecases->have_posts() ):
            $counter = 1;
            while($usecases -> have_posts()) : $usecases -> the_post(); 
        ?>
        <?php 
            if ($counter % 2 == 0) {
        ?>
            <section class="background-shape-right">
        <?php } else { ?>
            <section class="background-shape-left">
        <?php } ?>
        
            <div class="block-inner">
                <div class="in-page-bookmark" id="<?php echo $post_slug = $post->post_name;?>"></div>
                <div class="grid align-items-center">
                    <div class="col-6_md-12_lg-7" data-aos="fade-down">
                        <div class="image-container">
                            <?php the_post_thumbnail();?>
                        </div>
                    </div>
                    <div class="col-6_md-12_lg-5" data-aos="fade-right">
                        <h3><?php the_title(); ?></h3>
                        <?php echo get_field("short_description")?>
                        <br>
                        <?php if ( get_the_content() ) { ?>
                            <a href="<?php the_permalink();?>" class="btn">Learn more</a>
                        <?php } ?>
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
