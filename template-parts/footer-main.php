<footer class="footer-main py-16 border-t-2 border-solid border-text-color bg-bg-color">
	<div class="footer-content container mx-auto py-8 grid grid-cols-1 gap-5 lg:grid-cols-10 ">
		<div class="col-span-1 lg:col-span-3">
		<?php 
		$footer_logo = get_field('settings_footer_logo', 'option');
		if( !empty( $footer_logo ) ): ?>
			<img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" class="max-w-full" />
		<?php endif; ?>
		</div>
	</div>
	<div class="footer-content container mx-auto py-8 grid grid-cols-1 gap-5 lg:grid-cols-10 ">
		<div class="col-span-1 lg:col-span-3">
			<h3 class="text-text-color font-titles text-3xl"><?php esc_html_e( 'Kontakt' , 'paun' ) ?></h3>
			<p class="text-body mt-10">
				<?php the_field( 'contact_address', 'option' ) ?>
			</p>
			<p class="mt-10">
				<a class="text-body" href="tel:<?php the_field( 'contact_phone_number', 'option' ) ?>"><?php the_field( 'contact_phone_number', 'option' ) ?></a>
				<br>
				<a class="text-body" href="mailto:<?php the_field( 'contact_email', 'option' ) ?>"><?php the_field( 'contact_email', 'option' ) ?></a>
			</p>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<h3 class="text-text-color font-titles text-3xl"><?php esc_html_e( 'Pages' , 'paun' ) ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'menu-footer mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_terms',
					'container'      => false,
					'menu_class'     => 'menu-footer mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
		</div>
		<div class="col-span-1 lg:col-span-4">
			<h3 class="text-text-color font-titles text-3xl"><?php esc_html_e( 'Newsletter' , 'paun' ) ?></h3>
		</div>
	</div>
</footer>