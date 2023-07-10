<?php
/**
 * Template Name: Contact Page Template
 */

get_header();
	do_action( 'before_main_content' );
		do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/page/header' );
		get_template_part( 'template-parts/pages/contact/contacts' );
		get_template_part( 'template-parts/pages/contact/form' );
		get_template_part( 'template-parts/pages/contact/map' );
		get_template_part( 'template-parts/pages/contact/arrival' );
		get_template_part( 'template-parts/pages/contact/weather' );
		get_template_part( 'template-parts/pages/contact/webcam' );
	do_action( 'after_main_content' );
get_footer();
