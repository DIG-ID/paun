<section class="section-intro py-8 xl:py-32 bg-bg-color overflow-hidden">
	<div class="container mx-auto px-8 grid grid-cols-1 md:grid-cols-12">
		<div class="col col-span-1 lg:col-span-3 lg:col-start-7">
			<h2 class="title-normal"><?php the_field( 'section_intro_head_title' ); ?></h2>
		</div>
	</div>
	<div class="container mx-auto pb-16 px-8 grid grid-cols-1 md:grid-cols-12">
		<div class="col col-span-1 lg:col-span-6">
			<a href="" class="" type="button"></a>
		</div>
		<div class="col col-span-1 lg:col-span-6">
			<h2 class="text-body columns-2"><?php the_field( 'section_intro_head_text' ); ?></h2>
		</div>
	</div>
	<div class="container mx-auto py-16 px-8 grid grid-cols-1 md:grid-cols-9">
		<div class="col col-span-1 lg:col-span-1 lg:col-start-5 justify-center flex">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot_sep.svg">
		</div>
		<div class="col col-span-1 lg:col-span-7 lg:col-start-2 justify-center flex">
		<?php 
			$intro_image = get_field('section_intro_head_image');
			if( $intro_image ) {
				echo wp_get_attachment_image( $intro_image, 'full' );
			} 
		?>
		</div>
		<div class="col col-span-1 lg:col-span-1 lg:col-start-5 justify-center flex">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot_sep.svg">
		</div>
	</div>

	<div class="container mx-auto py-16 px-8 grid grid-cols-1 md:grid-cols-12">
		<div class="col col-span-1 lg:col-span-12 flex justify-center pb-8">
			<h2 class="title-normal"><?php the_field( 'section_intro_foot_title' ); ?></h2>
		</div>
		<div class="col col-span-1 lg:col-span-8 lg:col-start-3 flex justify-center">
			<h2 class="text-body columns-2"><?php the_field( 'section_intro_foot_text' ); ?></h2>
		</div>
	</div>
</section>