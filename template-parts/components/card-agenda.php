<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-agenda overflow-hidden mb-20' ); ?>>
	<div class="card-agenda-wrapper grid grid-cols-1 lg:grid-cols-2">
		<div class="card-agenda-image col-span-1 border border-solid border-black">
			<?php
			$image = get_the_post_thumbnail_url( get_the_ID(), 'agenda-thumbnail' );
			console_log($image);
			if ( $image ) :
				?><img class="w-full h-auto object-cover max-h-[550px]" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_html( get_the_post_thumbnail_caption() ); ?>"><?php
			else :
				?><img class="w-full h-auto object-cover max-h-[550px]" src="http://via.placeholder.com/550x550"><?php
			endif;
			?>
		</div>
		<div class="card-agenda-content col-span-1 flex flex-col justify-center items-start px-8 py-8 lg:px-16 lg:py-0 border border-solid border-black lg:border-l-0">
			<h3 class="title-normal font-bold lg:!mb-6"><?php the_title(); ?></h3>
			<div class="agenda-metadata mb-8">
				<p class="start-date text-sm text-black font-bold whitespace-nowrap flex mb-2">
					<?php the_field( 'info_occasion' ); ?>
				</p>
				<div class="lg:flex justify-between">
					<p class="start-date text-sm text-black font-bold whitespace-nowrap flex mr-10">
						<?php esc_html_e( 'Ort:', 'chasseral' ); ?>
						<span class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2 ml-2"><?php echo esc_html( get_the_category_by_ID( get_field( 'info_location' ) ) ); ?></span>
					</p>
					<p class="start-date text-sm text-black font-bold whitespace-nowrap flex">
						<?php esc_html_e( 'Zeitraum:', 'chasseral' ); ?> <span class="font-normal text-text-grey ml-2"><?php the_field( 'info_zeitraum' ); ?></span>
						<?php $start_date = get_field( 'start_date' ); ?>
						<!--<time datetime="<?php echo gmdate( 'c', strtotime( $start_date ) ); ?>" itemprop="datePublished" class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2 ml-2"><?php echo gmdate( 'l d, F Y', strtotime( $start_date ) ); ?></time>-->
					</p>
				</div>
			</div>
			<p class="text-sm font-normal leading-7 max-w-md mb-8 line-clamp-3"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<a href="<?php the_permalink(); ?>" class="btn-general hover:bg-main-green hover:text-white"><?php esc_html_e( 'Mehr erfahren', 'chasseral' ); ?></a>
		</div>
	</div>
</article>