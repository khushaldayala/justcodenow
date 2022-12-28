<?php
/**
 * Template Name: Digital marketing
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */ 
 
?>
<?php get_header(); ?>   

<div class="banner-main-1">
        <div class="drupal-header-main">
            <div class="drupal-header">
                <div class="container">
                    <div class="intro-text col-md-12 soft-top-mar">
                        <!-- <img src="images/cms/dot1-icon.png" alt="don net icon"> -->
                        <h1 class="providing-head"><?php echo get_field( "digital_marketing_title" );?></h1>
                         <p><?php echo get_field( "digital_marketing_sub_title" );?> </p>
                        <!--<a href="#" class="view-del">view detail ></a>-->
                        <div class="for-start-btn">
                            <?php 
$link = get_field('digital_marketing_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="page-scroll btn next-step" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
    <a class="page-scroll btn next-step2" href="#our-packages" >Our Packages</a>
                          
                           <!-- <a href="#second-sec" class="page-scroll ecommerce-btn-top">view detail ></a>-->
                        </div>
                    </div>
                   <?php/* <div class="col-md-5">
                         <?php echo do_shortcode('[contact-form-7 id="1461" title="Free Quote Now"]');?>
                    </div> */?>
                    <a href="#second-sec" class="page-scroll">
                      <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri()?>/images/bounce.png"> </div>
                      </a></div>
            </div>
        </div>
         
    </div>
    <input type="hidden" id="base_url" value="">
    <!-- Services Section -->
    <div class="main-clor" id="second-sec">
        <div class="container">
            <div class="row">
                <div class="choose-us-main">

                    <!-- <h5>And Let us worry about the rest! </h5> -->
                    <div class="drupal-dev-main">
                        <div class="col-md-7 animated-steps animated slideInLeft" data-class="slideInLeft" style="opacity: 1;">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'; ?>images/cms/digital.gif" alt="digital">
                        </div>
                        <div class="col-md-5 animated-steps animated slideInRight" data-class="slideInRight" style="opacity: 1;">
                            <h2 class="wordpress-heading-dev"><?php echo get_field( "who_we_are_title" );?></h2>
                            <div class="dev-text1"><?php echo get_field( "who_we_are_description" );?></div>
                            <div class="col-md-12 text-center">
                                <?php 
$link = get_field('who_we_are_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="drupal-started wordpress-started page-scroll" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                              <!--  <a href="#contact" class="drupal-started wordpress-started page-scroll">get started</a>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contrainer-fluid approach-agile text-center">
        <div class="container">
            <div class="row">
                <h3>  <?php echo get_field( "leverage_growth_title" );?></h3>
                 <?php echo get_field( "leverage_growth_description_" );?> 
                <div class="approach-agile col-md-12">
<?php  

// Check rows exists.
if( have_rows('leverage_growth_repeater') ):

    // Loop through rows.
    while( have_rows('leverage_growth_repeater') ) : the_row();

        // Load sub field value.
        $leverage_growth_repeater_image = get_sub_field('leverage_growth_repeater_image')['url'];
        $leverage_growth_repeater_title = get_sub_field('leverage_growth_repeater_title');
        $leverage_growth_repeater_description = get_sub_field('leverage_growth_repeater_description');?>
        <div class="col-md-3">
                        <div class="approach-box">
                            <img src="<?php echo $leverage_growth_repeater_image;?>" alt="Human Centered Design" >
                            <h4><?php echo $leverage_growth_repeater_title;?></h4>
                             <?php echo $leverage_growth_repeater_description;?>
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
 
    <div class="main-clor main-clor-2" id="second-sec">
        <div class="container">
            <div class="row">
                <div class="choose-us-main">

                    <!-- <h5>And Let us worry about the rest! </h5> -->
                    <div class="drupal-dev-main">
                        <div class="col-md-7 animated-steps animated slideInLeft" data-class="slideInLeft" style="opacity: 1;">
                            <img class="img-responsive" style="width: 400px; margin: 0 auto;" src="<?php echo get_field( "strategic_search_optimization_left_image" )['url'];?>" alt="Strategic Search Optimization">
                        </div>
                        <div class="col-md-5 animated-steps animated slideInRight" data-class="slideInRight" style="opacity: 1;">
                            <h2 class="wordpress-heading-dev"> <?php echo get_field( "strategic_search_optimization_right_title" );?></h2>
                            <div class="dev-text1"><?php echo get_field( "strategic_search_optimization_description" );?></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-clor main-clor-2" id="second-sec">
        <div class="container">
            <div class="row">
                <div class="choose-us-main">

                    <!-- <h5>And Let us worry about the rest! </h5> -->
                    <div class="drupal-dev-main">

                        <div class="col-md-5 animated-steps animated slideInRight" data-class="slideInRight" style="opacity: 1;">
                            <h2 class="wordpress-heading-dev"><?php echo get_field( "social_platforms_left_title" );?></h2>
                            <div class="dev-text1"><?php echo get_field( "social_platforms_description" );?></div>

                        </div>
                        <div class="col-md-7 animated-steps animated slideInLeft" data-class="slideInLeft" style="opacity: 1;">
                            <img class="img-responsive" style="width: 400px; margin: 0 auto;" src="<?php echo get_field( "social_platforms_right_section_image" )['url'];?>" alt="Unlock the Power of Social Platforms">
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
                    <h2><?php echo get_field( "your_growth_title" );?></h2>
                    <div class="content-details modern-ecommerce_icons">
                        <?php

// Check rows exists.
if( have_rows('your_growth_repeater') ):

    // Loop through rows.
    while( have_rows('your_growth_repeater') ) : the_row();

        // Load sub field value.
        $your_growth_repeater_image = get_sub_field('your_growth_repeater_image')['url'];
        $your_growth_repeater_title = get_sub_field('your_growth_repeater_title');
        $your_growth_repeater_description = get_sub_field('your_growth_repeater_description');
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
<div class="our-packages" id="our-packages">
     <div class="container">
         <div class="row">
             <div class="col-sm-12">
                <div class="section-title">
                    <h2 class="title"><?php echo get_field('our_package_title');?></h2>
                </div>
                 <div class="packages-table">
                     <table>
                         <tr>
                             <th>SEO Packages</th>
                             <th>SEO Starter</th>
                             <th>SEO Advance</th>
                             <th>SEO Premium</th>
                         </tr>
                          <?php

// Check rows exists.
if( have_rows('our_packages') ):
    while( have_rows('our_packages') ) : the_row();
    ?>
                         <tr>
                             <td data-th="SEO Packages"><?php echo get_sub_field('seo_packages');?></td>
                             <td data-th="SEO Starter"><?php echo get_sub_field('seo_starter');?></td>
                             <td data-th="SEO Advance"><?php echo get_sub_field('seo_advance');?></td>
                             <td data-th="SEO Premium"><?php echo get_sub_field('seo_premium');?></td>
                         </tr>
                        <?php  endwhile;
                        endif;?>
                      
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>

	<?php get_footer(); ?>
