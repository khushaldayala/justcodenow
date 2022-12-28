<?php
/**
 * Template Name: Software Development
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php get_header(); ?>

 <div class="drupal-header-main">
    <div class="drupal-header">
        <div class="container">
            <div class="intro-text col-md-12 text-center soft-top-mar">
                <!-- <images src="images/cms/dot1-icon.png" alt="don net icon"> -->
                <h1><?php echo get_field( "banner_title" );?></h1>
                 <?php echo get_field( "banner_description" );?> 
                <!--<a href="#" class="view-del">view detail ></a>-->
                <div class="for-start-btn">
                      <?php 
$link = get_field('banner_button_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="page-scroll btn next-step" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?> 
<!--                    <a href="#second-sec" class="page-scroll wordpress-btn-top">view detail ></a>-->
                </div>
            </div>
           </div>
    </div>
</div>

<div class="main-clor" id="second-sec">
    <div class="container">
        <div class="row">
            <div class="choose-us-main web-design-development-custom">
                <h2 class="wordpress-heading-dev"><?php echo get_field( "software_development_title" );?></h2>
                <!-- <h5>And Let us worry about the rest! </h5> -->
                <div class="drupal-dev-main">
                    <div class="col-md-6 animated-steps animated" data-class="slideInLeft">
                        <img class="images-responsive" src="<?php echo get_field( "software_development_image" )['url']; ?>" alt="software development">
                    </div>
                    <div class="col-md-6 animated-steps animated" data-class="slideInRight">
                        <p class="dev-text1"><?php echo get_field( "software_development_description" );?></p>
                    </div>
                    <div class="col-md-12 text-center">
                          <?php 
$link = get_field('software_development_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="drupal-started wordpress-started page-scroll" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?> 
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid creation-main creation-main-all text-center soft-service-back">
    <div class="container">
        <div class="row">
            <h2><?php echo get_field( "services_title" );?></h2>
           
            <div class="support-main-dev">
                 <?php  
// Check rows exists.
if( have_rows('software_services_repeater') ):
    // Loop through rows.
    while( have_rows('software_services_repeater') ) : the_row();
        // Load sub field value.
        $services_image = get_sub_field('services_image')['url'];
        $services_title = get_sub_field('services_title');
        $services_description = get_sub_field('services_description');
     ?>
                         <div class="col-md-4 text-center">
                    <div class="support-dev">
                        <img src="<?php echo $services_image;?>" alt="Nearshore Software Development">
                        <h3><?php echo $services_title;?></h3>
                         <?php echo $services_description;  ?> 
                    </div>
                </div>
                           <?php // Do something...

    // End loop.
    endwhile;
endif;?>
                
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12 text-center">
                <?php 
$link = get_field('services_button_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="drupal-started soft-started page-scroll" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?> 
              
            </div>
        </div>
    </div>
</div>
<section class="work-process-area">
    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"><?php echo get_field( "how_we_work_title" );?></h2>
    </div>
    <div class="row">
        <?php  
// Check rows exists.
if( have_rows('how_we_work_repeater') ):
    // Loop through rows.
    $i=1;
    while( have_rows('how_we_work_repeater') ) : the_row();
        // Load sub field value.
       // $services_image = get_sub_field('services_image')['url'];
        $how_we_work_repeater_title = get_sub_field('how_we_work_repeater_title');
        $how_we_work_repeater_description = get_sub_field('how_we_work_repeater_description');
     ?>
                      <div class="col-sm-3 work-01">
            <div class="work-process">
                <span class="work-title"><?php echo $i;?>.</span>
                <h3><?php echo $how_we_work_repeater_title;?></h3>
                 <?php echo $how_we_work_repeater_description;?> 
            </div>
        </div>
                           <?php // Do something...

    // End loop.
    $i++;
    endwhile;
endif;?>
        
    </div>
</section>
<div class="section-header">
    <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"><?php echo get_field( "technology_we_use_title" );?></h2>
</div>
<div id="technology">
    <div class="container">
        <div class="section">
            <div class="technology-list">
                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite php"></span>
                                </span>
                <span class="technology-name">PHP</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInUp;">
                                <span class="img ">
                                    <i class="fa fa-wordpress" title="PSD to Wordpress Services"></i>
                                </span>
                <span class="technology-name">WORDPRESS</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <span class="img">
                                    <i class="fa fa-html5" title="PSD to HTML5/CSS3 Services"></i>
                                </span>
                <span class="technology-name">HTML5</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                <span class="img">
                                    <i class="fa fa-css3" title="PSD to HTML5/CSS3 Services"></i>
                                </span>
                <span class="technology-name">CSS3</span>
                </span>

               
                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="700ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 700ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite magento"></span>
                                </span>
                <span class="technology-name">MAGENTO</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="800ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 800ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite bootstrap"></span>
                                </span>
                <span class="technology-name">BOOTSTRAP</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 900ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite zend"></span>
                                </span>
                <span class="technology-name">ZEND</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1000ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1000ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite angular"></span>
                                </span>
                <span class="technology-name">ANGULARJS</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1100ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1100ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite codeigniter"></span>
                                </span>
                <span class="technology-name">CODEIGNITER</span>
                </span>

              

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1300ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1300ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite mongodb"></span>
                                </span>
                <span class="technology-name">MONGODB</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1400ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1400ms; animation-name: fadeInUp;">
                                <span class="img">
                                    <i class="fa fa-apple" title="JOOMLA Website Developmen Servicest"></i>
                                </span>
                <span class="technology-name">IOS</span>
                </span>

               

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1600ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1600ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite mysql"></span>
                                </span>
                <span class="technology-name">MYSQL</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1700ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1700ms; animation-name: fadeInUp;">
                                <span class="img">
                                    <i class="fa fa-android" title="JOOMLA Website Developmen Servicest"></i>
                                </span>
                <span class="technology-name">ANDROID</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1800ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1800ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite jquery"></span>
                                </span>
                <span class="technology-name">JQUERY</span>
                </span>

                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="1900ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 1900ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite nodejs"></span>
                                </span>
                <span class="technology-name">NODE.JS</span>
                </span>



                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="2100ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 2100ms; animation-name: fadeInUp;">
                                <span class="img sprite-img">
                                    <span class="sprite Laravel"></span>
                                </span>
                <span class="technology-name">LARAVEL</span>
                </span>

                
                <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4 tchnl_icons wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 2400ms; animation-name: fadeInUp;">
                                <span class="img">
                                    <i class="fa fa-drupal" title="DRUPAL Website Development Services"></i>
                                </span>
                <span class="technology-name">DRUPAL</span>
                </span>
            </div>
        </div>
    </div>
</div>



	<?php get_footer(); ?>
