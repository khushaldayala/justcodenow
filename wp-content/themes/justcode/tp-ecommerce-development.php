<?php
/**
 * Template Name: Ecommerce Development
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php get_header(); ?>

 <div class="banner-main-1">
        <div class="drupal-header-main">
            <div class="main-head for-video-head">
                <div class="container">
                    <div class="intro-text col-md-12 soft-top-mar">
                        <!-- <img src="images/cms/dot1-icon.png" alt="don net icon"> -->
                        <h1 class="providing-head"><?php echo get_field( "ecommerce_development_title" );?></h1>
                         <?php echo get_field( "ecommerce_development_description" );?> 
                        <!--<a href="#" class="view-del">view detail ></a>-->
                        <div class="for-start-btn">
                              <?php 
$link = get_field('ecommerce_development_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="page-scroll btn next-step" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                           <!-- <a href="#second-sec" class="page-scroll ecommerce-btn-top">view detail ></a>-->
                        </div>
                    </div>
                    <?/*<div class="col-md-5">
                          <?php echo do_shortcode('[contact-form-7 id="1461" title="Free Quote Now"]');?>
                    </div> */?>
                    <a href="#second-sec" class="page-scroll">
                      <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri()?>/images/bounce.png"> </div>
                      </a></div>
                      
            </div>
        </div>
      <?php /*  <div class="meetup-bar">
            <div class="container">
                <div class="meetup-inner">
                    <ul class="left-side">
                        <li>
                            <h2><?php echo get_field( "meetup-inner_left_1" );?></h2>
                        </li>
                         
                        <li>
                            <img src="<?php echo get_field( "meetup-inner_left_2" )['url'];?>" alt="Magento Certified partner">
                        </li>
                    </ul>
                    <ul class="right-side">

                        <li>
                            <img src="<?php echo get_field( "meetup-inner_right_1" )['url'];?>" alt="Official Organizer">
                        </li>
                        <li>
                            <h2><?php echo get_field( "meetup-inner_right_2" );?></h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div> */?>
    </div>
    <input type="hidden" id="base_url" value="">
    <!-- Services Section -->
    <div class="main-clor" id="second-sec">
        <div class="container">
            <div class="row">
                <div class="choose-us-main">

                    <!-- <h5>And Let us worry about the rest! </h5> -->
                    <div class="drupal-dev-main">
                        <div class="col-sm-6 animated-steps animated slideInLeft" data-class="slideInLeft" style="opacity: 1;">
                            <img class="images-responsive" src="<?php echo get_template_directory_uri() . '/'; ?>images/team/ecom1.gif" alt="Innovative Ecommerce">
                        </div>
                        <div class="col-sm-6 animated-steps animated slideInRight" data-class="slideInRight" style="opacity: 1;">
                            <h2 class="wordpress-heading-dev"><?php echo get_field( "custom_ecommerce_development_right_title" );?></h2>
                            <div class="dev-text1"><?php echo get_field( "custom_ecommerce_development_right_description" );?></div>
                            <div class="col-md-12 text-center">
                              <!--  <a href="#contact" class="drupal-started wordpress-started page-scroll">get started</a>-->
                                 <?php 
$link = get_field('custom_ecommerce_development_right_button_link');
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
    </div>


    <div class="contrainer-fluid technology-stack-bg">
        <div class="container">
            <div class="row">
                <div class="technology-stack-main">
                   
                    
                    <h3> <?php echo get_field( "technology_stack_title" );?></h3>
                    <?php echo get_field( "technology_stack_description" );?>
                    <div class="cms-logo">
                        <?php  
// Check rows exists.
if( have_rows('technology_stack_repeater') ):
    // Loop through rows.
    while( have_rows('technology_stack_repeater') ) : the_row();
        // Load sub field value.
        $technology_stack_image = get_sub_field('technology_stack_image')['url'];
     ?>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <img src="<?php echo $technology_stack_image; ?>" alt="drupal">
                        </div>
                           <?php // Do something...

    // End loop.
    endwhile;
endif;?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-clor main-clor-2" id="second-sec2">
        <div class="container">
            <div class="row">
                <div class="choose-us-main">

                    <!-- <h5>And Let us worry about the rest! </h5> -->
                    <div class="drupal-dev-main ">
                        <div class="col-sm-6 animated-steps animated slideInLeft" data-class="slideInLeft" style="opacity: 1;">
                            <img class="images-responsive" src="<?php echo get_template_directory_uri() . '/'; ?>images/cms/shopping.gif" alt="Innovative Ecommerce">
                        </div>
                        <div class="col-sm-6 animated-steps animated slideInRight" data-class="slideInRight" style="opacity: 1;">
                            <h2 class="wordpress-heading-dev"><?php echo get_field( "dedicated_ecommerce_developers_right_title" );?></h2>
                            <div class="dev-text1"><?php echo get_field( "dedicated_ecommerce_developers_right_description" );?></div>
                            <div class="col-md-12 text-center">
                                  <?php 
$link = get_field('dedicated_ecommerce_developers_button_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="drupal-started wordpress-started page-scroll" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                                <!--<a href="#contact" class="drupal-started wordpress-started page-scroll">get started</a>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="our_solution" id="section05">
        <div class="container">
            <div class="row">
                <div class="sixteen columns">
                    <h2><?php echo get_field( "ecommerce_services_title" );?></h2>
                    <div class="content-details modern-ecommerce_icons">
                                                <?php

// Check rows exists.
if( have_rows('ecommerce_services_repeater') ):

    // Loop through rows.
    while( have_rows('ecommerce_services_repeater') ) : the_row();

        // Load sub field value.
        $your_growth_repeater_image = get_sub_field('ecommerce_services_image')['url'];
        $your_growth_repeater_title = get_sub_field('ecommerce_services_title');
        $your_growth_repeater_description = get_sub_field('ecommerce_services_description');
        ?>
        <div class="five columns our_border col-md-4">
                            <div class="our_icon"><img src="<?php echo $your_growth_repeater_image;?>" alt="Brand Design & Development"></div>
                            <h4 class="icon-header">
                                <?php echo $your_growth_repeater_title;?>
                                
                            </h4>
                            <div class="full-content">
                                <?php echo $your_growth_repeater_description;?>
                               
                            </div>
                        </div>
        <?php // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;?>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php get_footer(); ?>
