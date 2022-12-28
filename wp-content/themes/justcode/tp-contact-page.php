<?php
/**
 * Template Name: Contact Us page
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
            	 
                <h1 class="hover-spacing"><?php echo get_field( "main_title" ); ?></h1>
                <p>Get in touch with us.</p>
                    
                    <div class="for-start-btn">   
                             <a href="#second-sec" class="page-scroll btn next-step2">
        Read More                          </a>
   
  
 
                    </div>
            </div> 
            <a href="#about-us-page-content" class="page-scroll">
                <div class="arrow"> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png" alt="bounce"> </div>
            </a>        
        </div>
        
      </div>
    </div>
	<section id="about-us-page-content">
		<div class="container about-us-page-inner contact-us">
			<h2><?php //echo get_field( "content_title" ); ?></h2>
			<div class="row">
		    	<div class="col-sm-6">
		          <div class="contact-address">
		    		<?php echo get_field( "content_description" ); ?>
		          </div>  		
		    	</div>
		    	<div class="col-sm-6 contact-us-form">
		    		<h3>Customer Support</h3>
		    		<p>Please complete the form below, so we can provide quick and effcient sevice. If this is an urgent matter please contact Customer Support :</p>
		    		<?php echo do_shortcode( '[contact-form-7 id="262" title="Contact page form"]' ); ?>
		    	</div>
		    </div>
		   
	    </div>
	     
	</section>  

<?php get_footer(); ?>
