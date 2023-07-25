<section class="section-unser-antrieb pb-44 bg-bg-color overflow-hidden w-full sm:w-11/12 mx-auto px-8 sm:px-0">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 pt-8 border-t-2 border-text-color">
		<div class="col col-span-1 lg:col-span-12">
		    <h2 class="title-section"><?php the_field( 'section_angebote_section_title' ); ?></h2>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 py-0 sm:py-24 gap-0 sm:gap-5 lg:gap-0">
		<div class="col col-span-1 lg:col-span-1 lg:col-start-2 lg:pr-14">
		    <p class="text-body"><?php the_field( 'section_angebote_description_left_column' ); ?></p>
        </div>
        <div class="col col-span-1 lg:col-span-1 lg:pl-14">
		    <p class="text-body"><?php the_field( 'section_angebote_description_right_column' ); ?></p>
        </div>
    </div>
    <div class="swiper swiper-angebote-home container">
    <div class="swiper-wrapper">
        <?php
            $args = array(
            'post_type' => 'angebot',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => -1 // Retrieve all posts
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
        <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-3 pt-24 lg:pt-28 pb-6 lg:pb-0 swiper-slide">
            <div class="col col-span-1 sm:col-span-1 lg:col-span-1 flex justify-end items-start pt-5 pr-9 sm:pr-7">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-top.svg">
            </div>
            <div class="col col-span-3 sm:col-span-1 lg:col-span-2 pb-10 lg:pb-0 border-b-2 border-text-color lg:border-0">
                <h2 class="title-normal"><?php the_title(); ?></h2>
                <p class="text-body lg:max-w-sm mb-10"><?php the_field('section_intro_intro_text') ?></p>
                <p class="text-bigger flex items-start my-8 lg:my-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/schedule.svg" class="mr-4"><?php the_field('section_intro_schedule') ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-moreinfo text-button flex items-center !leading-6"><span><?php esc_html_e( 'Mehr erfahren', 'paun' ) ?></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="ml-4"></a>
            </div>
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
        <div class="container mx-auto lg:grid grid-cols-3 pt-24 lg:pt-28 pb-5 hidden">
            <div class="col-span-2 col-start-2 h-1">
                <p class="border-b-2 border-text-color"></p>
            </div>
        </div>
        <div class="container mx-auto swiper-pagination-angebote mt-8 sm:mt-0"></div><img class="float-right hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="ml-4">
    </div>
</section>