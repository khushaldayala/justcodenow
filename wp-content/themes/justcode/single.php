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
                    <!--<p>Subtitle</p>-->
                    
                    <div class="for-start-btn">   
                             <!--<a href="#second-sec" class="page-scroll btn next-step2">Read More</a>-->
   
 
      <a href="#contact" class="page-scroll btn next-step">
        Get Started                          </a>
   
 
                    </div>
                </div>	     
        </div>
		</div>
<div class="container single-page">
   <div class="row">
       	<?php if ( is_product() ){?>
       	<div class="col-md-12">
       	<?php } else {?>
    <div class="col-md-8">
        <?php }?>
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
		<?php if ( is_product() ){ } else {?>
		<div class="col-md-4">
		<div class="sidebar">
		<?php get_sidebar(); ?>
		</div>
		</div>
		<?php } ?>
		</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
