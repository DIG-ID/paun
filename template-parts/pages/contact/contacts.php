<section id="contacts-schedule" class="section-contacts-schedule border-t border-solid border-black py-16 lg:py-20 xl:py-36 overflow-hidden">
	<div class="container mx-auto px-8 grid grid-cols-1 xl:grid-cols-2">
		<div class="contacts-wrapper mb-16 xl:mb-0">
			<h2 class="text-2xl lg:text-3xl font-bold mb-10"><?php esc_html_e( 'Kontakt', 'paun' ); ?></h2>
			<ul class="contacts-content">
				<li class="flex mb-6">
					<p class="w-[100px] font-semibold"><?php esc_html_e( 'Adresse:', 'paun' ); ?></p>
					<p class=""><?php the_field( 'footer_address', 'options' ); ?></p>
				</li>
				<li class="flex mb-6">
					<p class="w-[100px] font-semibold"><?php esc_html_e( 'E-Mail:', 'paun' ); ?></p>
					<a href="mailto:<?php echo esc_attr( get_field( 'footer_email', 'options' ) ); ?>" class=""><?php the_field( 'footer_email', 'options' ); ?></a>
				</li>
				<li class="flex mb-6">
					<p class="w-[100px] font-semibold"><?php esc_html_e( 'Telefon:', 'paun' ); ?></p>
					<div class="contacts-phone">
						<?php
						$phone = get_field( 'footer_phone', 'options' );
						if ( $phone ) :
							$phone = str_replace( array( '(', ')', ' ' ), '', $phone );
							$phone = preg_replace( '/[^0-9]/', '', $phone );
							?><a class="font-sans font-NORMALtext-sm text-black uppercase transition-all duration-300 hover:text-black/60" href="tel:<?php echo esc_attr( $phone ); ?>" ><?php the_field( 'footer_phone', 'options' ); ?></a><?php
						endif;
						?>
					</div>
				</li>
			</ul>

		</div>
		<div class="schedule-wrapper">
			<h2 class="title-normal !mb-10"><?php the_field( 'schedule_title' ); ?></h2>
			<?php
			if ( have_rows( 'schedule_opening_hours' ) ) :
				echo '<ul class="opening-hours mb-20">';
				echo '<li class="grid grid-cols-3 mb-10"><p class="col-start-2 font-bold text-base lg:text-lg">' . esc_html( get_field( 'schedule_title_april' ) ) . '</p><p class="col-start-3 font-bold text-base lg:text-lg">' . esc_html( get_field( 'schedule_title_october' ) ) . '</p></li>';
				while ( have_rows( 'schedule_opening_hours' ) ) :
					the_row();
					echo '<li class="grid grid-cols-3 border-b border-solid border-black pb-1 mb-7">';
					echo '<p class="day text-sm lg:text-lg font-bold">' . get_sub_field( 'day' ) . '</p>';
					echo '<p class="hours hours-1 text-sm lg:text-lg">' . get_sub_field( 'april' ) . '</p>';
					echo '<p class="hours hours-2 text-sm lg:text-lg">' . get_sub_field( 'october' ) . '</p>';
					echo '</li>';
				endwhile;
				echo '</ul>';
			endif;
			?>
			<h2 class="title-normal !mb-10"><?php the_field( 'schedule_title_hotel' ); ?></h2>
			<?php
			if ( have_rows( 'schedule_opening_hours_hotel' ) ) :
				echo '<ul class="opening-hours mb-20">';
				while ( have_rows( 'schedule_opening_hours_hotel' ) ) :
					the_row();
					echo '<li class="grid grid-cols-3 border-b border-solid border-black pb-1 mb-7">';
					echo '<p class="day text-sm lg:text-lg font-bold">' . get_sub_field( 'day' ) . '</p>';
					echo '<p class="hours hours-1 text-sm lg:text-lg">' . get_sub_field( 'april' ) . '</p>';
					echo '<p class="hours hours-2 text-sm lg:text-lg">' . get_sub_field( 'october' ) . '</p>';
					echo '</li>';
				endwhile;
				echo '</ul>';
			endif;
			?>
			<?php do_action( 'notification' ); ?>
		</div>
	</div>
</section>