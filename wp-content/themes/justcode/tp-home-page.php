<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>

<?php get_header(); ?>

  <div class="header4">
        <!--<video class="video-adjust video-res" width="100" autoplay loop>
		<source src="<?php //echo get_template_directory_uri() . '/'; ?>video/DS_WWD_Masthead.mp4" type="video/mp4">
		<source src="<?php //echo get_template_directory_uri() . '/'; ?>video/Mock-up.webm" type="video/webm">
		Your browser does not support HTML5 video. </video>-->
        <div class="main-head">
            <div class="container">
                <div data-aos="zoom-in" data-aos-duration="800">
                    <div class="intro-text">
                        <h1>Where your dreams<br> become reality</h1>
                        
                     <div class="for-start-btn"> 
                        <a href="#services" class="page-scroll btn next-step2">
    					 View Services 
    					</a> 
    					<a href="https://www.justcodenow.com/portfolio/" class="page-scroll btn next-step">
    					Our Work
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
   
<div class="review-main-outer">   
<div class="review-section">
   <div class="container ">
       <div class="row">
           <div class="col-sm-6 review-block">
               
               <a href="<?php echo get_field('upwork_link');?>" target="_blank"><img src="<?php echo get_field('upwork_image')['url'];?>" alt="Upwork"></a>
               
               <p><?php echo get_field('upwork_text');?></p>
           </div>
           <div class="col-sm-6 review-block">
                
               <a href="<?php echo get_field('clutch_link');?>" target="_blank"><img src="<?php echo get_field('clutch_image')['url'];?>" alt="Clutch"></a>
              
               <p><?php echo get_field('clutch_text');?></p>
           </div>
       </div>
   </div>
</div>    
<div class="home-page-testimonial">
    <div class="Testimonial_section">
    <div data-aos="fade-up-left" data-aos-duration="800">
      <div class="testimonial_content equal_height" style="height: 386.781px;">
        <div id="testim" class="testim">
            <div class="wrap">
              <span id="right-arrow" class="arrow right fa fa-angle-right"></span>
              <span id="left-arrow" class="arrow left fa fa-angle-left"></span>
              <ul id="testim-dots" class="dots">
                  <?php        
           
// Check rows exists.
if( have_rows('testimonials_repeater','option') ):
$j=1;
    // Loop through rows.
    while( have_rows('testimonials_repeater','option') ) : the_row();
     $testimonials_type = get_sub_field('testimonials_type');
    if($testimonials_type =='customer'){
    ?>
    
                  <li class="dot <?php if($j==1){ echo 'active';  } ?>"></li>
                 
                  <?php 
                  }// Do something...
$j++;
    // End loop.
    endwhile;
    // Do something...
endif;
?>
              </ul>
              <div id="testim-content" class="cont">
           <?php        
           
// Check rows exists.
if( have_rows('testimonials_repeater','option') ):
$i=1;
    // Loop through rows.
    while( have_rows('testimonials_repeater','option') ) : the_row();

        // Load sub field value.
        $testimonials_image = get_sub_field('testimonials_image')['url'];
        $testimonials_title = get_sub_field('testimonials_title');
        $testimonials_content = get_sub_field('testimonials_content');
        $testimonials_type = get_sub_field('testimonials_type');
        if($testimonials_type =='customer'){
        ?>
        <!--<div class=<?php //if($i==1){ ?>"active" <? //php } ?>>-->
        <div class="<?php if($i==1){ ?>active <?php } ?>">
                    <div class="img"><img src="<?php echo $testimonials_image;?>" alt="Testimonials"></div>
                    <h2><?php echo $testimonials_title;?></h2>
                     <?php echo $testimonials_content;?>                     
                </div>
        <?php } // Do something...
$i++;
    // End loop.
    endwhile;
    // Do something...
endif;
?>
            </div>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>

<?php get_footer(); ?>
