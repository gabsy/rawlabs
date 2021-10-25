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
                    // get_template_part( 'template-parts/content', get_post_type() );

                    // the_post_navigation(
                    //     array(
                    //         'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'raw-labs' ) . '</span> <span class="nav-title">%title</span>',
                    //         'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'raw-labs' ) . '</span> <span class="nav-title">%title</span>',
                    //     )
                    // );

                endwhile; 
                ?>
            </div>
        </div>
        
	</main><!-- #main -->

<?php
get_footer();
?>