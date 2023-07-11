<header id="header-main" class="header-main w-full top-0 box-border bg-bg-color" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main container mx-auto" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'paun' ); ?>">
		<div class="navigation-main-content flex">
			<div class="w-1/3 max-w-7xl flex order-2 p-8">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level w-full justify-end flex">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			</div>
			<div class="w-2/3 flex p-8">
			<?php 
			$main_logo = get_field('settings_website_logo', 'option');
			if( !empty( $main_logo ) ): ?>
				<img src="<?php echo esc_url($main_logo['url']); ?>" alt="<?php echo esc_attr($main_logo['alt']); ?>" class="max-w-full" />
			<?php endif; ?>
			</div>
		</div>
	</nav>
</header>