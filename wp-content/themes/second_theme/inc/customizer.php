<?php
/**
 * second theme Theme Customizer
 *
 * @package second_theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function second_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'second_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'second_theme_customize_partial_blogdescription',
			)
		);
	}

		/**
	 * Add our Footer & Navigation Panel
	 */
	$wp_customize->add_panel( 'footer_navigation_panel',
		array(
			'title' => __( 'Footer & Navigation' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 

			'priority' => 50, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
		)
	);

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_section( 'footer_navigation_section',
		array(
			'title' => __( 'Footer Section' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 
			'panel' => 'footer_navigation_panel', 
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_sign_up_text');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_sign_up_text',
		array(
		'label' => __( 'Footer Sign Up Text' ),
		'description' => esc_html__( 'Enter sign up details that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_email_address');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_email_address',
		array(
		'label' => __( 'Footer Email Address' ),
		'description' => esc_html__( 'Enter email details that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_address_text');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_address_text',
		array(
		'label' => __( 'Footer Address Text' ),
		'description' => esc_html__( 'Enter address text that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);






}





















add_action( 'customize_register', 'second_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function second_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function second_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function second_theme_customize_preview_js() {
	wp_enqueue_script( 'second_theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'second_theme_customize_preview_js' );
