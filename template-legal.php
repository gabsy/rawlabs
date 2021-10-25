<?php
/**
* Template Name: Legal
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner-small">
        <h2 class="page-title"><?php echo get_the_title(); ?></h2>
		<?php
		while ( have_posts() ) :
			the_post();
            the_content();
			// get_template_part( 'template-parts/content', 'page' );
		endwhile;
        ?>
        </div>
	</main>

<?php
get_footer();
?>