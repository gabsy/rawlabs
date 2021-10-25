<?php
/**
* Template Name: Thank you
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner-small ta-c">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/ill-mail-sent.svg">
            <h2 class="page-title no-marker"><?php echo get_the_title(); ?></h2>
            <p><b>Thank you for your interest in RAW Labs!</b></p>
            <p>Your request was successfully submitted and we will get back to you as soon as possible!</p>
            <p><a class="btn" href="<?php echo get_home_url();?>">Go to homepage</a></p>
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
