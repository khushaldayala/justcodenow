<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package justcode
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="blog-banner" style="background-image:url(<?php echo get_template_directory_uri()?>/images/about-us-banner.jpg)">
	       <div class="intro-text">
                    <h1 class="page-title"><?php single_post_title(); ?>s        </h1>
                   
                    <p style="font-size: 13pt">
                let’s get some information about the technologies services.
                </p>
                    
                    <div class="for-start-btn">   
                             <a href="#blog-section" class="page-scroll btn next-step2">Read More</a>
                             </div>
                
                <!--<a href="#portfolio" class="page-scroll">-->
                    <!--<div class="arrow"> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png" alt="page-scroll"> </div>-->
                <!--</a>   -->
                
                </div>	
              
	</div>
<div class="blogs" id="blog-section">		
<div class="container">
    <div class="row blog-listings">
        <div class="col-sm-8">
            <div class="blog-listing"> 
        
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
			 

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
				

			endwhile;

		//	the_posts_navigation();
			wpex_pagination(); 
	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
            </div>
            </div>
            
    
            <div class="col-sm-4">
               <div class="sidebar work-s">
                <?php get_sidebar(); ?>
                </div>
            </div>
            </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--blog section for scroll down page-->
<?php


get_footer();
