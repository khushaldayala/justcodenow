<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package justcode
 */

?>
<!doctype html>
<html amp <?php language_attributes(); ?>>
<head>
<!--    For Team page-->
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.justcodenow.com/wp-content/themes/justcode/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    End Team page header-->
<!--For work page-->
<link rel="stylesheet" href="https://www.justcodenow.com/wp-content/themes/justcode/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
<!--End for work page header-->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-icon.png" />
    
<link rel='preload'  href='https://www.justcodenow.com/wp-content/themes/justcode/css/font-awesome.min.css' as="style" />
<link rel="preload" as="font" type="font/woff2" crossorigin href="https://www.justcodenow.com/wp-content/themes/justcode/fonts/fontawesome-webfont.woff2"/>
	<?php wp_head(); ?> 
	<script>
	var ajaxUrl = '<?php echo admin_url( 'admin-ajax.php' ); ?>'
	</script>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-210244083-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-210244083-1');
</script>

</head>

<body id="page-top"  <?php body_class(); ?>>


    <!-- Navigation -->

    <a class="popup-trigger btn get-in-touch-wrap" href="<?php echo site_url(); ?>/estimate">Get a Free Quote</a>
   
<nav id="mainNav" data-spy="affix"  data-offset-top="80" class="navbar navbar-default navbar-custom navbar-fixed-top mega-menu ">

    <div data-aos="fade-down" data-aos-duration="800">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button>-->
                <a class="navbar-brand page-scroll"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img width="250" src="<?php echo get_template_directory_uri() . '/'; ?>images/logo.png" class="img-responsive" alt="JUSTCODEINDIA" style="cursor: pointer;"></a> </div>
              
                <!-- wp_nav_menu(array(
                'container' => '', // Leaving it empty removes the <div> container.
                )); -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left my-nav-new">
                    <li class="hidden active"> <a href="#page-top"></a> </li>
                    <?php
				    wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				    ) );
			        ?>
                    
                    <!-- <li> <a class="page-scroll" href="<?php echo site_url(); ?>">Home </a> </li> -->
                    <!-- <li> <a id="about-act" class="page-scroll" href="<?php echo site_url().'/team'; ?>">Team</a> </li> -->
                    
<!--                    <li class="dropdown mega-menu-half">
                         <a id="services1" class="page-scroll dropdown-toggle" data-toggle="dropdown" href="#">Services</a> 
                         <a class="dropdown-toggle" data-toggle="dropdown" href="">Services </a> <img class="dd-arrow" src="<?php echo get_template_directory_uri() . '/'; ?>images/dd-arrow.png" alt="Services"> 
                        <ul class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="for-mar-set">
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="service-main-line service-main-line2">
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/web-design-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght hieght-dark">
                                                               <i class="fa fa-laptop" aria-hidden="true"></i>

                                                                <p>web design &amp; development</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/mobile-app-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght2 hieght-dark">
                                                               <i class="fa fa-mobile" aria-hidden="true"></i>

                                                                <p>mobile app development</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                               <li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght3 hieght-dark">
                                                            <i class="fa fa-cogs"></i>
                                                                    <p>software development</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                            <ul class="service-main-line service-main-line2">
                                                <li class="col-sm-3 col-md-3">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght4 hieght-dark">
                                                               <i class="fa fa-code-fork" aria-hidden="true"></i>
                                                                <p>magento development<br>
                                                                    <span>360 Degree Solution</span> </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/ecommerce-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght5 hieght-dark">
                                                               <i class="fa fa-shopping-cart"></i>
                                                                <p>ecommerce development<br>
                                                                    <span>360 Degree Solution</span> </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/managed-cloud-hosting' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght6 hieght-dark">
                                                               <i class="fa fa-cloud-upload"></i>
                                                                <p>Managed cloud hosting</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/digital-marketing' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght11 hieght-dark">
                                                               <i class="fa fa-bullhorn"></i>
                                                                <p>digital marketing</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
												<li class="col-sm-4 col-md-4">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/startup' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght9 hieght-dark">
                                                               <i class="fa fa-rocket" aria-hidden="true"></i>
                                                                <p>startup<br>
                                                                    <span>360 Degree Solution</span> </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
												
                                            </ul>                                            
                                        </div>                                       
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>-->
                    
                    <li style="display:none;" class=""> <a class="page-scroll" href="#hidden">hidden</a> </li>
                  <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/web-design-development' ) );  ?>">web design &amp; development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/mobile-app-development' ) );  ?>">mobile app development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">software development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/startup' ) );  ?>">startup</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">magento development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/ecommerce-development' ) );  ?>">ecommerce development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/managed-cloud-hosting' ) );  ?>">Managed cloud hosting</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/digital-marketing' ) );  ?>">digital marketing</a></li>
                    <!-- <li> <a id="contact-act" class="page-scroll" href="<?php echo site_url().'/careers'; ?>"><img class="hiring-text" src="<?php echo get_template_directory_uri() . '/'; ?>images/hiring.png" alt="Careers"> Careers</a> </li> -->
                    <!-- <li> <a i class="page-scroll" href="<?php echo site_url().'/blog'; ?>">Blogs</a> </li>  -->
                    <!-- <li><a href="<?php echo site_url().'/contact-us'; ?>">Contact us</a></li> -->
				<!--	<li> <a id="contact-act" class="page-scroll" href="<?php echo site_url().'/my-account'; ?>"> My Account</a> </li>-->
                    <!-- <li> <a class="callnow" href="tel:+18002143513">Call: +1 (800) 214-3513</a> </li>                     -->
                </ul>
                <!--  <a href="#contact" class="page-scroll"><button type="button" class="btn btn-callnow navbar-btn start-button">Start Your Project</button></a> -->

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </div>
</nav>
   