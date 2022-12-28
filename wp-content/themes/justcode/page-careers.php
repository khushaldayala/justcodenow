<?php get_header(); ?>
	<div class="header4">
      <div class="main-head">
        <div class="container">
            <div class="intro-text" style="margin-top:15% ">
            	<h1><?php echo get_field( "main_title" ); ?></h1>
                <p style="font-size: 13pt">
                    <?php echo get_field( "sub_title" ); ?>
                </p>
                <div class="for-start-btn"> 
                    <a href="#job-section" class="page-scroll btn next-step">
                        <span>See Vacancies</span>
                    </a> 
                </div>
            </div>
            <a href="#job-section" class="page-scroll">
                      <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri()?>/images/bounce.png"> </div>
                      </a>
        </div>
        
      </div>
    </div>

    <div class="container" id="job-section">
                <div class="Current-openings">
            <h2> <?php echo get_field( "content_title" ); ?></h2>
           <?php echo get_field( "content_description" ); ?>
            <div class="row">

            </div>
        </div>
    </div>
    

<?php get_footer(); ?>
