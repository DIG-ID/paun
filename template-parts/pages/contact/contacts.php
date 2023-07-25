<section class="section-contact pb-24 lg:pb-44 bg-bg-color overflow-hidden w-full sm:w-11/12 mx-auto px-8 sm:px-0">
	<div class="container mx-auto grid grid-cols-1 lg:grid-cols-2">
		<div class="col-span-1">
			<p class="text-bigger mb-8 lg:mb-16"><?php the_field( 'section_details_title' ); ?></p>
			<p class="title-subtitle mt-10">
				<?php the_field( 'contact_address', 'option' ) ?>
			</p>
			<p class="mt-10">
				<a class="title-subtitle" href="tel:<?php the_field( 'contact_phone_number', 'option' ) ?>"><?php the_field( 'contact_phone_number', 'option' ) ?></a>
				<br>
				<a class="title-subtitle" href="mailto:<?php the_field( 'contact_email', 'option' ) ?>"><?php the_field( 'contact_email', 'option' ) ?></a>
			</p>
		</div>
		<div class="col-span-1 mt-16 lg:mt-0">
			<p class="text-bigger mb-8 lg:mb-16"><?php the_field( 'section_form_title' ); ?></p>
			<?php 
			$form_shortcode = get_field('section_form_form_shortcode');
			echo do_shortcode($form_shortcode);
			?>
		</div>
	</div>
</section>