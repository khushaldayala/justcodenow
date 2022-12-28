<?php get_header(); ?>
<div class="header4">
    <div class="main-head">
        <div class="container">
            <div class="intro-text">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>images/favicon-icon.png" alt="">
                <h1 class="hover-spacing"><?php echo get_field( "main_title" ); ?></h1>

            </div>         
        </div>

    </div>
</div>
<section id="about-us-page-content">
    <div class="container about-us-page-inner">
         <h2> <?php //echo get_field( "content_title" ); ?></h2>
           <?php echo get_field( "content_description" ); ?>
                 
    </div>
</section>

<?php if(is_page( 'careers' )){?>
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
<?php } ?> 

<?php get_footer(); ?>
