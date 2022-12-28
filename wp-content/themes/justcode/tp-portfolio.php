<?php
/**
 * Template Name: Portfolio Listing
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
                <div data-aos="zoom-in" data-aos-duration="800">
                    <div class="intro-text">
                       <?php /* <div class="arpatech-logo"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/favicon-icon.png" alt=" World&#39;s Finest Technology Hub"></div> */ ?>
                        <h1>Case Studies</h1>
                       <p>Experiences We have  Created.</p> 
                     <div class="for-start-btn"> 
                         
    					<a href="#portfolio" class="page-scroll btn next-step">
    					  View Case Studies
    					</a> 
                   </div>
                    </div>
                </div>
                <a href="#portfolio" class="page-scroll">
                    <div class="arrow"> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png" alt="page-scroll"> </div>
                </a> 
            </div>
        </div>
    </div>
    <?php
 $args = array(  
        'post_type' => 'work',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); ?>
     <div class="portfolio-section" id="portfolio">
        <div class="category-section">
        <div class="container">
        <div class="sidebar Work-sidebar row">
            <div id="categories-10" class="widget widget_categories work-category-list col-sm-12">
               <h2 class="widget-title">Categories</h2>
                <ul>
                     <li class="cat-item cat-item-">
                                    <a href="https://www.justcodenow.com/portfolio/"><?php echo "View All";?></a>
                                </li>
                    <?php  global $post;
                            $taxonomies = get_terms( array(
                        'taxonomy' => 'work_categories', //Custom taxonomy name
                        'hide_empty' => false
                        ) );
                        //print_r($taxonomies);
                        if ( !empty($taxonomies) ) :
                            foreach( $taxonomies as $category ) {
                                if( $category->parent == 0 ) {?>
                                <li class="cat-item cat-item-<?php echo $category->term_id;?>">
                                    <a href="https://www.justcodenow.com/work_categories/<?php echo $category->slug;?>/"><?php echo $category->name;?></a>
                                </li>
                            <?php }

                        }
                        endif;
                        ?>
                </ul>

                </div>
	            <?php get_sidebar(); ?>
		</div>  
        </div>
         </div>
         <div class="container">
             <div class="row">
            <div class="col-md-12 work">
             <ul>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                 <li class="col-sm-6 col-md-4 col-xs-6">
                     <div class="portfolio-block">
                         <?php $featured_img = get_the_post_thumbnail_url($post->ID, 'full'); 
                         
                         ?>
                         <div class="cover-bg" style="background-image:url(<?php echo $featured_img;?>)">
                             <img src="<?php echo get_template_directory_uri()?>/images/placeholder-10x7.jpg" alt="">
                         </div>
                         <div class="portfolio-hover">
                             <h3><?php echo get_the_title();?></h3>
                             <?php $content = get_the_content($post->ID);?>
 
                        <?php /* <p><?php echo mb_strimwidth($content, 0, 100, '...');?></p> */?>
                             
                             <a href="<?php echo get_permalink($post->ID);?>">View More</a>
                         </div>
                     </div>
                 </li>
                 <?php endwhile; 
                 wp_reset_postdata(); ?>
                 
                 
                 
                 
                 
             </ul>
        </div>
        
     </div>
         </div>
     </div>
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p>Let's Come Up with a Plan to Reach Your Goals.</p>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo site_url();?>/contact-us/">Contact us</a>
            </div>
        </div>
    </div>
</div>     
<?php get_footer(); ?>
