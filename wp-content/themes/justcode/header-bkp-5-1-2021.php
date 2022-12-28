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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-icon.png" />
    
<link rel='preload'  href='https://www.justcodenow.com/wp-content/themes/justcode/css/font-awesome.min.css' as="style" />
<link rel="preload" as="font" type="font/woff2" crossorigin href="https://www.justcodenow.com/wp-content/themes/justcode/fonts/fontawesome-webfont.woff2"/>
<!--<link rel='preload'  href='https://www.justcodenow.com/wp-content/themes/justcode/css/bootstrap.min.css' type="text/css" />-->
	<?php wp_head(); ?> 
	<script>
	var ajaxUrl = '<?php echo admin_url( 'admin-ajax.php' ); ?>'
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-182561767-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-182561767-1');
</script>
</head>
<?php /*
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'justcode' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description;  ?></p>
			<?php
			endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'justcode' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content">
*/ ?>

<body id="page-top"  <?php body_class(); ?>>


    <!-- Navigation -->

    <a class="popup-trigger btn get-in-touch-wrap" href="<?php echo site_url(); ?>/estimate">Get a Free Quote</a>

<nav id="mainNav" data-spy="affix"  data-offset-top="80" class="navbar navbar-default navbar-custom navbar-fixed-top mega-menu ">
    <div data-aos="fade-down" data-aos-duration="800">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button>
                <a class="navbar-brand page-scroll"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img width="250" src="<?php echo get_template_directory_uri() . '/'; ?>images/logo.png" class="img-responsive" alt="JUSTCODEINDIA" style="cursor: pointer;"></a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left my-nav-new">
                    <li class="hidden active"> <a href="#page-top"></a> </li>
                    <li> <a class="page-scroll" href="<?php echo site_url(); ?>">Home </a> </li>
                    <li> <a id="about-act" class="page-scroll" href="<?php echo site_url().'/team'; ?>">Team</a> </li>
                    
                    <li class="dropdown mega-menu-half">
                        <!-- <a id="services1" class="page-scroll dropdown-toggle" data-toggle="dropdown" href="#">Services</a> -->
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Services </a> <img class="dd-arrow" src="<?php echo get_template_directory_uri() . '/'; ?>images/dd-arrow.png" alt="Services">
                        <ul class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="for-mar-set">
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="service-main-line service-main-line2">
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="https://www.justcodenow.com/services/web-design-development-service-provider-justcode-software-development/">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght hieght-dark">
                                                               <i class="fa fa-laptop" aria-hidden="true"></i>

                                                                <p>web design &amp; development</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="https://www.justcodenow.com/services/android-application-development-company-ios-app-development-agency/">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght2 hieght-dark">
                                                               <i class="fa fa-mobile" aria-hidden="true"></i>

                                                                <p>mobile app development</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                               <?php /* <li class="col-sm-3 col-md-3">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght3 hieght-dark">
                                                            <i class="fa fa-cogs"></i>
                                                                    <p>software development</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> */ ?>
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="https://www.justcodenow.com/services/startup-app-development-service-provider-company-justcode/">
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
                                            <ul class="service-main-line service-main-line2">
                                               <?php /* <li class="col-sm-3 col-md-3">
                                                    <a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght4 hieght-dark">
                                                               <i class="fa fa-code-fork" aria-hidden="true"></i>
                                                                <p>magento development<br>
                                                                    <span>360 Degree Solution</span> </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> */ ?>

                                                <li class="col-sm-4 col-md-4">
                                                    <a href="https://www.justcodenow.com/services/ecommerce-website-development-ecommerce-development-company/">
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
                                                    <a href="https://www.justcodenow.com/services/managed-cloud-hosting/">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght6 hieght-dark">
                                                               <i class="fa fa-cloud-upload"></i>
                                                                <p>Managed cloud hosting</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="col-sm-4 col-md-4">
                                                    <a href="https://www.justcodenow.com/services/digital-marketing-agency-digital-marketing-services-provider/">
                                                        <div class="magento-1 magento-dark">
                                                            <div class="for-hieght11 hieght-dark">
                                                               <i class="fa fa-bullhorn"></i>
                                                                <p>digital marketing</p>
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
                    </li>
                    
                    <li style="display:none;" class=""> <a class="page-scroll" href="#hidden">hidden</a> </li>
                  <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/web-design-development' ) );  ?>">web design &amp; development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/mobile-app-development' ) );  ?>">mobile app development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">software development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/startup' ) );  ?>">startup</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">magento development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/ecommerce-development' ) );  ?>">ecommerce development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/managed-cloud-hosting' ) );  ?>">Managed cloud hosting</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/digital-marketing' ) );  ?>">digital marketing</a></li>
                    <li> <a id="contact-act" class="page-scroll" href="<?php echo site_url().'/careers'; ?>"><img class="hiring-text" src="<?php echo get_template_directory_uri() . '/'; ?>images/hiring.png" alt="Careers"> Careers</a> </li>
                    <li> <a i class="page-scroll" href="<?php echo site_url().'/blog'; ?>">Blogs</a> </li> 
                    <li><a href="<?php echo site_url().'/contact-us'; ?>">Contact us</a></li>
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