<?php
/**
 * Template Name: Careers Design
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>

<?php get_header(); ?>
	 

    <div class="header4 careers-header">
      <div class="main-head">
        <div class="container">
            <div class="intro-text">
                <?php /* <img src="<?php echo get_template_directory_uri()?>/images/favicon-icon.png" alt=""> */ ?>
            	<h1 class="hover-spacing"> Life at JustCode</h1>
               <p>At JustCode we believe more in investing in our employees, their learning makes an impact to organization mission. Team work culture where challenges are seen as new learning &amp; our work reflect our mission.</p>
                <p style="font-size: 13pt">
                    <?php echo get_field( "sub_title" ); ?>
                </p>
                <div class="for-start-btn"> 
                    <a href="#job-section2" class="page-scroll btn next-step">
                        See Vacancies
                    </a> 
                </div>
                <a href="#job-section" class="page-scroll">
                      <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri()?>/images/bounce.png"> </div>
                      </a>
            </div>
        </div>
        
      </div>
    </div>
    
<!--<div class="job-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <div class="job-content">
                <h2>Life at JustCode </h2>  
                <p>At JustCode we believe more in investing in our employees, their learning makes an impact to organization mission. Team work culture where challenges are seen as new learning &amp; our work reflect our mission.</p>
                 
            </div>
            </div>
        </div>
    </div>
<div class="value-section">
   <div class="section-title"><h2>Why work with us?</h2></div>
    <div class="container">
        <div class="left-block">
            <div class="left-cont">
                <ul>
                    <li>14 paid leave yearly</li>
                    <li>7 sick leave yearly</li>
                    <li>11 public holidays yearly</li>
                </ul>
            </div>
            <div class="left-cont">
                <ul>
                <li>Opportunity to implement your ideas for the improvement in all around. your voice is being heard.</li>
                </ul>
            </div>
        </div>
        <div class="center-block">
            <img src="<?php echo get_template_directory_uri()?>/images/job-img.png" alt="">
        </div>
        <div class="right-block">
            <div class="right-cont">
                <ul>
                    <li>1st and 3rd Saturday leave.</li>
                    <li>Encouragement of flexible timings.</li>
                    <li>Company cultural activities.</li>
                </ul>
                
            </div>
            <div class="right-cont">
                
                <ul>
                <li>Unlimited growth opportunity.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>-->
<div class="value-section" id="job-section">
   <div class="section-title"><h2>Why work with us?</h2></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="block-value cover-bg" style="background-image:url(<?php echo get_template_directory_uri()?>/images/vacation-time.jpg)">
                    <img src="<?php echo get_template_directory_uri()?>/images/placeholder.jpg" alt="">
                    <div class="block-value-hover">
                        <ul>
                            <li>14 paid leave yearly</li>
                            <li>7 sick leave yearly</li>
                            <li>11 public holidays yearly</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="block-value cover-bg" style="background-image:url(<?php echo get_template_directory_uri()?>/images/culture-improvement-ideas.jpg)">
                    <img src="<?php echo get_template_directory_uri()?>/images/placeholder.jpg" alt="">
                    <div class="block-value-hover">
                        <ul>
                           <li>5 days Working.</li>
                           <li>Encouragement of flexible timings.</li>
                           <li>Company cultural activities.</li>
                       </ul>                    
                   </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="block-value cover-bg" style="background-image:url(<?php echo get_template_directory_uri()?>/images/implement-your-ideas.jpg)">
                    <img src="<?php echo get_template_directory_uri()?>/images/placeholder.jpg" alt="">
                    <div class="block-value-hover">
                        <ul>
                            <li>Opportunity to implement your ideas for the improvement in all around. your voice is being heard.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="block-value cover-bg" style="background-image:url(<?php echo get_template_directory_uri()?>/images/unlimited-growth-opportunity.jpg)">
                    <img src="<?php echo get_template_directory_uri()?>/images/placeholder.jpg" alt="">
                    <div class="block-value-hover">
                        <ul>
                            <li>Unlimited growth opportunity.</li>
                             
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="join-our-team">
    <div class="container">
      <div class="row">
       <div class="col-sm-6">
        <div class="team-image">
            <img src="<?php echo get_template_directory_uri()?>/images/office-workers.jpg" alt="">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="team-content">
            <p>We’re ambitious team, offers a fun and supportive culture where employees bring out the best from each other.</p>
                
        </div>
        </div>
        </div>
      <div class="row">
       <div class="col-sm-6">
        <div class="team-image">
            <img src="<?php echo get_template_directory_uri()?>/images/career-growth.jpg" alt="">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="team-content">
            <p>We have been successful to create an environment where all employees are heard and we get the best out of those who are ready to take challenges and improve, In short we provide plenty of growth opportunity.</p>
        </div>
        </div>
        </div>
    </div>
</div>
<?php if(is_page( 'careers' )){?>
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
    if($testimonials_type =='employee'){
    ?>
                  <li class="dot <?php if($j==1){ echo 'active';  } ?>"></li>
                 
                  <?php }// Do something...
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
    if($testimonials_type =='employee'){
        
        ?>
        <!--<div class=<?php //if($i==1){ ?>"active" <? //php } ?>>-->
        <div class="<?php if($i==1){ ?>active <?php } ?>">
                    <div class="img"><img src="<?php echo $testimonials_image;?>" alt=""></div>
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
<?php }?>
<div class="job-listing" id="job-section2">
    <div class="container">
       <div class="row">
           <h2>Current Openings</h2>
       </div>
       <?php if( have_rows('careers_jobs') ):?>
        <div class="row">
            <?php while( have_rows('careers_jobs') ) : the_row();?>
            <div class="col-sm-6">
               <div class="job-desk">
                <h3><?php echo get_sub_field('careers_job_title');?></h3>
                <p>Experience : <?php echo get_sub_field('careers_job_experience');?></p>
                <p><strong>Location:</strong> <?php echo get_sub_field('careers_job_location');?></p>
                <?php 
$link = get_sub_field('careers_job_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
               <!-- <a class="btn btn-primary" href="mailto:hr@justcodenow.com">Apply Now</a> -->
               </div>
            </div>
            <?php endwhile;?>
          
           
            
            
            
            
            
           
        </div>
        <?php endif;?>
    </div>
</div>

<?php get_footer(); ?>
