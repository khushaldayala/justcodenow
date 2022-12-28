<?php
/**
 * Template Name: Magento Development
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php get_header(); ?>

 <div class="header3">
        <video class="video-adjust" width="100" autoplay loop>
                    <source src="<?php echo get_template_directory_uri() . '/'; ?>video/For_Wes.mp4" type="video/mp4">
                    <source src="<?php echo get_template_directory_uri() . '/'; ?>video/For_Wes.webm" type="video/webm">
                    Your browser does not support HTML5 video. </video>
        <div class="main-head for-video-head">
            <div class="container">
                <div class="intro-text">
                    <h1 class="providing-head"><?php echo get_field( "banner_main_text" );?></h1>
                  <!--  <h1>We Create Exceptionally <br>Creative <span class="change-clr">Web Designs</span></h1>-->
                     <?php echo get_field( "banner_sub_text" );?> 
                    <!--<a href="#" class="view-del">view detail ></a>-->
                    <div class="for-start-btn"> 
                      <?php 
$link = get_field('banner_first_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" class="page-scroll btn next-step2">
        <span><?php echo esc_html( $link_title ); ?></span>
                          </a>
   
<?php endif; ?> 
  <?php 
$link = get_field('banner_second_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" class="page-scroll btn next-step">
        <span><?php echo esc_html( $link_title ); ?></span>
                          </a>
   
<?php endif; ?> 
                     </div>
                </div>
                <a href="#second-sec" class="page-scroll">
                    <div class="arrow"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png" alt="bounce"> </div>
                </a>
            </div>
        </div>
    </div>
    <div class="main-clor" id="second-sec">
        <div class="container">
            <div class="row">
                <div class="choose-us-main web-design-development-custom">
                    <h2><?php echo get_field( "after_banner_main_title" );?></h2>
                    <h5><?php echo get_field( "after_banner_sub_title" );?></h5>
                    <div class="inner-choose">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="choose-box">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/chose-1.png" alt="ecommerce">
                                    <h3>ecommerce</h3>
                                    <p>website development</p>
                                    <ul class="first-box">
                                        
                                            <li><a href="drupal-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-01.png" alt="drupal development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                        
                                        
                                            <li><a href="woocommerce-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-02.png" alt="woocommerce">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                        
                                        
                                            <li><a href="magento-website-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-03.png" alt="magento website development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                         
                                    </ul>
                                    <div class="clearfix"></div>
                                    <!--<a href="#contact" class="page-scroll choose-box-btn">get free quote</a>-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="choose-box">
                                    <img src="<?php echo get_template_directory_uri()?>/images/portfolio/chose-2.png" alt="">
                                    <h3>cms/custom</h3>
                                    <p>website development</p>
                                    <ul class="second-box">
                                        
                                            <li><a href="wordpress-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-07.png" alt="wordpress development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                        
                                            <li><a href="asp-net-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-09.png" alt="asp dot net development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                        
                                        
                                            <li><a href="zend-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-10.png" alt="zend development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                        
                                            <li><a href="php-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-11.png" alt="php development" >
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                    
                                            <li><a href="laravel-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-12.png" alt="laravel development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                        
                                            <li><a href="angular-js-development.html"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/web-13.png" alt="angularjs development">
                                                <!--<span class="for-sub-page">Read More</span>--></a>
                                            </li>
                                         
                                    </ul>
                                    <div class="clearfix"></div>
                                    <!--<a href="#contact" class="page-scroll choose-box-btn">get free quote</a>-->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="choose-box">
                                    <img src="<?php echo get_template_directory_uri()?>/images/portfolio/chose-3.png" alt="">
                                    <h3>application</h3>
                                    <p>website development</p>
                                    <ul class="third-box">
                                        <li><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/23.png" alt="E-Buisness Solution"></li>
                                        <li><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/24.png" alt="E-learning Solution"></li>
                                        <li><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/25.png" alt="Web CRM Integration"></li>
                                        <li><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/26.png" alt="Custom Application Development"></li>
                                        <li><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/27.png" alt="Applications For Social Networking"></li>
                                        <li><img src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/28.png" alt="Enterprise Portal Development"></li>
                                         
                                    </ul>
                                    <div class="clearfix"></div>
                                    <!--<a href="#contact" class="page-scroll choose-box-btn">get free quote</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-base">
        <div class="container">
            <div class="row">
                <div class="col-md-7 images-control animated-steps animated" data-class="slideInLeft">
                    <img class="images-responsive" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/gif-work.gif" alt="Ecommerce Websites">
                </div>
                <div class="col-md-5">
                    <div class="desktop-left animated-steps animated" data-class="slideInRight">
                        <h3><?php echo get_field( "right_section_main_title" );?></h3>
                         <?php echo get_field( "right_section_main_description" );?> 

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-base2">
        <div class="container">
            <div class="row">
                <div class="col-md-5 images-control animated-steps animated" data-class="slideInUp">
                    <img class="images-responsive" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/Ipad-gif.gif" alt="Brand Design">
                </div>
                <div class="col-md-7 animated-steps animated" data-class="slideInRight">
                    <div class="desktop-left2 bottom-line-tab">
                        <h3><?php echo get_field( "design_according_brand_right_title" );?></h3>
                         <?php echo get_field( "design_according_brand_right_description" );?> 
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="desktop-base3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 images-control animated-steps animated" data-class="slideInDown">
                    <img class="images-responsive" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio/mobile.gif" alt="Responsive Website">
                </div>
                <div class="col-md-7">
                    <div class="desktop-left3 bottom-line-tab animated-steps animated" data-class="slideInRight">
                        <h3><?php echo get_field( "web_development_services_section_right_title" );?></h3>
                         <?php echo get_field( "web_development_services_section_right_description" );?> 

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us-bg">
        <div class="container">
            <div class="row">
                <div class="about-main-bg">
                    <h3><?php echo get_field( "how_we_do_it_title" );?></h3>
                    <ul>
                        <li class="col-md-3">
                            <div class="short-box-choose">
                                <span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
                                <h4>Define Requirement</h4>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="short-box-choose">
                                <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                <h4>Architect Solution</h4>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="short-box-choose">
                                <span><i class="fa fa-paint-brush" aria-hidden="true"></i></span>
                                <h4>Design Interface</h4>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="short-box-choose">
                                <span><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                <h4>Develop Functionality</h4>
                            </div>
                        </li>
                         
                    </ul>
                    <div class="clearfix"></div>
                    <ul class="second-part-ul col-md-9 col-md-offset-2">
                        <li class="col-md-4">
                            <div class="short-box-choose">
                                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                <h4>Testing</h4>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="short-box-choose">
                                <span><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                <h4>Deliver</h4>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="short-box-choose">
                                <span><i class="fa fa-life-ring" aria-hidden="true"></i></span>
                                <h4>Support</h4>
                            </div>
                        </li>
                         
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<?php get_footer(); ?>
