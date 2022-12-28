<?php if(is_page( 'home' )){?><?php /* <div class="main-portfolio" id="portfolio">
   <div class="container">
        <div class="row">
          <div data-aos="fade-down" data-aos-duration="800">
            <div class="col-md-7">
                <h2 class="section-heading">Award Winning Projects</h2>                
            </div>
            <div class="col-md-5">
                <ul class="new-filter">
                    <li>
                        <button class="filter btn active" data-filter="all">All</button>
                    </li>
                    <li>
                        <button class="filter btn" data-filter=".category-1">Website</button>
                    </li>
                    <li>
                        <button class="filter btn" data-filter=".category-2">Mobile app</button>
                    </li>

                </ul>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
      <div data-aos="zoom-in-up" data-aos-duration="800">
        <div id="Container" class="filter-gallery">
        <div class="row">
            <div class="mix category-1 col-xs-6 col-sm-4 col-md-3" data-my-order="2" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/lysse.jpg" data-fancybox="group" data-caption="<a href='https://www.lysse.com/' target='_blank'>lysse</a>"> <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/lysse.jpg"></a> </div>
            <div class="mix category-1 col-xs-6 col-sm-4 col-md-3" data-my-order="1" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/roderickcharles.jpg" data-fancybox="group" data-caption="<a href='https://www.roderickcharles.com/' target='_blank'>roderickcharles</a>"><img class="img-responsive oyee" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/roderickcharles.jpg">
                </a> </div>
            <div class="mix category-1 col-xs-6 col-sm-4 col-md-3" data-my-order="1" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/trendingagile.jpg" data-fancybox="group" data-caption="<a href='https://www.trendingagile.com/' target='_blank'>trendingagile</a>"><img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/trendingagile.jpg">
                </a> </div>
            <div class="mix category-1 col-xs-6 col-sm-4 col-md-3" data-my-order="1" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/willowtree.jpg" data-fancybox="group" data-caption="<a href='https://www.willowtree.com/' target='_blank'>willowtree</a>"><img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/website/willowtree.jpg">
                </a> </div>
            <div class="mix category-2 col-xs-6 col-sm-4 col-md-3" data-my-order="1" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Churchome.jpg" data-fancybox="group" data-caption="<a href='https://play.google.com/store/apps/details?id=seventhspark.churchome' target='_blank'>Churchome</a>"> <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Churchome.jpg">
                </a> </div>
            <div class="mix category-2 col-xs-6 col-sm-4 col-md-3" data-my-order="2" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Keep-Yoga.jpg" data-fancybox="group" data-caption="<a href='https://play.google.com/store/apps/details?id=com.gotokeep.yoga.intl' target='_blank'>Keep Yoga</a>"> <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Keep-Yoga.jpg"></a> </div>
            <div class="mix category-2 col-xs-6 col-sm-4 col-md-3" data-my-order="2" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Skillvo-Local-Services-Market.jpg" data-fancybox="group" data-caption="<a href='https://apps.apple.com/us/app/skillvo-local-service-marketplace-social-network/id1007987443' target='_blank'>Skillvo Local Services Market</a>"> <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Skillvo-Local-Services-Market.jpg"></a> </div>
            <div class="mix category-2 col-xs-6 col-sm-4 col-md-3" data-my-order="2" style="display: inline-block;" data-bound=""> <a class="example-image-link" href="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Stroll-Walking-Tracker.jpg" data-fancybox="group" data-caption="<a href='https://play.google.com/store/apps/details?id=com.zaxislabs.stroll.android' target='_blank'>Stroll Walking Tracker</a>"> <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() . '/'; ?>images/portfolio-img/mobile-app/Stroll-Walking-Tracker.jpg">
                </a> </div>
          </div>
        </div>
      </div>
    </div>
</div> */ ?>
<?php } ?>
<?php if(is_page( 'home' )){?>
<section class="bisiness-tech">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div data-aos="fade-down" data-aos-duration="800">
                <h3><?php the_field('technology_title', 'option'); ?> <br>
                <span><?php the_field('technology_sub_title', 'option'); ?></span></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <section class="our-tech-advantages section-spacing">
                 <?php        
            // Check rows exists.
            if( have_rows('technology_logo_repeater','option') ):
                $i=1;?>
              <div class="our-tech-row">
                  <?php  while( have_rows('technology_logo_repeater','option') ) : the_row();
               $technology_members_image = get_sub_field('technology_logo')['url'];?>
                <div class="our-tech-col">
                  <div class="tech-logo">
                    <div class="logo_box" data-aos="zoom-in-up" data-aos-duration="800">
                      <span><img src="<?php echo get_template_directory_uri()?>/images/placeholder10x10.jpg" alt="Technology Logo"></span>
                    </div>
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
            </section>
        </div>
    </div>
</section>
<?php }?>
<?php if(is_page( 'about-us' )){?>
<div class="Team-profile">
  <div class="container">
    <div data-aos="fade-down" data-aos-duration="800">
      <div class="title-border">
        <h2><?php the_field('founder_title', 'option'); ?></h2>
      </div>
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="800">
      <div class="Team-section">
           <?php        
// Check rows exists.
        if( have_rows('founder_repeater','option') ):
        $i=1;?>
          <div class="box">
              <?php  while( have_rows('founder_repeater','option') ) : the_row();
               $founder_members_image = get_sub_field('founder_image')['url'];
        $founder_members_title = get_sub_field('founder_title');
        $founder_members_designation = get_sub_field('founder_designation');?>
              <div class="card">
                  <div class="imgBx">
                      <img src="<?php echo $founder_members_image;?>" alt="images">
                  </div>
                  <div class="details">
                      <h2><?php echo $founder_members_title;?></h2>
                      <span><?php echo $founder_members_designation;?></span>
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
    </div>
  </div>
</div>
<?php }?>
<?php if(is_page('about-us')){?>
<div class="Our_team">
    <div class="vcenter">
        <section class="section">
          <div class="container">
            <div data-aos="fade-down" data-aos-duration="800">
              <header class="section-header">
                <h1 class="section-title">  <?php the_field('team_member_title', 'option'); ?></h1>
              </header>
            </div>
            <div data-aos="zoom-out" data-aos-duration="800">
              <ul class="team">
                  <?php        
// Check rows exists.
if( have_rows('team_members_repeater','option') ):
$i=1;
    // Loop through rows.
    while( have_rows('team_members_repeater','option') ) : the_row();

        // Load sub field value.
        $team_members_image = get_sub_field('team_members_image')['url'];
        $team_members_title = get_sub_field('team_members_title');
        $team_members_designation = get_sub_field('team_members_designation');
        $team_members_summery = get_sub_field('team_members_summery');
        
        ?>
         <li class="team__members">
                   <div class="userProfile" >
                    <figure class="userProfile__thumbnail">
                      <img src="<?php echo $team_members_image;?>" alt="Photo" class="userProfile__image">
                    </figure>
                  </div>
                  <div class="team__details">
                      <header class="team__meta">
                        <h3 class="team__meta__title"><?php echo $team_members_title;?></h3>
                        <div class="team__meta__designation"><?php echo $team_members_designation;?></div>
                    </header>
                    <div class="team__details__summery">
                      <?php echo $team_members_summery;?>
                    </div>
                  </div>
                </li>
        <?php // Do something...
$i++;
    // End loop.
    endwhile;
    // Do something...
endif;
?>
                
              </ul>
            </div>
          </div>
        </section>
    </div>
</div>
<?php } 
if(is_product()|| is_cart()  || is_checkout()){} else {?> 
<?php if(!is_page( 'contact-us' )){?>
<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div data-aos="fade-down" data-aos-duration="800">
          <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="contact-head"><?php the_field('contact_form_title', 'option'); ?></h2>
            </div>
          </div>
        </div>
        <div data-aos="zoom-in-up" data-aos-duration="800">
          <div class="row">
            <div class="col-lg-12">
             <div class="row">
                <?php echo do_shortcode('[contact-form-7 id="136" title="Contact with us"]'); ?>
            </div></div>            
          </div>
        </div>
    </div>
</section>
<?php } } ?>
<footer>
    <div class="ghf-wrap-outer" data-locale="en_US" id="footer1-wrap-outer">
        <div class="ghf-wrap-inner" id="footer1-wrap-inner">
            <div class="container1 full-bleed-no-max m-full-bleed footer1-wrapper phone-at-567" id="footer1-wrapper">
                <div class="container1 full-bleed-at-567">
                    <div class="grid grid-footer1 no-grid-at-567">
                        <div class="links footer-about"> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/logo.png" width="250" alt="Logo">
                            <?php echo the_field('footer_about_content', 'option'); ?>
                        </div>
                         <div class="links footer-service" role="navigation">
                            <div class="footer-head"> Services </div>
                            <?php wp_nav_menu( array('menu' => 'Services Pages') );?>
                        </div>                     
                        <div class="links">
                            <div class="footer-head">Our office</div>
                             <?php  the_field('footer_office_content', 'option'); ?>
                        </div>
                        <div class="links footer-social" role="navigation">
                            <div class="footer-head"> Social </div>
                            <div class="footer1-links-list">
                                <div class="footer1-social-links" data-locale-code="en_US">
                                    <div class="social-overlay" id="social-overlay">
                                        <div id="fb-root"></div>
                                        <button class="box-close box-close-small"><i class="fa fa-facebook-official"></i></button>
                                        <div class="social-title" id="facebook"></div>
                                        <div class="social-title" id="twitter"></div>
                                        <div class="arrow-bottom"></div>
                                    </div>
                                    <a class="footer1-social footer1-social-facebook" target="_blank" data-client="facebook" data-target="#facebook" data-url="#facebook" href="https://www.facebook.com/pages/category/Software-Company/JustCode-Software-Development-115049505955517/" title="Facebook"><i class="fa fa-facebook"></i><span class="visuallyhidden">Facebook</span></a>
                                    <a class="footer1-social footer1-social-twitter" target="_blank" data-client="twitter" data-target="#twitter" data-url="#twitter" href="https://twitter.com/justcodenow" title="Twitter"><i class="fa fa-twitter"></i><span class="visuallyhidden">Twitter</span></a>
                                    <a class="footer1-social footer1-social-instagram" data-client="linkedin" target="_blank" data-target="#linkedin" data-url="#linkedin" href="https://www.linkedin.com/company/justcode-software-development/" title="linkedin"><i class="fa fa-linkedin"></i><span class="visuallyhidden">linkedin</span></a> 
                                    <!--<a class="footer1-social footer1-social-Instagram" data-client="Instagram" target="_blank" data-target="#Instagram" data-url="#Instagram" href="" title="Instagram"><i class="old-ie-cleartype-fix-gray05 fa fa-instagram"></i><span class="visuallyhidden">Instagram</span></a>-->
                                  </div>
								
                            </div>
                           
									 <div class="footer-head"> Company </div>
                            <?php wp_nav_menu( array('menu' => 'Company Menu'));?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container1">
                    <div class="grid grid-footer1 clearfix">
                        <div class="footer1-signature"> <span class="footer1-copyright">JUSTCODENOW &copy; <?php echo date("Y");?>. All rights reserved.</span>
                            <p class="footer1-legal-links">
                                <a data-new-win="yes" href="<?php echo get_permalink( get_page_by_path( 'terms-condition' ) );  ?>" title="Terms and Conditions">Terms and Conditions</a>
                                <a data-new-win="yes" href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) );  ?>" title="Privacy Policy">Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="z-index:999999999999999;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title">Thank You!</h4>
            </div>
            <div class="modal-body">
                <p>We will get in touch with you shortly.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" role="dialog" style="z-index:999999999999999;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title">Apply</h4>
            </div>
            <div class="modal-body">
                <p>Send us an e-mail with the subject of job title at hr@justcodenow.com</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
