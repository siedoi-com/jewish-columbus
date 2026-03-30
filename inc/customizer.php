<?php
/**
 * neutech-columbus Theme Customizer
 *
 * @package neutech-columbus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function neutech_columbus_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'neutech_columbus_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'neutech_columbus_customize_partial_blogdescription',
			)
		);
	}


    $theme_template = wp_get_theme()->get_template();
    $theme_text_domain = wp_get_theme()->get('TextDomain');
    $wp_customize->add_setting('footer_logo', [
        'default'           => 0,
        'sanitize_callback' => 'absint',
    ]);
    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'footer_logo_control',
        [
            'label'       => __('Footer Logo', $theme_text_domain),
            'section'     => 'title_tagline',
            'settings'    => 'footer_logo',
            'mime_type'   => 'image',
            'priority'    => 9,
        ]
    ));

}
add_action( 'customize_register', 'neutech_columbus_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function neutech_columbus_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function neutech_columbus_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function neutech_columbus_customize_preview_js() {
	wp_enqueue_script( 'neutech-columbus-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'neutech_columbus_customize_preview_js' );
