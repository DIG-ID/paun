<section class="section-popup-store pt-8 pb-44 bg-bg-color overflow-hidden w-11/12 mx-auto border-t-2 border-text-color">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-12">
		<div class="col col-span-1 lg:col-span-12">
			<h2 class="title-section"><?php the_field( 'section_popupstore_section_title' ); ?></h2>
		</div>
	</div>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-9 pt-16">
		<div class="col col-span-1 lg:col-span-3">
			<h3 class="title-normal"><?php the_field( 'section_popupstore_title' ); ?></h3>
		</div>
	</div>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-9 pt-4">
		<div class="col col-span-1 lg:col-span-3">
			<p class="text-bigger"><?php the_field( 'section_popupstore_schedule' ); ?></p>
		</div>
        <div class="col col-span-1 lg:col-span-3 px-8">
			<p class="text-body"><?php the_field( 'section_popupstore_description' ); ?></p>
		</div>
        <div class="col col-span-1 lg:col-span-3">
			<p class="text-bigger"><?php the_field( 'section_popupstore_order_text' ); ?></p>
		</div>
	</div>
</section>