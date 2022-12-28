<?php 
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package justcode
 */

get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="blog-banner" style="background-image:url(<?php echo get_template_directory_uri()?>/images/about-us-banner.jpg)">
	      
	        <h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'justcode' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
		</div>

	<div class="container">
    <div class="row blog-listings">
        <div class="col-sm-8">
            <div class="blog-listing"> 

		<?php
		if ( have_posts() ) : ?>

		

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	 </div>
            </div>
                <div class="col-sm-4">
               <div class="sidebar">
                <?php get_sidebar(); ?>
                </div>
            </div>
            </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
