<?php
/**
* Template Name: Jobs
*
* @package WordPress
* @subpackage Raw Labs
*/
get_header();
?>
	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <small data-aos="fade-left">CAREERS @ RAW LABS</small><br><br>
            <div class="grid-2_md-1">
                <div class="col pl-0">
                    <h2 class="page-title" data-aos="fade-in">Come join the data analytics revolution!</h2>
                </div>
                <div class="col p-0">
                    <div class="jobs-top-card" data-aos="fade-up-left" data-aos-delay="100">
                    We're building a company to help our customers make better, faster decisions. If this sounds exciting to you, then we would love to hear from you!<br><br>
                    Check out our <b>job openings</b> below or contact us at careers@raw-labs.com
                    <a href="#current-openings" class="btn btn-big"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="jobs-perks block-grey">
            <div class="block-inner">
                <small data-aos="fade-down">WHAT WE OFFER</small><br><br>
                <div class="grid-3_md-1 ">
                    <div class="col">
                        <div class="job-perks-block" data-aos="fade-up" data-aos-delay="150">
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-flexible-work.svg">
                            </div>
                            <div>
                                <h4>Flexible work hours and home office support </h4>
                                We understand the challenges of your everyday life and we support a proper work-life balance.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="job-perks-block" data-aos="fade-up" data-aos-delay="300">
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-equity.svg">  
                            </div>
                            <div>
                                <h4>Great compensation plan including stock options </h4>
                                We appreciate all your efforts and we encourage  you to own a piece of the business your work hard for.
                            </div>
                        </div>
                    </div>
                    <div class="col pr-0">
                        <div class="job-perks-block" data-aos="fade-up" data-aos-delay="450"> 
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-stimulating.svg">  
                            </div>
                            <div>
                                <h4>Stimulating projects and work environment</h4>
                                Be part of a growing team of talented people that solve challenging data management projects that make a difference.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-inner pt-0" id="current-openings">
            <h3 data-aos="fade-in">Current Openings</h3>

            

            <?php
            $jobs = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'career',
                'posts_per_page' => '-1'
                ));

                if ( $jobs->have_posts() ): ?>
                <div class="grid-3_xs-1_sm-1_lg-2 jobs-list" >
                    
                <?php while($jobs -> have_posts()) : $jobs -> the_post(); ?>
                    <div class="col">
                        <div class="job-card" data-aos="fade-up">
                            <div class="job-meta">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-job-meta.svg">
                                <div>
                                    <b><?php echo get_field("career_type")?></b><br>
                                    <?php echo get_field("career_location")?>
                                </div>
                            </div> 
                            
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink();?>" class="btn">Job Details</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php
                endif; 

                wp_reset_query() ; 
                ?>
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
