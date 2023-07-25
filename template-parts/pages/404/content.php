<section class="section-not-found pt-8 pb-16 lg:pt-20 lg:pb-24 xl:pb-64 px-8 md:px-16 xl:px-0 bg-contain bg-bottom bg-no-repeat bg-opacity-0 lg:bg-opacity-100" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/paun-mountains.min.svg' ) ?>);background-position-y: 140%;">
	<div class="container mx-auto lg:px-2">
		<h1 class="title-normal !mb-4"><br><?php esc_html_e( 'Seite nicht gefunden!', 'paun' ); ?></h1>
		<p class="title-section"><?php esc_html_e( '404', 'paun' ); ?></p>
		<p class="text-bigger"><?php esc_html_e( 'Die von Ihnen gesuchte Seite existiert nicht.', 'paun' ); ?></p>
		<p class="text-body !mb-10"><?php esc_html_e( 'Sie können auf die Schaltfläche unten klicken, um zur Homepage zurückzukehren.', 'paun' ); ?></p>
		<a href="<?php echo esc_url( get_site_url( 'https' ) ); ?>" class="btn-order px-8 py-2" type="button"><?php esc_html_e( 'Zur Website gehen', 'paun' ) ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Arrow-more.svg" class="mx-4"></a>
	</div>
</section>