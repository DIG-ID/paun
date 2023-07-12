<section class="section-unser-antrieb pt-8 pb-44 bg-bg-color overflow-hidden w-11/12 mx-auto border-t-2 border-text-color">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-12">
		<div class="col col-span-1 lg:col-span-8 grid grid-rows-2">
            <div class="row-span-1">
			    <h2 class="title-section"><?php the_field( 'section_unser_antrieb_section_title' ); ?></h2>
            </div>
            <div class="row-span-1 grid grid-cols-2 lg:gap-4">
                <div class="col-span-1">
			        <p class="text-bigger"><?php the_field( 'section_unser_antrieb_subtitle' ); ?></p>
                </div>
                <div class="col-span-1 lg:pr-12">
			        <p class="text-body"><?php the_field( 'section_unser_antrieb_description' ); ?></p>
                </div>
            </div>
        </div>
        <div class="col col-span-1 lg:col-span-4 pt-4">
        <?php 
			$antrieb_image = get_field('section_unser_antrieb_image');
			if( $antrieb_image ) {
				echo wp_get_attachment_image( $antrieb_image, 'full' );
			} 
		?>
		</div>
	</div>
</section>