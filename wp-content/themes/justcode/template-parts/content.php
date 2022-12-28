<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package justcode
 */

?>

<?php
		if ( is_singular() ) :?>
<article id="post-<?php the_ID(); ?>" class="blog-block" <?php //post_class(); ?>>
	<?php else :?>
	<article id="post-<?php the_ID(); ?>" class="blog-block" <?php //post_class(); ?>>
	<?php 
		endif;?>
	 
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :?>
		    <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), 10); ?></a></h3>
			<?php 
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		Publish Date : <?php echo get_the_time( 'M d, Y',$post->ID ); ?>
			<?php
			     //justcode_posted_on();
				//justcode_posted_by();
			?>
			
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	 <!-- .entry-header -->

	<?php 
		if ( is_singular() ) :
		    if(get_the_post_thumbnail()){
	justcode_post_thumbnail();
	} elseif(is_product()){
	    
	}
	else {?>
		<img src="<?php echo site_url();?>/wp-content/uploads/2021/01/default-image.jpg" >
	<?php }
		else :
		    if(get_the_post_thumbnail()){ ?>
            
		        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
		        <!--echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'alignleft' ) );-->
		      
		  <?php  }
		  elseif(is_product()){
	    
	}
		    else{
	?>
	<img src="<?php echo site_url();?>/wp-content/uploads/2021/01/default-image.jpg" >
	  <?php
		    }
		endif;
	?>

	<div class="entry-content">
	
		<?php
		if ( is_singular() ) :
		    
		    the_content();
	
else :?>
<p><?php echo strip_tags(substr(get_the_content('','',$post->ID),0,228)); ?>...</p>
	<a class="read-more-link" href="<?php echo esc_url( get_permalink() ); ?>">Read More</a>
			<?php /*	$content = get_the_content();
 
echo mb_strimwidth($content, 0, 150, '...'); */ ?>
<?php endif;
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'justcode' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //justcode_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
