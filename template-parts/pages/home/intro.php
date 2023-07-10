<section class="section-intro py-16 xl:py-32 lg:border-b border-solid overflow-hidden">
	<div class="lg:container mx-auto px-8 grid grid-cols-1 md:grid-cols-12">
		<div class="col-span-1 md:col-span-5 lg:col-span-4">
			<h2 class="title-normal !font-normal"><?php the_field( 'intro_title' ); ?></h2>
		</div>
		<div class="col col-span-1 md:col-span-6 lg:col-span-5 md:col-start-7 lg:col-start-6">
			<p class="text-body"><?php the_field( 'intro_description' ); ?></p>
		</div>
	</div>
</section>