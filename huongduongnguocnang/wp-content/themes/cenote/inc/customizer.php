<?php
/**
 * Cenote Theme Customizer
 *
 * @package cenote
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cenote_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'cenote_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'cenote_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'cenote_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cenote_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cenote_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cenote_customize_preview_js() {
	wp_enqueue_script( 'cenote-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cenote_customize_preview_js' );

/**
 * Adds custom css in theme.
 *
 * @return void
 */
function cenote_custom_css() {
	$style = get_theme_mod( 'cenote_header_media_style', 'cenote-header-media--center' );
	$css   = '';

	if ( 'cenote-header-media--fullscreen' === $style ) {
		$css .= '.cenote-header-media {
			background-image: url( "' . get_header_image() . '" );
		}';
	} else {
		$css .= '.cenote-header-media .tg-container {
			background-image: url( "' . get_header_image() . '" );
		}';
	}

	wp_add_inline_style( 'cenote-style', $css );
}
add_action( 'wp_enqueue_scripts', 'cenote_custom_css', 10 );
