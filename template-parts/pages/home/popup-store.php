<section class="section-popup-store pb-44 bg-bg-color overflow-hidden w-full sm:w-11/12 mx-auto px-8 sm:px-0">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 pt-8 border-t-2 border-text-color">
		<div class="col-span-1 lg:col-span-12">
			<h2 class="title-section"><?php the_field( 'section_popupstore_section_title' ); ?></h2>
		</div>
	</div>

    <div class="container mx-auto grid grid-cols-5 sm:grid-cols-2 lg:grid-cols-9 pt-16">
		<div class="col-span-3 lg:col-span-3">
			<h3 class="title-normal"><?php the_field( 'section_popupstore_title' ); ?></h3>
		</div>
	</div>

    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-9 pt-4">
		<div class="col-span-1 sm:col-span-1 lg:col-span-3 grid grid-cols-4">
            <div class="col-span-1 pr-3 pt-5">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-notarrow.svg">
			</div>
			<div class="col-span-3">
            	<p class="text-bigger"><?php the_field( 'section_popupstore_schedule' ); ?></p>
			</div>
		</div>
        <div class="col-span-1 sm:col-span-1 lg:col-span-3 pt-8 sm:pt-0 sm:px-8">
			<p class="text-body"><?php the_field( 'section_popupstore_description' ); ?></p>
		</div>
        <div class="col-span-1 sm:col-span-2 lg:col-span-3 pt-5 sm:pt-20 lg:pt-0">
			<p class="text-bigger mb-8 sm:mb-20 w-full sm:w-1/2 lg:w-full float-left lg:float-none"><?php the_field( 'section_popupstore_order_text' ); ?></p>
            <a href="<?php the_field( 'settings_order_button_url', 'option' ); ?>" class="btn-order px-8 py-2 float-right sm:float-none" type="button"><?php esc_html_e( 'Jetzt bestellen', 'paun' ) ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="mx-4"></a>
		</div>
	</div>
</section>