<section class="section-map pb-16 sm:pb-24 lg:pb-44 bg-bg-color overflow-hidden w-11/12 mx-auto">
	<div class="container mx-auto grid grid-cols-1">
		<div class="col-span-1">
			<p class="text-bigger mb-8 lg:!mb-16"><?php the_field( 'section_map_title' ); ?></p>
		</div>
		<div class="col-span-1">
		<?php
		$location = get_field( 'section_map_map' );
		if ( $location ) :
			?>
			<div class="acf-map w-full h-[400px] sm:h-[600px] " data-zoom="10">
				<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
			</div>
			<?php
		endif;
		?>
		</div>
	</div>
</section>