<section class="section-map border-t border-solid border-black overflow-hidden">
	<?php
	$location = get_field( 'map' );
	if ( $location ) :
		?>
		<div class="acf-map w-full h-[600px] " data-zoom="10">
			<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
		</div>
		<?php
	endif;
	?>
</section>