<?php
get_header();
	do_action( 'before_main_content' );
	do_action( 'breadcrumbs' );
	get_template_part( 'template-parts/pages/blog/blog', 'page-content' );
	do_action( 'after_main_content' );
get_footer();
