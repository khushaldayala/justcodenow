<?php
/**
 * Template Name: Team Design
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>

<?php get_header(); ?>
	<div class="header4">
      <div class="main-head">
        <div class="container">
            <div class="intro-text">
            	<h1 class="hover-spacing">Meet our innovative Team</h1>
                <p style="font-size: 13pt">
                    <?php echo get_field( "sub_title" ); ?>We have certified developers with more than 10+ years of experience in digital agency.
                </p>
                <p style="font-size: 13pt">
                Our team draws on board industry experience and networks to create the most powerful outcomes for our clients.
                </p>
                <div class="for-start-btn"> 
                    <a href="#team-section" class="page-scroll btn next-step">
                        Meet Our Team
                    </a> 
                </div>
            </div>
             <a href="#team-section" class="page-scroll">
                      <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri()?>/images/bounce.png"> </div>
                      </a>
        </div>
        
      </div>
    </div>

      <div class="meet-our-team" id="team-section">
          <div class="container">
              <div class="row">
                   <?php
// Check rows exists.
        if( have_rows('founder_repeater','option') ):
        $i=1;
            while( have_rows('founder_repeater','option') ) : the_row();
             $founder_members_image = get_sub_field('founder_image')['url'];
        $founder_members_title = get_sub_field('founder_title');
        $founder_members_designation = get_sub_field('founder_designation');
         $founder_members_linkdin = get_sub_field('founder_linkd');?>
         <div class="col-sm-12 col-md-6 col-lg-4 col-xs-12 flip_container">
            <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                              <?php if($founder_members_image){?>
                            <img src="<?php echo $founder_members_image;?>" alt="Avatar" style="width:100%;height:100%;">
                              
                                  <?php }else{ ?>
                                  <span class="employee-img cover-bg" style="background-image:url(<?php echo get_template_directory_uri()?>/images/no-image.jpg)">
                                  
                                  <?php } ?>
                                  <img src="<?php echo get_template_directory_uri() ?>/images/placeholder10x10.jpg" alt=""></span>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                     <h5 class="card-title"><?php echo $founder_members_title;?></h5>
                                     <h6 class="card-subtitle mb-2 text-muted"><?php echo $founder_members_designation;?></h6>
                                     <p class="card-text"></p>
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                           </div>
                        <div class="flip-card-back">
                            <div class="form-group p-5">
                                <h1 class="m-0"><a href="<?php echo $founder_members_linkdin;?>" target="_blank"><i  class="fa fa-linkedin-square" style="font-size:26px;color:#4285F4"></i></a> </h1>
                            
                         <h1 class="m-0"></h1>
                          <h4 class="m-0"></h4>
                              <span class="employee-position"></span>
                              <?php        
                              
									// Check rows exists.
							if( have_rows('founder_sub_field') ):?>
                              <ul class="employee-skill">
                                  <?php while( have_rows('founder_sub_field') ) : the_row();?>
                                  <li><?php echo get_sub_field('founder_sub_field_data');?></li>
                                  <?php // Do something...
        
								// End loop.
								endwhile;?>
                              </ul>
                             
                               <?php // Do something...
endif;
?>

                              </div>  
                        </div>      
                          </div>
                      </div>
                  </div>
         
            
              
             
               <?php // Do something...
        $i++;
    // End loop.
    endwhile;?>
      
      <?php // Do something...
endif;
?>
                  
                  
                  
              </div>
          </div>
      </div>
       
   

<?php get_footer(); ?>
