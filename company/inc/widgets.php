<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function company_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Right sidebar', 'company'),
			'id'            => 'right_sidebar',
			'description'   => esc_html__('Add right sidebar widgets here.', 'company'),
			'before_widget' => '<div class="widget" style="margin:20px 0;">',
			'after_widget'  => '</div>',
			'before_title'  => '  <h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer widgets area-1', 'company'),
			'id'            => 'footer_1',
			'description'   => esc_html__('This sidebar will be used for displaying footer widgets.', 'company'),
			'before_widget' => '<div class="col-lg-3 col-md-6 footer-contact">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer widgets area-2', 'company'),
			'id'            => 'footer_2',
			'description'   => esc_html__('This sidebar will be used for displaying footer widgets.', 'company'),
			'before_widget' => '<div class="col-lg-2 col-md-6 footer-links">',
			'after_widget'  => '</div>',
			'before_title'  => '  <h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer widgets area-3', 'company'),
			'id'            => 'footer_3',
			'description'   => esc_html__('This sidebar will be used for displaying footer widgets.', 'company'),
			'before_widget' => '<div class="col-lg-3 col-md-6 footer-links">',
			'after_widget'  => '</div>',
			'before_title'  => '  <h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer widgets area-4', 'company'),
			'id'            => 'footer_4',
			'description'   => esc_html__('This sidebar will be used for displaying footer widgets.', 'company'),
			'before_widget' => '<div class="col-lg-4 col-md-6 footer-newsletter">',
			'after_widget'  => '</div>',
			'before_title'  => '  <h4>',
			'after_title'   => '</h4>',
		)
	);
}
add_action('widgets_init', 'company_widgets_init');