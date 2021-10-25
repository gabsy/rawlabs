<?php
/**
* Template Name: Team
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <div class="oversized-bk"><img src="<?php echo get_stylesheet_directory_uri();?>/img/bg-team.svg"></div>
            <h2 class="page-title">Our Team</h2>
            <div class="tagline" data-aos="fade-left">Backed by some of the brightest minds in the industry.</div>
            
        </div>
        <div class="block-grey">
            <div class="block-inner">
                <h3 data-aos="fade-in">Team</h3>
                <?php
                $team = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'team-member',
                    // 'meta_key' => 'team_member_group',
                    // 'meta_value' => 'management',
                    'meta_query'	=> array(
                        array(
                            'key'		=> 'team_member_group',
                            'value'		=> 'Team',
                            'compare'	=> 'LIKE'
                        )),
                    'posts_per_page' => '-1'
                    ));

                if ( $team->have_posts() ): ?>
                <div class="grid-3_xs-1_md-2 team-list">
                    
                <?php while($team -> have_posts()) : $team -> the_post(); ?>
                    <div class="col" data-aos="fade-up">
                        <div class="team-card" >
                            <figure class="effect-apollo">
                                <?php the_post_thumbnail();?>
                                <figcaption>
                                    <div class="cta">View Bio</div>
                                    <a href="#<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal-trigger"></a>
                                </figcaption>			
                            </figure>
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <span class="title"><?php echo get_field("team_member_title")?></span>
                        <div id="<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal modal-team">
                            <div class="grid">
                                <div class="col-4_sm-12">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="col-8_sm-12">
                                    <div class="linkedin-icon">
                                        <a href="<?php echo get_field("team_member_linkedin")?>" target="_blank">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-linkedin.svg">
                                        </a>
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                    <span class="title"><?php echo get_field("team_member_title")?></span>
                                    <p><?php the_content();?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php
                endif; 
                wp_reset_query() ; 
                ?>
            </div>
        </div>
        <div class="block-inner pt-0 pb-0">
            <h3 data-aos="fade-in">Board</h3>
            <?php
            $teamBoard = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'team-member',
                // 'meta_key' => 'team_member_group',
                // 'meta_value' => 'management',
                'meta_query'	=> array(
                    array(
                        'key'		=> 'team_member_group',
                        'value'		=> 'Board',
                        'compare'	=> 'LIKE'
                    )),
                'posts_per_page' => '-1'
                ));

            if ( $teamBoard->have_posts() ): ?>
            <div class="grid-3_xs-1_md-2 team-list">
                
            <?php while($teamBoard -> have_posts()) : $teamBoard -> the_post(); ?>
                <div class="col" data-aos="fade-up">
                        <div class="team-card">
                            <figure class="effect-apollo">
                                <?php the_post_thumbnail();?>
                                <figcaption>
                                    <div class="cta">View Bio</div>
                                    <a href="#<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal-trigger"></a>
                                </figcaption>			
                            </figure>
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <span class="title"><?php echo get_field("team_member_board_title")?></span>
                        <div id="<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal modal-team">
                            <div class="grid">
                                <div class="col-4_sm-12">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="col-8_sm-12">
                                    <div class="linkedin-icon">
                                        <a href="<?php echo get_field("team_member_linkedin")?>" target="_blank">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-linkedin.svg">
                                        </a>
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                    <span class="title"><?php echo get_field("team_member_board_title")?></span>
                                    <p><?php the_content();?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
            endif; 
            wp_reset_query() ; 
            ?>
        </div>
        <div class="block-grey mb-0">
            <div class="block-inner">
                <h3 data-aos="fade-in">Advisors</h3>
                <?php
            $teamAdvisors = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'team-member',
                // 'meta_key' => 'team_member_group',
	            // 'meta_value' => 'management',
                'meta_query'	=> array(
                    array(
                        'key'		=> 'team_member_group',
                        'value'		=> 'Advisors',
                        'compare'	=> 'LIKE'
                    )),
                'posts_per_page' => '-1'
                ));

                if ( $teamAdvisors->have_posts() ): ?>
                <div class="grid-3_xs-1_md-2 team-list">
                    
                <?php while($teamAdvisors -> have_posts()) : $teamAdvisors -> the_post(); ?>
                <div class="col" data-aos="fade-up">
                        <div class="team-card">
                            <figure class="effect-apollo">
                                <?php the_post_thumbnail();?>
                                <figcaption>
                                    <div class="cta">View Bio</div>
                                    <a href="#<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal-trigger"></a>
                                </figcaption>			
                            </figure>
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <span class="title"><?php echo get_field("team_member_advisor_title")?></span>
                        <div id="<?php echo get_post_field( 'post_name', get_post() ) ?>" class="modal modal-team">
                            <div class="grid">
                                <div class="col-4_sm-12">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="col-8_sm-12">
                                    <div class="linkedin-icon">
                                        <a href="<?php echo get_field("team_member_linkedin")?>" target="_blank">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-linkedin.svg">
                                        </a>
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                    <span class="title"><?php echo get_field("team_member_advisor_title")?></span>
                                    <p><?php the_content();?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php
                endif; 
                wp_reset_query() ; 
                ?>
            </div>
        </div>
        <div class="block-inner we-are-hiring ta-c">
                <h2 class="no-marker mb-0">We're Hiring!</h2>
                <p>Want to help us reinvent our industry? <br>Come join the data management revolution!<br><br></p>
                <a href="<?php echo get_home_url();?>/careers" class="btn btn-big">Join Us</a>
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
