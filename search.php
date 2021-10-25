<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Raw_labs
 */

get_header();
?>

	<main class="site-main">
        <div class="block-inner">
        <?php if ( have_posts() ) : ?>

            <h2 class="page-title" data-aos="fade-in">
                <?php printf( esc_html__( 'Search Results for: %s', 'raw-labs' ), '<span>' . get_search_query() . '</span>' );?>
            </h2>

            <div class="grid-3_xs-1_sm-1_lg-2 search-list">
                
            <?php while(have_posts()) : the_post(); ?>
                <div class="col" data-aos="fade-up">
                    <div class="search-card">
                        <div class="grid-2 search-meta">
                            <div class="col">
                                <div class="search-date">
                                    <?php echo get_the_date() ?>
                                </div>
                            </div>
                            <div class="col ta-r">
                                
                            </div>
                        </div> 
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink();?>" class="more-link"><?php the_permalink();?></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
                <h2 class="page-title" data-aos="fade-in">
                    No search results
                </h2>
                <p>Sorry, we found nothing searching for <b><?php printf( get_search_query());?></b>. You can try a new search or check out our latest news.<br><br></p>

                <h3>Latest news</h3>
                <?php 
                $news = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'posts_per_page' => '6'
                    ));

                if ( $news->have_posts() ): ?>

                    <div class="grid-3_xs-1_sm-1_lg-2 news-list">
                        
                    <?php while($news -> have_posts()) : $news -> the_post(); ?>
                        <div class="col" data-aos="fade-up">
                            <div class="news-card">
                            <?php the_post_thumbnail('medium');?>
                                <div class="grid-2 news-meta">
                                    <div class="col">
                                        <div class="news-date">
                                            <?php echo get_the_date() ?>
                                        </div>
                                    </div>
                                    <div class="col ta-r">
                                        <div class="news-category">
                                            <?php the_category()?>
                                        </div>
                                    </div>
                                </div> 
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                
                                <?php the_excerpt(); ?> 
                                <a href="<?php the_permalink();?>" class="btn">Read more</a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                endif; 
                
                // Added this now 
                wp_reset_query() ; 
                ?>
            <?php endif; ?>
            
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
?>