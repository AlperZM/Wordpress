<?php
/**
 * Seges One Theme Customizer
 *
 * @package Seges_One
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function seges_one_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'seges_one_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'seges_one_customize_partial_blogdescription',
			)
		);
	}
	
// 	Add Custom Content
// if ( is_front_page() ){
	$wp_customize->add_section(
    'my_section',
    array(
      'title' => 'Bölüm Seçenekleri',
      'priority' => 10,
    )
  );

  // Bölüm başlığı seçeneğini ekleyin

  $wp_customize->add_setting(
    'my_section_title',
    array(
      'default' => 'Bölüm Başlığı',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  // Bölüm başlığı kontrolünü ekleyin

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'my_section_title',
      array(
        'label' => 'Bölüm Başlığı',
        'section' => 'my_section',
        'type' => 'text',
      )
    )
  );
// }

	
}
add_action( 'customize_register', 'seges_one_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function seges_one_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function seges_one_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function seges_one_customize_preview_js() {
	wp_enqueue_script( 'seges-one-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'seges_one_customize_preview_js' );
