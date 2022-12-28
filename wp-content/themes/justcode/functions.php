<?php

if ( ! function_exists( 'justcode_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function justcode_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on justcode, use a find and replace
		 * to change 'justcode' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'justcode', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'justcode' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'justcode_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'justcode_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function justcode_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'justcode_content_width', 640 );
}
add_action( 'after_setup_theme', 'justcode_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function justcode_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'justcode' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'justcode' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'justcode_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function justcode_scripts() {
	wp_enqueue_style( 'justcode-style', get_stylesheet_uri() );
	wp_enqueue_style( 'jc-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	//wp_enqueue_style( 'jc-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	//wp_enqueue_style( 'jc-lightbox', get_template_directory_uri() . '/css/lightbox.css');
	//wp_enqueue_style( 'jc-swiper.min', get_template_directory_uri() . '/css/swiper.min.css');
	//wp_enqueue_style( 'jc-aos', get_template_directory_uri() . '/css/aos.css');
//	wp_enqueue_style( 'jc-fancybox.min', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
	wp_enqueue_style( 'jc-style', get_template_directory_uri() . '/css/style.css');	
	wp_enqueue_style( 'jc-responsive', get_template_directory_uri() . '/css/responsive.css');
	

	
//	wp_enqueue_script( 'justcode-jver', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'justcode-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'justcode-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-combine', get_template_directory_uri() . '/js/vendor,_bootstrap,_js,_bootstrap.min.js+js,_contact_me.js+js,_ajax.js+js,_agency.min.js+js,_lightbox.js', array(), '20151215', true );
if(is_page( 'home' )){
	wp_enqueue_script( 'justcode-jquery.mixitup.min', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array(), '20151215', true );
}
//	wp_enqueue_script( 'justcode-jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-scrolloverflow', get_template_directory_uri() . '/js/scrolloverflow.js', array(), '20151215', true );
if(is_page( 'mobile-app-development' )){
	wp_enqueue_script( 'justcode-swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array(), '20151215', true );
}
	//wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array(), '20151215', true );
//	wp_enqueue_script( 'justcode-fullPage.min', get_template_directory_uri() . '/js/jquery.fullPage.min.js', array(), '20151215', true );
	wp_enqueue_script( 'justcode-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	
}
add_action( 'wp_enqueue_scripts', 'justcode_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/includes/post-types.php';
require get_template_directory() . '/includes/woo-custom-endpoint.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_image_size( 'project-thumb', 632, 533, true );
if ( function_exists( 'acf_add_options_sub_page' ) ){
	acf_add_options_sub_page(array(
		'title'      => 'Project Settings',
		'parent'     => 'edit.php?post_type=project',
		'capability' => 'manage_options'
	));
}


add_action( 'wp_ajax_promocode', 'promocode' );
add_action( 'wp_ajax_nopriv_promocode', 'promocode' );
function promocode() {
	$response['sucess'] = false;
	$promoCode = $_POST['promocodeval'];
	$pid = $_POST['pid'];
	$price = get_field('project_price',$pid);
	$allCode = get_field('add_codes' ,'option');
	if(!empty($allCode)){
		foreach($allCode as $pcodes){
			if($pcodes['code'] == $promoCode){
				update_post_meta( $pid, 'promocode', $promoCode );
				$response['price'] = get_price($pid);	
				$response['sucess'] = true;	
				break;
			}
		}
	}
	echo json_encode($response);
	die();
	
}

function get_price($projectID){
	$price = get_field('project_price',$projectID);
	$allCode = get_field('add_codes' ,'option');
	$promocode = get_field('promocode',$projectID);
	if(!empty($allCode)){
		foreach($allCode as $pcodes){
			if($pcodes['code'] == $promocode){
				if($pcodes['discount_type'] == 'percentage'){
					$newPrice = get_woocommerce_currency_symbol() .' '. $price * ((100- $pcodes['discount_per'] ) / 100);
				}else{
					$newPrice = get_woocommerce_currency_symbol() .' '.  ($price - $pcodes['discount_fixed']);
				}
				return $newPrice;
			}
		}
	}
	
	return $price;
}

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}

function my_acf_add_local_field_groups() {
	$completeFields = array();
	static $list = null;
	if($list !== null) { return $list; }
	$list = array();
	$all_steps = get_field( 'progress_options' , 'option');
	if(is_array($all_steps) && ! empty($all_steps) ) {
		foreach($all_steps as $steps) {
			$list[$steps['option_key']] = $steps['option'];
		}
	}
	$fieldchoices = $list;
	
	$checboxField = array (
			'key' => 'field_5a864988cb01b',
			'label' => 'Steps Available in project',
			'name' => 'steps_available',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => $fieldchoices,
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array (
			),
			'layout' => 'horizontal',
			'toggle' => 0,
			'return_format' => 'array',
		);
	
	array_push($completeFields,$checboxField);
	
	
	if(is_array($all_steps) && ! empty($all_steps) ) {
		foreach($all_steps as $steps) {
			
			
			$levelField = array (
							'key' => 'level_complete'.$steps['option_key'].'_key',
							'label' => $steps['option'].' complete ?',
							'name' => 'level_complete'.$steps['option_key'],
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_5a864988cb01b',
										'operator' => '==',
										'value' => $steps['option_key'],
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => '',
							'ui_off_text' => '',
						);
			array_push($completeFields,$levelField);
			$levelFieldOrder = array (
							'key' => 'level_complete'.$steps['option_key'].'_key_order',
							'label' => $steps['option'].' order',
							'name' => 'level_complete_order'.$steps['option_key'],
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_5a864988cb01b',
										'operator' => '==',
										'value' => $steps['option_key'],
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'min' => '0',
							'max' => '999',
							'step' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						);
			array_push($completeFields,$levelFieldOrder);
			
			
		}
	} 
	
	acf_add_local_field_group(array (
		'key' => 'group_5a86452c014a6',
		'title' => 'Project Status',
		'fields' => array (
			$completeFields
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'project',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups');


add_action( 'wp_ajax_saveestimation', 'saveestimation' );
add_action( 'wp_ajax_nopriv_saveestimation', 'saveestimation' );
function saveestimation() {
	$response['sucess'] = false;
	$optData= array();
	$featureData= array();
	$totalHoursOpt = 0;
	$totalCostOpt = 0;
	
	$totalHours = 0;
	$totalCost = 0;
	
	if(!empty($_POST)){
		$email = $_POST['emailsend'];
		$postid = $_POST['pid'];
		$selectedopt = $_POST['selectedOpt'];
		$features = get_field('features',$postid); 
		$htnl = '';
		if(!empty($features)){
			foreach($features as $featureKey=>$feature){
				$featureLabel = $feature['feature_label'];
				foreach($feature['options'] as $featureopt){ 
					
					$optionID = 'tech_'.$postid .$featureopt['option_id'];
					
					if (in_array($optionID, $selectedopt)){
						if( (!empty($featureopt['option_hours']) && ($featureopt['option_cost']) ) ){
							$optData[$optionID]['hours'] = $featureopt['option_hours'];
							$optData[$optionID]['cost'] = $featureopt['option_cost']; 
							$optData[$optionID]['optlabel'] = $featureopt['option_label']; 
							$totalHoursOpt = $totalHoursOpt + $featureopt['option_hours'];
							$totalCostOpt = $totalCostOpt + $featureopt['option_cost'];
							
							$totalHours = $totalHours + $featureopt['option_hours'];
							$totalCost = $totalCost + $featureopt['option_cost'];
						}
						
					}
				}
				if(!empty($optData)){
					$featureData[$featureKey]['label'] = $featureLabel;
					$featureData[$featureKey]['optData'] = $optData;
					$featureData[$featureKey]['optHour'] = $totalHoursOpt;
					$featureData[$featureKey]['optCost'] = $totalCostOpt;
					$totalHoursOpt = 0;
					$totalCostOpt = 0;
					$optData= array();
				}
				
				
			}
			
			$html .= '<table border="1"  cellpadding="5" cellspacing="5" style="padding:10px; border-collapse:collapse;"><tr>
								<td>Feature</td>
								<td>Items</td>
								<td>Total Hours</td>
								<td>Total Cost</td>
							</tr>';
				foreach($featureData as $costing){
					$html .= '<tr>';
					$html .= '<td>'.$costing['label'].'</td>';
					$html .= '<td><table border="1" cellpadding="5" cellspacing="5" style="padding:10px; border-collapse:collapse;">';
					foreach($costing['optData'] as $optseldata){
						$html .= '<tr>';
							$html .= '<td>'.$optseldata['optlabel'].'</td>';
							$html .= '<td>'.$optseldata['hours'].' Hours</td>';
							$html .= '<td>$'.$optseldata['cost'].'</td>';
						$html .= '</tr>';
					}
					$html .= '</table></td>';
					
					$html .= '<td>'.$costing['optHour'].'</td>';
					$html .= '<td>$'.$costing['optCost'].'</td>';
					$html .= '</tr>';
				}
				$html .= '<tr>';
				$html .= '<td colspan="2">Grand Total</td>';
				$html .= '<td>'.$totalHours.'</td>';
				$html .= '<td>$'.$totalCost.'</td>';
				$html .= '<tr>';
			$html .= '</table>';
		}
		$email_to = $email;
		$email_subject = 'Free Estimation';
		$headers = array('From: justcodenow <info@justcodenow.com>');
		$send_mail = wp_mail($email_to, $email_subject, $html, $headers);
		$response['sucess'] = true;
		
	}
	
	echo json_encode($response);
	die();
	
}
function wpse27856_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );

function remove_css_js_ver( $src ) {
if( strpos( $src, '?ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}

add_filter('wpseo_canonical','ps_change_cannonical',10,1);

function ps_change_cannonical($url){
   $url = 'https://www.justcodenow.com/';
   return $url;
}
//add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
//add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 ); 
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}