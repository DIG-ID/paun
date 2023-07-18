<section class="section-angebote-list pb-44 bg-bg-color overflow-hidden w-11/12 mx-auto">
    
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12">
        <div class="col-span-3">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
        </div>
        <div class="col-span-8 lg:pl-12">
            <h2 class="title-normal"><?php the_title(); ?></h2>
            <p class="text-body max-w-sm"><?php the_field( 'section_intro_intro_text' ); ?></p>
            <p class="text-bigger flex items-center my-16"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/schedule.svg" class="mr-4"><?php the_field('section_intro_schedule') ?></p>
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="col-span-1 lg:col-span-8">
                    <p class="text-body !font-bold"><?php esc_html_e( 'Beschreibung:', 'paun' ); ?></p>
                    <p class="text-body lg:max-w-md"><?php the_field( 'section_beschreibung_description_text' ); ?></p>
                    <p class="text-body !font-bold pr-6"><?php the_field( 'section_beschreibung_footer_text' ); ?></p>
                </div>
                <div class="col-span-1 lg:col-span-4">
                    <p class="text-body !font-bold"><?php esc_html_e( 'Unser Diner Angebot beinhaltet:', 'paun' ); ?></p>
                    <ul class="list-disc pl-5">
                    <?php
                    if( have_rows('offer_items_list') ):
                    while( have_rows('offer_items_list') ) : the_row(); ?>
                    <li class="text-body !mb-0"><?php the_sub_field( 'item' ); ?></li>
                    <?php endwhile;
                    endif; 
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-span-1">
        <?php
        $previous_post = get_previous_post(); // Get the previous post object

        if ($previous_post) { // Check if there is a previous post
            $previous_post_link = get_permalink($previous_post); // Get the permalink of the previous post
            ?>
            <a href="<?php echo esc_url($previous_post_link); ?>" class="text-bigger flex items-center"><span><?php esc_html_e( 'NÄCHTE', 'paun' ); ?></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="ml-4"></a>
            <?php
        }
        ?>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 pt-12">
        <div class="col-span-1 lg:col-span-9 lg:col-start-4 lg:pl-12">
            <button data-modal-target="form-popup" data-modal-toggle="form-popup" class="btn-order" type="button"><?php esc_html_e( 'Anfrage senden', 'paun' ) ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="mx-4"></button>
        </div>
    </div>
    
    <div id="form-popup" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full bg-main-green p-10">
            <!-- Modal content -->
            <h2 class="title-normal"><?php the_title(); ?></h2>
            <?php 
			$form_shortcode = get_field('settings_angebote_form_shortcode', 'option');
			echo do_shortcode($form_shortcode);
			?>
        </div>
    </div>
</section>

