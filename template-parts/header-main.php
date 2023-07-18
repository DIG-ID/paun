<header id="header-main" class="header-main w-full top-0 box-border bg-bg-color" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main container mx-auto" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'paun' ); ?>">
		<div class="navigation-main-content flex flex-col sm:flex-row">
			<div class="w-full sm:w-5/12 xl:w-1/3 max-w-7xl flex sm:order-2 p-8">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level w-full justify-between sm:justify-end flex">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			</div>
			<div class="header-logo-wrapper w-10/12 sm:w-7/12 xl:w-2/3 flex p-8">
			<?php 
			$main_logo = get_field('settings_website_logo', 'option');
			if( !empty( $main_logo ) ): ?>
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url($main_logo['url']); ?>" alt="<?php echo esc_attr($main_logo['alt']); ?>" class="header-logo" /></a>
			<?php endif; ?>
			</div>
		</div>
	</nav>
</header>