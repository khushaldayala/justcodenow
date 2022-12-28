<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package justcode
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="blog-banner" style="background-image:url(<?php echo get_template_directory_uri()?>/images/about-us-banner.jpg)">
	      
	        <?php
					the_archive_title( '<h1 class="page-title screen-reader-text">', '</h1>' );
				
				?>
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

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

				wpex_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	 </div>
            </div>
            
    
            <div class="col-sm-4">
               <div class="sidebar Work-sidebar">
                   <?php get_sidebar(); ?>
                   	<section id="categories-10" class="widget widget_categories" style="padding-top: 20px;"><h2 class="widget-title">Categories</h2>
		<?php  $terms = get_the_terms($post->ID, 'work_categories');?>
			<ul>
			    	<?php foreach($terms as $term){?>
					<li class="cat-item cat-item-<?php echo $term->term_id;?>"><a href="https://www.justcodenow.com/work_categories/<?php echo $term->slug;?>/"><?php echo $term->name;?></a>
</li>

<?php } ?>
			</ul>

			</section>
                     </div>
            </div>
            </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();
