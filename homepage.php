
<?php 
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage Raw Labs
*/
get_header(); ?>

<main id="fullpage">
            
    <section id="home" class="section fp-noscroll navbar-is-dark">
        <div class="intro align-items-center">
            <div class="bg-mask"></div>
            <div class="block-inner align-items-center">
                <h1 class="ta-c">Data APIs.<br>Made simple.</h1>
                <div class="tagline ta-c">Create, publish and manage data products</div>
            </div>
            <div class="scroll-down ta-c">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-scroll.svg" width="22" height="32">
                <small>scroll down</small>
            </div>
        </div>
    </section>

    <section id="just-ask" class="section fp-noscroll">
        <div class="intro align-items-center">
            <div class="block-inner anim-fade-bottom">
                <div class="grid-2-middle_md-1">
                    <div class="col">
                        <h2 class="anim-fade-top delay-2">Create <br>data products.</h2>
                        <div class="content-block anim-fade-left delay-3">
                            <p>Access disparate data sources.</p>
                            <p>Expose as APIs in a data mesh or data fabric.</p>
                        </div>
                    </div>
                    <div class="col ta-c anim-fade-left anim-blur">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/create-products-dark.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="a-query" class="section fp-noscroll">
        <div class="intro align-items-center">
            <div class="block-inner anim-fade-bottom">
                <div class="grid-2-middle_md-1">
                    <div class="col">
                        <h2 class="anim-fade-top delay-2">Collaborate<br> and publish.</h2>
                        <div class="content-block anim-fade-left delay-3">
                            <p>Share, reuse and version data as code.</p>
                            <p>Manage the full API lifecycle.</p>
                        </div>
                    </div>
                    <div class="col ta-c anim-fade-right anim-blur">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/collaborate.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="performance" class="section fp-noscroll">
        <div class="intro align-items-center">
            <div class="block-inner anim-fade-bottom">
                <div class="grid-2-middle_md-1">
                    <div class="col">
                        <h2 class="anim-fade-top delay-2">Faster. Simpler. <br>Data without more databases.</h2>
                        <div class="content-block anim-fade-left delay-3">
                            <p>ETL is complex, costly and slow.</p>
                            <p>RAW lets you get to the data faster. </p>
                        </div>
                    </div>
                    <div class="col ta-c">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/perf-graph.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="security" class="section fp-noscroll">
        <div class="intro align-items-center">
            <div class="block-inner anim-fade-bottom">
                <div class="grid-2-middle_md-1">
                    <div class="col">
                        <h2 class="anim-fade-top delay-2">Cloud scale<br>with security.</h2>
                        <div class="content-block anim-fade-left delay-3">
                            <p>RAW secures your data and queries in the cloud.<br>Scale the power on demand.</p>
                        </div>
                    </div>
                    <div class="col ta-c anim-fade-right anim-blur">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/security-new.svg" class="wp-80">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="swiss-made" class="section navbar-is-dark">
        <div class="intro align-items-center">
            <div class="block-inner anim-fade-top">
                <h2 class="anim-fade-top delay-2 anim-blur ta-c no-marker align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/swiss-made.svg" width="80" height="80">&nbsp;&nbsp;
                    Swiss Engineering
                </h2>
                <div class="grid-2-middle_md-1">
                    <div class="col">
                        <div class="content-block anim-fade-left delay-3">
                           
                            <p class="anim-fade-bottom delay-5">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/swiss-map.svg" width="100%" height="100%">
                            </p>
                        </div>
                    </div>
                    <div class="col anim-fade-right anim-blur">
                        <p>RAW builds upon more than 10 years of advanced database research at EPFL, in Lausanne, Switzerland.</p>
                        <p class="anim-fade-right delay-4"><a href="<?php echo get_home_url();?>/founders-story/" class="btn">Read Founders' Story</a></p><br>
                        <p>RAW Labs SA is funded by first-class investors with vast experience at Salesforce, Credit Suisse and Cisco. Advisors include visionary technologists within data and analytics.</p>
                        <p class="anim-fade-left delay-2"><a href="<?php echo get_home_url();?>/team/" class="btn">Meet our team</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="get-started" class="section navbar-is-dark">
        <div class="intro align-items-center">
            <div class="block-inner anim-fade-bottom">
                <h2 class="anim-fade-left">Ready to get started?</h2>
                <div class="grid-3_lg-2_sm-1">
                    <div class="col anim-fade-right">
                    <h3>Access our online tutorial</h3>
                        <p>RAW SQL Tutorial</p>
                        <a href="http://docs.raw-labs.com/latest/getting_started.html" class="btn btn-big" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                    <div class="col anim-fade-right delay-2">
                    <h3>Read our documentation</h3>
                        <p>RAW SQL Documentation</p>
                        <a href="http://docs.raw-labs.com/latest/" class="btn btn-big" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                    <div class="col anim-fade-right delay-4">
                        <h3>Talk to us!</h3>
                        <p>We'd love to hear from you.<br></p>
                        <a href="<?php echo get_home_url();?>/contact-us" class="btn btn-big"><img src="<?php echo get_stylesheet_directory_uri();?>/img/btn-arrow.svg"></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section id="footer" class="section fp-auto-height navbar-is-dark">
        <footer class="footer">
            <div class="block-inner">
                <ul class="social-icons">
                    <li>
                        <a href="https://www.linkedin.com/company/raw-labs/" class="social-icon-link" target="_blank" title="Follow us on LinkedIn!">
                        <svg  aria-hidden="true" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/raw_labs" class="social-icon-link" target="_blank" title="Follow us on Twitter!">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
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
    </section>

</main>
<?php get_footer();?>