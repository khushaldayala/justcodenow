<?php
/**
 * Template Name: Startup
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php get_header(); ?>

     <div class="drupal-header-main">
        <div class="main-head for-video-head">
            <div class="container">
                <div class="intro-text col-md-12 text-center soft-top-mar">

                    <h1><?php echo get_field( "banner_main_title" );?></h1>
                
                    
                    <div class="for-start-btn">
                          <?php 
$link = get_field('banner_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="page-scroll btn next-step" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?> 
                        <!--<a href="#second-sec" class="page-scroll wordpress-btn-top">view detail ></a>-->
                    </div>
                </div>
                <a href="#second-sec" class="page-scroll">
                      <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri()?>/images/bounce.png"> </div>
                      </a>
              </div>
        </div>
    </div>
    
    <div class="main-clor" id="second-sec">
        <div class="container">
            <div class="row">
                <div class="choose-us-main web-design-development-custom">
                    <h2 class="wordpress-heading-dev"><?php echo get_field( "startup_title" );?></h2>
                    <!-- <h5>And Let us worry about the rest! </h5> -->
                    <div class="drupal-dev-main">
                        <div class="col-md-6 animated-steps animated" data-class="slideInLeft">
                            <img class="images-responsive" style="width: 500px;" src="<?php echo get_field( "startup_left_image" )['url'];?>" alt="STARTUPS">
                        </div>
                        <div class="col-md-6 animated-steps animated" data-class="slideInRight">
                            <p class="dev-text1 dev-text-start"><?php echo get_field( "startup_right_content" );?></p>
                        </div>
                        <div class="col-md-12 text-center">
                            <?php 
$link = get_field('startup_right_button_link');
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
    <div class="container-fluid creation-main creation-main-all text-center">
        <div class="container">
            <div class="row">
                <h2><?php echo get_field( "what_we_offer_title" );?></h2>
                
                <div class="support-main-dev">
      <?php               // Check rows exists.
if( have_rows('what_we_offer_repeater') ):

    // Loop through rows.
    while( have_rows('what_we_offer_repeater') ) : the_row();

        // Load sub field value.
        $what_we_offer_repeater_image = get_sub_field('what_we_offer_repeater_image')['url'];
        $what_we_offer_repeater_title = get_sub_field('what_we_offer_repeater_title');
        $what_we_offer_repeater_descrption = get_sub_field('what_we_offer_repeater_descrption');
        ?>
        <div class="col-md-4 text-center">
                        <div class="support-dev support-dev-start">
                            <img src="<?php echo $what_we_offer_repeater_image;?>" alt="Web Development">
                            <h3><?php echo $what_we_offer_repeater_title;?></h3>
                            <?php echo $what_we_offer_repeater_descrption;?>

                        </div>
                        <div class="col-md-12 text-center">
                                                        <?php 
$link = get_sub_field('what_we_offer_repeater_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="start-started page-scroll" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?> 
                      
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
    <div class="need-ecommerce-main outsource-wordpress container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animated-steps animated" data-class="slideInLeft">
                    <div class="need-ecommerce-left wordpress-ecom-left">
                        <h2><?php echo get_field( "incubation_&_funding_title" );?></h2>
                         <?php echo get_field( "incubation_&_funding_description" );?> 
                        <?php 
$link = get_field('incubation_&_funding_link');
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
                <div class="col-md-7 animated-steps animated" data-class="slideInRight">
                    <div class="need-ecommerce-right">
                        <img class="images-responsive" src="<?php echo get_field( "incubation_&_funding_image" )['url'];?>" alt="Incubation & Funding" >
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container-fluid wordpress-service">
        <div class="container">
            <div class="row text-center">
                <h2 class="wordpress-heading-dev"> <?php echo get_field( "services_title" );?></h2>
                <!-- <p class="wordpress-tagline">Our expert Wordpress Development Team ensures to serve your website a perfect landscape <br>for continued business growth.</p> -->
                <div class="wordpress-service-main col-md-10 col-md-offset-1">
                    <?php               // Check rows exists.
if( have_rows('services_repeater') ):

    // Loop through rows.
    while( have_rows('services_repeater') ) : the_row();

        // Load sub field value.
        $services_image = get_sub_field('services_image')['url'];
        $services_title = get_sub_field('services_title');
        $services_description = get_sub_field('services_description');
        ?>
       
                    <div class="col-md-4 col-sm-4">
                        <div class="wordpress-box">
                            <img class="contrast" src="<?php echo $services_image; ?>" alt="Dedicated Mentorship">
                            <h3><?php echo $services_title; ?></h3>
                             <p><?php echo $services_description; ?></p> 
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

	<?php get_footer(); ?>
