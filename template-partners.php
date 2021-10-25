<?php
/**
* Template Name: Partners
*
* @package WordPress
* @subpackage Raw Labs
*/

get_header();
?>

	<main class="site-main">
        <div class="block-inner" data-aos="fade-in">
            <div class="grid-2_sm-1">
                <div class="col pl-0">
                    <h2 class="page-title" data-aos="fade-in">Accelerate success with RAW Labs Partners</h2>
                    <div class="tagline" data-aos="fade-down">Join the RAW Labs Partner Program and help your customers unlock the value of their data.</div>
                </div>
                <div class="col p-0">
                </div>
            </div>
        </div>
        <div class="block-inner partners-inner">
            <div class="grid-3-equalHeight_lg-2_sm-1">
                <div class="col">
                    <div class="partners-card" data-aos="fade-up">
                        <h3>Reseller</h3>
                        <p>If you have a strong network and know how to sell solutions for BI, analytics, data integration, big data, data lakes, data warehousing, then RAW will offer you a great market opportunity.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="partners-card" data-aos="fade-up" data-aos-delay="150">
                        <h3>OEM</h3>
                        <p>RAW's technology provides a completely new and efficient way to manage data. Talk to us and learn how we can help you integrate our technology into your solution to give you a competitive advantage.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="partners-card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Implementation</h3>
                        <p>RAW Implementation Partners help our customers make the most of their RAW investment by implementing our offering the best way.<br></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-inner ta-c pt-0">
            <a href="#modal-become-partner" class="btn btn-big modal-trigger">Become Partner</a>
            <a href="#modal-find-partner" class="btn btn-big modal-trigger">Find Partner</a>
        </div>
	</main><!-- #main -->

<?php
get_template_part( 'template-parts/modal-become-partner');
get_template_part( 'template-parts/modal-find-partner');
// get_sidebar();
get_footer();
