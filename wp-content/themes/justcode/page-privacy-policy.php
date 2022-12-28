<?php get_header(); ?>
	<div class="header4">
      <div class="main-head">
        <div class="container">
            <div class="intro-text">
            	<?php /* <img src="<?php echo get_template_directory_uri() . '/'; ?>images/favicon-icon.png" alt=""> */ ?>
                <h1 class="hover-spacing"><?php echo get_field( "main_title" ); ?></h1>                
            </div>         
        </div>
        
      </div>
    </div>
	<section id="about-us-page-content">
		<div class="container about-us-page-inner">
		  <h2> <?php echo get_field( "content_title" ); ?></h2>
           <?php echo get_field( "content_description" ); ?>
			
    </div>
	</section>
 
<?php get_footer(); ?>
