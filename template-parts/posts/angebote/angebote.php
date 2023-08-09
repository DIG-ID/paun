<section class="section-angebote-list pb-24 lg:pb-44 bg-bg-color overflow-hidden w-full sm:w-11/12 mx-auto px-8 sm:px-0">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12">
        <div class="col-span-3 hidden lg:block">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
        </div>
        <div class="col-span-7 lg:pl-12">
            <h2 class="title-normal"><?php the_title(); ?></h2>
            <p class="text-body max-w-xs sm:max-w-sm"><?php the_field( 'section_intro_intro_text' ); ?></p>
            <p class="block lg:hidden max-w-full sm:max-w-md"><?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?></p>
            <p class="text-bigger flex items-start my-16 !leading-6 sm:!leading-10"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/schedule.svg" class="mr-4 w-5"><?php the_field('section_intro_schedule') ?></p>
            <div class="grid grid-cols-1 sm:grid-cols-12 lg:grid-cols-12 gap-5 lg:gap-0">
                <div class="col-span-1 sm:col-span-7 lg:col-span-8">
                    <p class="text-body !font-bold"><?php esc_html_e( 'Beschreibung:', 'paun' ); ?></p>
                    <p class="text-body max-w-xs lg:max-w-sm xl:max-w-md"><?php the_field( 'section_beschreibung_description_text' ); ?></p>
                    <p class="text-body !font-bold pr-6 max-w-[260px] sm:max-w-none"><?php the_field( 'section_beschreibung_footer_text' ); ?></p>
                </div>
                <?php if( get_field('offer_items_list') ) : ?>
                <div class="col-span-1 sm:col-span-5 lg:col-span-4">
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
                <?php endif; ?>
            </div>
        </div>
        <div class="col-span-2 pt-4 hidden lg:block">
        
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 pt-12">
        <div class="col-span-1 lg:col-span-9 lg:col-start-4 lg:pl-12 text-right sm:text-left">
            <a data-fancybox data-src="#form-popup" href="javascript:;" class="btn-order" type="button"><?php esc_html_e( 'Anfrage senden', 'paun' ) ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="mx-4 hidden lg:block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow_mob.svg" class="mr-0 ml-4 lg:hidden block"></a>
        </div>
        <div class="col-span-2 pt-11 block lg:hidden">
        <?php
        $previous_post = get_previous_post(); 
        if ($previous_post) {
            $previous_post_link = get_permalink($previous_post);
            ?>
            <a href="<?php echo esc_url($previous_post_link); ?>" class="flex text-body uppercase !font-semibold items-center justify-end"><span><?php esc_html_e( 'Nächstes', 'paun' ); ?></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="ml-4 hidden lg:block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow_mob.svg" class="mr-0 ml-4 lg:hidden block"></a>
            <?php
        }
        ?>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 pt-12">
        <div class="col-span-1 lg:col-span-12 pt-4 hidden lg:flex justify-end">
            <?php
            $previous_post = get_previous_post(); 
            $next_post = get_next_post();

            $previous_post_link = $previous_post ? get_permalink($previous_post) : '#';
            $next_post_link = $next_post ? get_permalink($next_post) : '#';

            // Function to determine if a link is available
            function is_link_available($post) {
                return $post ? 'available' : 'unavailable';
            }

            ?>
            <a href="<?php echo esc_url($previous_post_link); ?>" class="flex text-body !font-semibold items-center mr-8 <?php echo is_link_available($previous_post); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="mr-4 hidden lg:block -scale-x-100"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow_mob.svg" class="mr-0 ml-4 lg:hidden block"><?php esc_html_e( 'Vorheriges', 'paun' ); ?></a>
            <a href="<?php echo esc_url($next_post_link); ?>" class="flex text-body !font-semibold items-center <?php echo is_link_available($next_post); ?>"><span><?php esc_html_e( 'Nächstes', 'paun' ); ?></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="ml-4 hidden lg:block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow_mob.svg" class="mr-0 ml-4 lg:hidden block"></a>
        </div>
    </div>
        <div id="form-popup" class="modal-content relative w-full max-w-2xl max-h-full bg-main-green sm:p-24 transition-opacity duration-300 ease-in-out hidden">
            <!-- Modal content -->
            <h2 class="title-normal"><?php the_title(); ?></h2>
            <p class="text-body max-w-xs sm:max-w-md !mb-16"><?php the_field( 'section_intro_intro_text' ); ?></p>
            <?php 
			$form_shortcode = get_field('settings_angebote_form_shortcode', 'option');
			echo do_shortcode($form_shortcode);
			?>
        </div>
</section>
