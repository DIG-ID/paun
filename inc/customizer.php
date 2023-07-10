<?php
/**
 * Register theme customizer
 */

function paun_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'paun_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'paun Theme Options', 'paun' ),
			'description'    => __( 'Theme options for the paun Theme', 'paun' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}

add_action( 'customize_register', 'paun_theme_customizer_register' );
