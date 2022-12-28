<?php
/**
 * Template Name: Mobile App Development
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php get_header(); ?>

<div class="header3">
    <video class="video-adjust" width="100" autoplay loop>
                   <source src="<?php echo get_template_directory_uri() . '/'; ?>video/DS_WWD_Masthead.mp4" type="video/mp4">
					<source src="<?php echo get_template_directory_uri() . '/'; ?>video/Mock-up.webm" type="video/webm">
                    Your browser does not support HTML5 video. </video>
    <div class="main-head for-video-head">
        <div class="container">
            <div class="intro-text">
                 <h1><?php echo get_field( "banner_main_text" );?></h1>
                    <p><?php echo get_field( "banner_sub_text" );?></p>
              
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
                <div class="arrow"> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png" alt="bounce"> </div>
            </a>
        </div>
    </div>
</div>
<div class="fusion-fullwidth" id="second-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8 pull-right text-center">
                <div class="mobile-first-main">
                    <h3><?php echo get_field( "desired_service_title" );?></h3>
                    <h5><?php echo get_field( "desired_service_sub_title" );?></h5>
                    <div class="mobile-box-main">
                             <?php               // Check rows exists.
if( have_rows('desired_service_repeater') ):

    // Loop through rows.
    while( have_rows('desired_service_repeater') ) : the_row();

        // Load sub field value.
        $desired_service_logo = get_sub_field('desired_service_logo')['url'];
        $desired_service_title = get_sub_field('desired_service_title');
        $desired_service_description = get_sub_field('desired_service_description');
        ?>
       
                      <div class="col-md-6 text-center">
                            <div class="mobile-box"> <img src="<?php echo $desired_service_logo; ?>" alt="mobile">
                                <h4><?php echo $desired_service_title;?></h4>
                                 <p><?php echo $desired_service_description;?></p> 
                                              <?php 
$link = get_sub_field('desired_service_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
     <!--<a href="<?php echo esc_url( $link_url ); ?>" class="page-scroll">start your project</a>-->
    <a href="<?php echo esc_url( $link_url ); ?>" class="page-scroll">
        <?php echo esc_html( $link_title ); ?>
                          </a>
   
<?php endif; ?> 
                                <!--<a href="#contact" class="page-scroll">start your project</a> </div>-->
                        </div>
                        </div>

    <?php // End loop.
    endwhile;

// No value.
    // Do something...
endif;?>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fusion-fullwidth2">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8 pull-right text-center">
                <div class="mobile-second-main">
                    <h3><?php echo get_field( "delightful_apps_title" );?></h3>
                     <p><?php echo get_field( "delightful_apps_sub_title" );?> </p>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="sid-flower animated-steps animated" data-class="rotateInDownRight"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/logos/flower.png" alt="flower"></div>
</div>
<div class="fusion-fullwidth3">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8 pull-right text-center">
                <div class="mobile-second-main">
                    <h3 class="for-bottom-line"><?php echo get_field( "pixel_resonates_your_brand_title" );?></h3>
                     <p><?php echo get_field( "pixel_resonates_your_brand_sub_title" );?></p> 
                   
                </div>
            </div>
        </div>
    </div>
    <div class="sid-flower1 animated-steps animated" data-class="rotateInDownRight"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/logos/image.png" alt="flower1"></div>
</div>
<div class="section secourWork" data-var="ourwork">
    <div class="container">
        <h3 class="text-center marBot"><?php echo get_field( "we_know_it_title" );?></h3>
        <p class="lets-make text-center"><?php echo get_field( "we_know_it_sub_title" );?></p>
       
        <br class="clearfix">
                <div class="swiper-container hvr-toptobot">
       <div class="swiper-wrapper">
                 <?php               // Check rows exists.
if( have_rows('we_know_slider') ):

    // Loop through rows.
    while( have_rows('we_know_slider') ) : the_row();

        // Load sub field value.
         $slider_image1 = get_sub_field('slider_image')['url'];
       
        ?>
       
                  <div class="swiper-slide"><img src="<?php echo $slider_image1;?>" width="212" height="378" alt="Our Work Slide 5"></div>

    <?php // End loop.
    endwhile;

// No value.
    // Do something...
endif;?>
            
              
                
            </div>
        </div>

        <span class="swiper-button-next">Next</span>
        <span class="swiper-button-prev">Prev</span>

    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="process-me">
                <h3><?php echo get_field( "for_success_title" );?></h3>
                <div class="div-big">
                    <img class="images-responsive" src="<?php echo get_field('for_success_image')['url']; ?>" alt="success title">
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>