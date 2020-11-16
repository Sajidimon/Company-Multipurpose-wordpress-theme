<?php

function company_setup()
{

	load_theme_textdomain('company', get_template_directory() . '/languages');
	add_theme_support('widgets');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('title-tag');
	add_editor_style();
	add_theme_support('custom-logo', array(
		'height'		=> 250,
		'width'			=> 250,
		'flex-width'	=> true,
		'flex-height'	=> true,
	));

	if (!isset($content_width)) $content_width = 1349;

	add_image_size('company_image', 700, 467, true);
	add_image_size('company_cat_image', 1920, 480, true);


	register_nav_menus(
		array(
			'top-menu'		=> __('Top menu', 'company'),
			'sidebar-menu'	=> __('Sidebar menu', 'company')

		)
	);
}

add_action('after_setup_theme', 'company_setup');


/**
 * Enqueue scripts and styles.
 */
function company_scripts()
{


	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', null, true, 'all');
	wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', null, true, 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', null, true, 'all');
	wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', null, true, 'all');
	wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.css', null, true, 'all');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', null, true, 'all');
	wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', null, true, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', null, true, 'all');
	wp_enqueue_style('main', get_stylesheet_uri());



	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), true, true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array('jquery'), true, true);
	wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'), true, true);
	wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/vendor/jquery-sticky/jquery.sticky.js', array('jquery'), true, true);
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), true, true);
	wp_enqueue_script('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array('jquery'), true, true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array('jquery'), true, true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array('jquery'), true, true);
	wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), true, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), true, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'company_scripts');


function company_pagination()
{
	global $wp_query;
	$pagination = paginate_links(array(
		'current'		=> max(1, get_query_var('paged')),
		'prev_text'		=> '<i class="icofont-rounded-left"></i>',
		'next_text'		=> '<i class="icofont-rounded-right"></i>',
		'total'			=> $wp_query->max_num_pages,
		'type'			=> 'list'
	));

	$pagination = str_replace('page-numbers', 'justify-content-center', $pagination);
	$pagination = str_replace('span', 'a', $pagination);
	echo wp_kses_post($pagination);
}


/**
 * Implement tgm plugins activation feature.
 */
require_once get_template_directory() . '/inc/tgm.php';

/**
 * Implement team shortcode file.
 */
require_once get_template_directory() . '/inc/shortcode/team-shortcode.php';

/**
 * Implement slider shortcode file.
 */
require_once get_template_directory() . '/inc/shortcode/slider-shortcode.php';

/**
 * Implement about us shortcode file.
 */
require_once get_template_directory() . '/inc/shortcode/about-shortcode.php';

/**
 * Implement services shortcode file.
 */
require_once get_template_directory() . '/inc/shortcode/services-shortcode.php';

/**
 * Implement pricing shortcode file.
 */
require_once get_template_directory() . '/inc/shortcode/pricing-shortcode.php';

/**
 * Implement testimonial shortcode file.
 */
require_once get_template_directory() . '/inc/shortcode/testimonial-shortcode.php';

/**
 * Implement customizer file.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Implement customizer file.
 */
require_once get_template_directory() . '/inc/widgets.php';
