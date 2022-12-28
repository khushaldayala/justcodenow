<?php get_header(); ?>

  <div class="header4">
        <!--<video class="video-adjust video-res" width="100" autoplay loop>
		<source src="<?php echo get_template_directory_uri() . '/'; ?>video/DS_WWD_Masthead.mp4" type="video/mp4">
		<source src="<?php echo get_template_directory_uri() . '/'; ?>video/Mock-up.webm" type="video/webm">
		Your browser does not support HTML5 video. </video>-->
        <div class="main-head">
            <div class="container">
                <div data-aos="zoom-in" data-aos-duration="800">
                    <div class="intro-text">
                        <div class="arpatech-logo"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/favicon-icon.png" alt=" World&#39;s Finest Technology Hub"></div>
                        <h1>Where your dreams<br> become reality</h1>
                        
                     <div class="for-start-btn"> 
                        <a href="#services" class="page-scroll btn next-step2">
    					 View Services 
    					</a> 
    					<a href="#portfolio" class="page-scroll btn next-step">
    					 View Portfolio
    					</a> 
                   </div>
                    </div>
                </div>
                <a href="#services" class="page-scroll">
                    <div class="arrow"> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png" alt="page-scroll"> </div>
                </a> 
            </div>
        </div>
        <!--<div id="particles-js"></div>-->
    </div>

    <!-- Services Section -->
    <section id="services" class="second-sec-main">
        <div class="container">
            <div data-aos="fade-down" data-aos-duration="800">
                <div class="specialities">
                    <h2><?php the_field('we_are_expert_title'); ?></h2>
                    <p><?php the_field('we_are_expert_description'); ?></p>
                </div>
            </div>
              <?php        
           
// Check rows exists.
if( have_rows('services_section') ):
$i=1;?>
            <div class="row">
                 <?php  while( have_rows('services_section') ) : the_row();
               $services_image = get_sub_field('services_image')['url'];?>
                <div class="col-sm-4" data-aos="fade-right" data-aos-duration="800">
                    <div class="box">
                        <?php echo get_sub_field('services_icon');?>
                        
                       <!-- <img src="<?php echo $services_image;?>" alt="alternate text for image">-->
                        <?php 
$link = get_sub_field('services_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                        
                    </div>
                </div>
                <?php // Do something...
$i++;
    // End loop.
    endwhile;?>
            
            </div>    
            <?php // Do something...
endif;
?>
        </div>
    </section>
    <!--<div class="full-expert" id="hidden">
        <div data-aos="zoom-in" data-aos-duration="800">
            <div class="container">
                <div class="row">
                    <div class="expert">
                        <div class="col-md-4">
                            
                            <?php the_field('expert_content'); ?>
                          
                        </div>
                        <div class="email-live"> <a class="callnow" href="tel:+9879637979"><i class="fa fa-mobile"></i> <?php the_field('expert_mobile_number'); ?></a> </div>
                        <div class="email-live-3"> <a href="mailto:<?php the_field('expert_email_address'); ?>"><i class="fa fa-envelope-o"></i> Email Us</a> </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
   <?php /* <div class="container-fluid">
        <div class="row">
             <div data-aos="zoom-out-right" data-aos-duration="800"> 
                <div class="col-md-12 magento-right-sec equlHeight">
                    <div class="certified"> <img alt="Magento Certified Agency" src="<?php echo get_field('magento_image')['url'];?>" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        <h2><?php echo get_field('magento_title');?> </h2>
                        <span><?php echo get_field('magento_sub_title');?></span>
                        <?php echo get_field('magento_description');?>
                    </div>
                </div>
             </div> 
          
        </div>
    </div> */?>


    

<?php get_footer(); ?>
