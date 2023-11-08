<section class="section-intro pt-8 pb-0 md:py-8 lg:pb-32 lg:pt-16 bg-bg-color overflow-hidden">
	<div class="container mx-auto px-8 grid grid-cols-2 sm:grid-cols-7 lg:grid-cols-12 pt-5 md:pt-0">
		<div class="col col-span-2 sm:col-span-3 lg:col-span-3 lg:col-start-7">
			<h2 class="title-normal !mb-5 md:!mb-8"><?php the_field( 'section_intro_head_title' ); ?></h2>
		</div>
	</div>
	<div class="container mx-auto pb-7 md:pb-16 px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="col col-span-2 sm:col-span-1 lg:col-span-6 pt-2 order-2 lg:order-1 flex lg:block justify-start md:justify-end">
			<a class="btn-order btn-disabled px-8 py-2" type="button"><?php esc_html_e( 'Jetzt bestellen', 'paun' ) ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="mx-4 hidden lg:block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow_mob.svg" class="mr-0 ml-4 lg:hidden block"></a>
		</div>
		<div class="col-span-1 lg:col-span-6 order-1 lg:order-2">
			<h2 class="text-body sm:columns-2"><?php the_field( 'section_intro_head_text' ); ?></h2>
		</div>
	</div>
	<div class="container mx-auto pt-0 pb-0 md:pb-10 sm:pt-16 sm:pb-16 md:px-8 grid grid-cols-1 lg:grid-cols-9">
		<div class="col col-span-1 lg:col-span-1 lg:col-start-5 justify-center flex">
			<img class="dot_sep" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot_sep.svg">
		</div>
		<div class="col col-span-1 lg:col-span-7 lg:col-start-2 justify-center flex relative lg:my-28">
			<img class="home-intro-img w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Circular_text_v2.png">
			<img class="overlay-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Bread_home.png">
		</div>
		<div class="col col-span-1 lg:col-span-1 lg:col-start-5 justify-center flex">
			<img class="dot_sep" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dot_sep.svg">
		</div>
	</div>

	<div class="container mx-auto pt-5 pb-[68px] md:py-16 px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="col col-span-1 lg:col-span-12 flex justify-center pb-8">
			<h2 class="title-normal !mb-0 md:!mb-8"><?php the_field( 'section_intro_foot_title' ); ?></h2>
		</div>
		<div class="col col-span-1 lg:col-span-8 lg:col-start-3 flex justify-center">
			<h2 class="text-body !mb-0 md:!mb-8 sm:columns-2"><?php the_field( 'section_intro_foot_text' ); ?></h2>
		</div>
	</div>
</section>