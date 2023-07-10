<footer class="footer-main pt-16 border-t border-solid border-black">
	<div class="footer-content container mx-auto px-8 pb-8 grid grid-cols-1 gap-5 lg:grid-cols-12 ">
		<div class="col-span-1 lg:col-span-3 ">
			<?php the_custom_logo(); ?>
			<div class="footer-contacts mt-10 flex flex-col justify-between">
				<p class="font-sans font-bold text-sm text-black leading-7 uppercase mb-8"><?php the_field( 'footer_address', 'options' ); ?></p>
				<a class="font-sans font-bold text-sm text-black uppercase mb-8 transition-all duration-300 hover:text-black/60" href="mailto:<?php echo esc_attr( get_field( 'footer_email', 'options' ) ); ?>" ><?php the_field( 'footer_email', 'options' ); ?></a>
				<?php
				$phone = get_field( 'footer_phone', 'options' );
				if ( $phone ) :
					$phone = str_replace( array( '(', ')', ' ' ), '', $phone );
					$phone = preg_replace( '/[^0-9]/', '', $phone );
					?><a class="font-sans font-bold text-sm text-black uppercase transition-all duration-300 hover:text-black/60" href="tel:<?php echo esc_attr( $phone ); ?>" ><?php the_field( 'footer_phone', 'options' ); ?></a><?php
				endif;
				?>
				<a class="font-sans font-bold text-sm text-black uppercase mb-8 transition-all duration-300 hover:text-black/60" href="tel:<?php echo trim( get_field( 'footer_fax', 'options' ) ); ?>"><?php the_field( 'footer_fax', 'options' ); ?></a>
			</div>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<?php
			do_action( 'mega_menu_link', 'szl', 'mega-menu-simple' );
			wp_nav_menu(
				array(
					'theme_location' => 'szl',
					'container'      => false,
					'menu_class'     => 'menu-footer mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-3 ">
			<?php
			do_action( 'mega_menu_link', 'hotel_restaurant', 'mega-menu-simple' );
			wp_nav_menu(
				array(
					'theme_location' => 'hotel',
					'container'      => false,
					'menu_class'     => 'menu-footer mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<?php
			do_action( 'mega_menu_link', 'top_of_jura', 'mega-menu-simple' );
			wp_nav_menu(
				array(
					'theme_location' => 'jura',
					'container'      => false,
					'menu_class'     => 'menu-footer mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<!--<h3 class="text-sm text-black font-sans font-bold uppercase"><?php esc_html_e( 'FOLGEN SIE UNS', 'paun' )?></h3>-->
			<?php //do_action( 'socials' ); ?>
		</div>
	</div>
	<div class="copyright border-t border-b border-solid border-black">
		<div class="flex justify-between items-center">
			<p class="copyright-text text-xs lg:text-sm text-black font-normal pl-5">
				<?php
				$y = date( 'Y' );
				printf(
					esc_html__( 'Urheberrecht &copy; %d paun', 'paun' ),
					esc_html( $y ),
				);
				?>
			</p>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_terms',
					'container'      => false,
					'menu_class'     => 'footer-terms',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
	</div>
</footer>