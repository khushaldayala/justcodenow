<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package justcode
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    	<div class="blog-banner" style="background-image:url(<?php echo get_template_directory_uri()?>/images/about-us-banner.jpg)">
<div class="container">	  
    <div class="intro-text">      
    <h1 class="page-title"><?php single_post_title(); ?></h1>  
    <h5> <?php the_field('sub_title') ?> </h5>
    <p></p>
                    
                    <!--<div class="for-start-btn">   -->
                    <!--         <a href="#work-section" class="page-scroll btn next-step2">Read More</a>-->
 
                    <!--</div>-->
                    </div>
    </div>
        <div class="yBox">
        <div class="yCards">
            <h2>Team </h2>
            <h3><?php the_field('team_size') ?></h3>
        </div>
        <div class="yCards oranges">
            <h2>Duration</h2>
            <h3><?php the_field('project_duration') ?></h3>
        </div>
        <div class="yCards purple">
            <h2>Industry</h2>
            <h3><?php the_field('project_industry') ?></h3>
        </div>
        <div class="yCards yellow">
            <h2>Contribution</h2>
            <h3><?php the_field('contributed') ?></h3>
        </div>
        <div class="yCards yellow">
            <h2>Platforms</h2>
            <h3><?php the_field('plat_form') ?></h3>
        </div>
        <div class="yCards yellow">
            <h2>Link</h2>
            <div class="d-flex">
                <a href= <?php the_field('app_link') ?>  target="_blank" > <img src=<?php the_field('app_store') ?> alt="play store"/> </a>
            <a href= <?php the_field('app_link') ?>  target="_blank" > <img src=<?php the_field('apple_store') ?> alt="play store"/> </a>
            <a href=<?php the_field('web_link') ?> target="_blank" > <img src=<?php the_field('web_icon') ?> alt="play store"/> </a>
            </div>
        </div>
    </div>
		</div>
<div class="work" id="work-section">
<div class="container single-page">
    <div class="main-content-1">
    <div class="bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
       
        <div class="header-body-1 text-center">
   <div class="row">
    <div class="col-xl-6 col-md-12">
              <div class="card-1 card-stats mb-4 mb-xl-0">
                <div class="card-body-1">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title-1 text-uppercase text-muted-1">TEAM</h5>
                      <span class="h3 font-weight-bold text-dark-1 font-size-1"><?php the_field('team_size') ?></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted-1 text-sm">
                    <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                    <!-- <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>
       <div class="col-xl-6 col-md-12">
              <div class="card-1 card-stats mb-4 mb-xl-0">
                <div class="card-body-1">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title-1 text-uppercase text-muted-1">DURATION</h5>
                      <span class="h3 font-weight-bold text-dark-1 font-size-1"><?php the_field('project_duration') ?></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted-1 text-sm">
                    <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span> -->
                  </p>
                </div>
              </div>
            </div>
	</div>
            <div class="row">
              <div class="col-xl-6 col-md-12 space">
              <div class="card-1 card-stats mb-4 mb-xl-0">
                <div class="card-body-1">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title-1 text-uppercase text-muted-1">INDUSTRY</h5>
                      <span class="h3 font-weight-bold text-dark-1 font-size-1"><?php the_field('project_industry') ?></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted-1 text-sm">
                    <!-- <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span> -->
                    <!-- <span class="text-nowrap">Since yesterday</span> -->
                  </p>
                </div>
              </div>
              </div>
             <div class="col-xl-6 col-md-12 space">
              <div class="card-1 card-stats mb-4 mb-xl-0">
                <div class="card-body-1">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title-1 text-uppercase text-muted-1">CONTRIBUTED</h5>
                      <span class="h3 font-weight-bold text-dark-1 font-size-1"><?php the_field('contributed') ?></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted-1 text-sm">
                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
             </div>
            </div>
            <div class="row">
        <div class="col-xl-6 col-md-12 space">
            <div class="card-1 card-stats mb-4 mb-xl-0">
                <div class="card-body-1">
                    <div class="row">
                        <div class="col">
                        
                                <h5 class='card-title-1 text-uppercase text-muted-1'>Platforms</h5>
                                <span class='h3 font-weight-bold text-dark-1 font-size-1'>
                                    <?php the_field('plat_form') ?>
                                </span>
                           

                        </div>
                      
                    </div>
                    <p class="mt-3 mb-0 text-muted-1 text-sm">
                        <!-- <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span> -->
                        <!-- <span class="text-nowrap">Since yesterday</span> -->
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 space">
            <div class="card-1 card-stats mb-4 mb-xl-0">
                <div class="card-body-1">
                    <div class="row">
                        <div class="col">
                           
                                <h5 class='card-title-1 text-uppercase text-muted-1'>Link</h5>
                                <div>
                                    <a href=<?php the_field('app_link') ?> target="_blank" > <img src=<?php
                                            the_field('app_store') ?> alt="play store"/> </a>
                                    <a href=<?php the_field('apple_link') ?> target="_blank" > <img src=<?php
                                            the_field('apple_store') ?> alt="play store"/> </a>
                                    <a href=<?php the_field('web_link') ?> target="_blank" > <img src=<?php
                                            the_field('web_icon') ?> alt="play store"/> </a>
                                </div>
                            
                        </div>
                        
                    </div>
                    <p class="mt-3 mb-0 text-muted-1 text-sm">
                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
              <span class="text-nowrap">Since last month</span> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
 </div>
    <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		//	the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
</div>
	</main><!-- #main -->
	</div><!-- #primary --> 
</div>
<?php

get_footer();
