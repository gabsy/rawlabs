<?php
/**
* Template Name: News
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
                <div class="col"><form action="" method="GET" class="filter-category" data-aos="fade-in">
                FILTER BY CATEGORY: 
                <select name="newscat" id="newscat" onchange="submit();">
                <option value="" <?php echo ($_GET['newscat'] == '') ? ' selected="selected"' : ''; ?>>All News</option>
                <?php 
                    $categories = get_categories('post_type=news'); 
                    foreach ($categories as $category) : 
                    echo '<option value="'.$category->name.'"';
                    echo ($_GET['newscat'] == ''.$category->name.'') ? ' selected="selected"' : '';
                    echo '>'.$category->name.'</option>';
                    endforeach; 
                ?>
                </select>
            </form></div>
            </div>
            <?php 
            if( !isset($_GET['newscat']) || '' == $_GET['newscat']) {
                $news = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'posts_per_page' => '-1'
                    ));
            } else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
                $newscategory = $_GET['newscat']; //get sort value
                $news = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'posts_per_page' => '-1',
                    'category_name' => $newscategory
                    ));
            }

            if ( $news->have_posts() ): ?>

            <div class="grid-3_xs-1_sm-1_lg-2 news-list">
                
            <?php while($news -> have_posts()) : $news -> the_post(); ?>
                <div class="col" data-aos="fade-up">
                    <a href="<?php the_permalink();?>">
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
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
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
