<?php
/**
 * company Theme Customizer
 *
 * @package company
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function company_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'company_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'company_customize_partial_blogdescription',
			)
		);

		$wp_customize->add_setting('company_copyright', array(
			'default'		=>'copyright 2020',
			'transport'		=>'refresh',
			'sanitize_callback'	=>''
		));

		$wp_customize->add_control('company_copyright', array(
			'label'		=>'Add copyright text here',
			'section'	=>'title_tagline',
			'type'		=>'text'
        ));
        
        $wp_customize->add_section('company_social_profile', array(
            'title'             =>__('Company Social Profile', 'company'),
            'priority'          =>30
        ));

        $wp_customize->add_setting('company_fb_icon', array(
            'default'           =>'facebook.com',
            'transport'         =>'refresh'
        ));

        $wp_customize->add_control('company_fb_icon', array(
            'label'             =>__('Add facebook url', 'company'),
            'section'           =>'company_social_profile',
            'type'              =>'text'
        ));

        $wp_customize->add_setting('company_tw_icon', array(
            'default'           =>'twitter.com',
            'transport'         =>'refresh'
        ));

        $wp_customize->add_control('company_tw_icon', array(
            'label'             =>__('Add twitter url', 'company'),
            'section'           =>'company_social_profile',
            'type'              =>'text'
        ));

        $wp_customize->add_setting('company_ln_icon', array(
            'default'           =>'linkedin.com',
            'transport'         =>'refresh'
        ));

        $wp_customize->add_control('company_ln_icon', array(
            'label'             =>__('Add LinkedIn url', 'company'),
            'section'           =>'company_social_profile',
            'type'              =>'text'
        ));

        $wp_customize->add_setting('company_ins_icon', array(
            'default'           =>'instagram.com',
            'transport'         =>'refresh'
        ));

        $wp_customize->add_control('company_ins_icon', array(
            'label'             =>__('Add Instagram url', 'company'),
            'section'           =>'company_social_profile',
            'type'              =>'text'
        ));
	}
}
add_action( 'customize_register', 'company_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function company_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function company_customize_partial_blogdescription() {
	bloginfo( 'description' );
}