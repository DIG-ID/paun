<?php

get_header();
	do_action( 'before_main_content' );
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                    get_template_part( 'template-parts/posts/angebote/intro' );
                    get_template_part( 'template-parts/posts/angebote/angebote' );
                endwhile;
            endif;
	do_action( 'after_main_content' );
get_footer();
