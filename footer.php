<?php
/**
 * The template for displaying the footer
 *
 * @package Raw_labs
 */

?>
<?php 
    if (!is_front_page() ) :
    ?>
        <footer class="footer">
            <div class="block-inner">
                <ul class="social-icons">
                    <li>
                        <a href="https://www.linkedin.com/company/raw-labs/" class="social-icon-link" target="_blank" title="Follow us on LinkedIn!">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/ico-linkedin.svg">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/raw_labs" class="social-icon-link" target="_blank" title="Follow us on Twitter!">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/ico-twitter.svg">
                        </a>
                    </li>
                </ul>
                <br>
                <ul class="footer-links">
                    <li><a href="<?php echo get_home_url();?>/news">News</a></li>
                    <li><a href="<?php echo get_home_url();?>/team">Team</a></li>
                    <li><a href="<?php echo get_home_url();?>/careers">Careers</a></li>
                    <li><a href="<?php echo get_home_url();?>/contact-us">Contact Us</a></li>
                </ul>
                <div class="copyright">
                    © Copyright
                    <?php 
                    $year = (new DateTime)->format("Y");
                    echo $year;
                    ?> 
                    RAW Labs SA. &nbsp;&nbsp;
                    <a href="<?php echo get_home_url();?>/privacy-policy">Privacy Policy</a>&nbsp;&nbsp;
                    <a href="<?php echo get_home_url();?>/terms-of-use">Terms of Use</a>
                </div>
            </div>  
        </footer>
    <?php
        wp_footer();
    else:
        wp_footer();
    endif;

    // Demo modals
    // get_template_part( 'template-parts/modal-schedule-demo');
    // get_template_part( 'template-parts/modal-schedule-custom-demo');
    // get_template_part( 'template-parts/modal-learn-more');
    ?>
    </body>
</html>
