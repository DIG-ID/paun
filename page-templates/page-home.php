<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/intro' );
		get_template_part( 'template-parts/pages/home/popup-store' );
		get_template_part( 'template-parts/pages/home/newsletter' );
		get_template_part( 'template-parts/pages/home/unser-antrieb' );
		get_template_part( 'template-parts/pages/home/angebote' );
	do_action( 'after_main_content' );
get_footer();
