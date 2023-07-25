<section class="section-unser-antrieb pb-32 sm:pb-44 bg-bg-color overflow-hidden w-full sm:w-11/12 mx-auto px-8 sm:px-0">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-0 sm:gap-5 lg:gap-0 pt-8 border-t-2 border-text-color">
		<div class="col col-span-1 sm:col-span-2 lg:col-span-8 grid sm:grid-rows-2">
            <div class="sm:row-span-1">
			    <h2 class="title-section"><?php the_field( 'section_unser_antrieb_section_title' ); ?></h2>
            </div>
            <div class="sm:row-span-1 grid grid-cols-2 gap-0 sm:gap-5 lg:gap-4">
                <div class="col-span-2 sm:col-span-1">
			        <p class="title-subtitle lg:max-w-md"><?php the_field( 'section_unser_antrieb_subtitle' ); ?></p>
                </div>
                <div class="col-span-2 sm:col-span-1 lg:pr-12">
			        <p class="text-body"><?php the_field( 'section_unser_antrieb_description' ); ?></p>
                </div>
            </div>
        </div>
        <div class="col col-span-1 sm:col-span-1 lg:col-span-4 pt-4 pr-8 pl-8 sm:pr-24 sm:pl-0 lg:pr-0 mt-0 sm:-mt-20 lg:mt-0">
        <?php 
			$antrieb_image = get_field('section_unser_antrieb_image');
			if( $antrieb_image ) {
				echo wp_get_attachment_image( $antrieb_image, 'full' );
			} 
		?>
		</div>
	</div>
</section>