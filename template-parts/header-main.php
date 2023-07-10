<header id="header-main" class="header-main w-full fixed top-0 box-border bg-bg-color border-b border-black border-solid" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'paun' ); ?>">
		<div class="navigation-main-content">
			<div class="w-1/2 md:border-r border-solid border-black flex">
				<?php
				has_custom_logo() ? the_custom_logo() : '';
				?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			<div class="navigation-buttons">
				<?php do_action( 'wpml_add_language_selector' ); ?>
				<button class="mega-menu-toggle">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
		</div>

		<div class="mega-menu-navigation">
			<div class="mega-menu-content">
				<div class="col-auto flex-col justify-center border-r border-solid border-black px-20 hidden 2xl:flex">
					<div class="see-webcam w-full items-center gap-5 mb-8 hidden xl:flex">
						<div class="grow">
							<h3 class="text-xl font-bold text-black font-sans mb-3 uppercase"><?php the_field( 'widget_text_title', 'services-status' ); ?></h3>
							<p class="text-body !leading-5"><?php the_field( 'widget_text_description', 'services-status' ); ?></p>
						</div>
						<?php
						$webcam_link = get_field( 'widget_text_link', 'services-status' );
						if ( $webcam_link ) :
							$link_url    = $webcam_link['url'];
							$link_title  = $webcam_link['title'];
							$link_target = $webcam_link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn-general whitespace-nowrap !flex items-center flex-nowrap !px-6" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<span><?php echo esc_html( $link_title ); ?></span>
								<svg class="ml-1 " width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
								</svg>
							</a>
							<?php
						endif;
						?>
					</div>
					<?php do_action( 'service_status_widget', false, false ); ?>
					<?php do_action( 'notification' ); ?>
				</div>
				<div class="mega-menu--wrapper 2xl:hidden">
					<div class="site-root-title">
						<p class="lg:text-2xl xl:text-3xl font-bold uppercase bold whitespace-nowrap"><?php esc_html_e( 'paun', 'paun' ); ?></p>
					</div>
					<div class="mega-menu--menus">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main',
								'container'      => false,
								'menu_class'     => 'mega-menu-top flex flex-col 2xl:hidden',
								'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
								'fallback_cb'    => '__return_false',
							),
						);
						?>
					</div>
				</div>

				<div class="mega-links col-auto flex flex-col justify-center px-0 lg:px-10 xl:px-24">
					<p class="mega-menu-title uppercase font-bold mb-5 hidden xl:block"><?php esc_html_e( 'Willkommen auf dem paun', 'paun' ); ?></p>
					<p class="mega-menu-description mb-10 hidden xl:block"><?php esc_html_e( 'Erleben Sie die Vielfalt des Jura.', 'paun' ); ?></p>
				</div>
			</div>
		</div>
	</nav>
</header>