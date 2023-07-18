<section class="section-newsletter pt-16 sm:pt-36 pb-20 sm:pb-44 bg-bg-color overflow-hidden w-11/12 mx-auto border-t-2 border-text-color">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12">
        <div class="col col-span-1 lg:col-span-6 lg:col-start-4 pb-0 sm:pb-12">
			<h3 class="title-normal text-center"><?php the_field( 'section_newsletter_section_title' ); ?></h3>
		</div>
    </div>
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12">
        <div class="col col-span-1 lg:col-span-6 lg:col-start-4">
			<h3 class="text-bigger text-center max-w-xs sm:max-w-[30rem] mx-auto"><?php the_field( 'section_newsletter_description' ); ?></h3>
      <div class="newsletter_form-wrapper text-center sm:mt-8">
      <?php 
			$form_shortcode = get_field('settings_newsletter_shortcode', 'option');
			echo do_shortcode($form_shortcode);
			?>
      </div>
		</div>
    </div>
</section>