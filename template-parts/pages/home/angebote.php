<section class="section-unser-antrieb pt-8 pb-44 bg-bg-color overflow-hidden w-11/12 mx-auto border-t-2 border-text-color">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-12">
		<div class="col col-span-1 lg:col-span-12">
		    <h2 class="title-section"><?php the_field( 'section_angebote_section_title' ); ?></h2>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 py-24">
		<div class="col col-span-1 lg:col-span-1 lg:col-start-2 lg:pr-14">
		    <p class="text-body"><?php the_field( 'section_angebote_description_left_column' ); ?></p>
        </div>
        <div class="col col-span-1 lg:col-span-1 lg:pl-14">
		    <p class="text-body"><?php the_field( 'section_angebote_description_right_column' ); ?></p>
        </div>
    </div>
    <div class="swiper swiper-angebote-home">
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
        <div class="container grid grid-cols-1 md:grid-cols-3 py-28 swiper-slide">
            <div class="col col-span-1 lg:col-span-1 flex justify-end items-start pt-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-top.svg" class="mr-7">
            </div>
            <div class="col col-span-1 lg:col-span-2 border-b-2 border-text-color pb-32">
                <h2 class="title-normal"><?php the_title(); ?></h2>
                <p class="text-body lg:max-w-sm mb-10"><?php the_field('section_intro_intro_text') ?></p>
                <p class="text-bigger flex items-center my-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/schedule.svg" class="mr-4"><?php the_field('section_intro_schedule') ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-moreinfo text-button flex items-center"><span><?php esc_html_e( 'Mehr erfahren', 'paun' ) ?></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="ml-4"></a>
            </div>
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
        <div class="swiper-pagination-angebote"></div>
    </div>
</section>