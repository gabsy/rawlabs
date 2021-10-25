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
            <h2 class="page-title mb-0">
                <?php echo get_the_title(); ?>
            </h2>
            <div class="job-single-meta">
                <b><?php echo get_field("career_type")?></b><br>
                <?php echo get_field("career_location")?>
            </div>
            <a href="<?php echo get_field("apply_link")?>" class="btn btn-big" target="_blank">Apply to this job</a>
            <br>
            <div class="block-inner-small no-padding">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile; 
                ?><br><br>
                 <a href="<?php echo get_field("apply_link")?>" class="btn btn-big" target="_blank">Apply to this job</a>
            </div>
        </div>
        
	</main>

<?php
get_footer();
?>