<?php
/**
* Template Name: Articles Medium
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner">
            <div class="grid-2-middle_md-1">
                <div class="col"><h2 class="page-title" data-aos="fade-in"><?php echo get_the_title(); ?></h2></div>
                <div class="col"></div>
            </div>
            <?php
            $articles = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'articles',
                'posts_per_page' => '-1'
                ));

            if ( $articles->have_posts() ): ?>

            <div class="grid-3_xs-1_sm-1_lg-2 news-list">
                
            <?php while($articles -> have_posts()) : $articles -> the_post(); ?>
                <div class="col" data-aos="fade-up">
                <a href="<?php echo get_field("medium_url")?>" class="card-link">
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
                                    <?php //the_category()?>
                                    <ul class="post-categories">
	                                    <li>Medium</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <!-- <h3><a href="<?php echo get_field("medium_url")?>"><?php the_title(); ?></a></h3> -->
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <!-- <a href="<?php echo get_field("medium_url")?>" class="btn">Read on Medium</a> -->
                    </div>
                </a>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
                <h4 class="page-title">
                    No articles found.
                </h4>
                <p>Sorry, there are no articles available at this moment. You can come back later or check out our latest news.<br><br></p>
            <?php
            endif; 
            
            // Added this now 
            wp_reset_query() ; 
            ?>
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
