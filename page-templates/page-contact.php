<?php
/**
 * Template Name: Contact Page Template
 */

get_header();
	do_action( 'before_main_content' );
		do_action( 'breadcrumbs' );
		get_template_part( 'template-parts/pages/contact/intro' );
		get_template_part( 'template-parts/pages/contact/contacts' );
		get_template_part( 'template-parts/pages/contact/map' );
	do_action( 'after_main_content' );
get_footer();
