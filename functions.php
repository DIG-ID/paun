<?php
/**
 * Setup theme
 */
function paun_theme_setup() {

	register_nav_menus(
		array(
			'main'         => __( 'Main Menu', 'paun' ),
			'footer'       => __( 'Footer Menu', 'paun' ),
			'footer_terms' => __( 'Footer Terms Menu', 'paun' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_post_type_support( 'page', 'excerpt' );

	set_post_thumbnail_size( 500, 350, 'center', 'center' );

	add_image_size( 'gallery-full', 1024, false );

}

add_action( 'after_setup_theme', 'paun_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function paun_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}

add_action( 'widgets_init', 'paun_theme_footer_widgets_init' );

if ( ! function_exists( 'paun_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function paun_get_font_face_styles() {
		wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/assets/fonts/PPCirka-fonts.css' );
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@200;300&display=swap', false );
	}

endif;

if ( ! function_exists( 'paun_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function paun__preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<?php
	}

endif;

add_action( 'wp_head', 'paun__preload_webfonts' );

/**
 * Add custom classes to posts body
 */
function custom_body_classes( $classes ) {
	if ( is_single() ) {
		global $post;
		foreach ( ( get_the_category( $post->ID ) ) as $category ) {
			$classes[] = $category->category_nicename;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );


/**
 * Enqueue styles and scripts
 */

function paun_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/app.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', paun_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/app.js', array( 'jquery' ), $theme_version, false );
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/custom-scripts.js', array(), '1.0', true );
	if ( is_page_template( 'page-templates/page-contact.php' ) || is_admin() ) :
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0&callback=initMap', array(), $theme_version, true );
	endif;
	/*if ( is_home() ) :
		wp_enqueue_script( 'blog-ajax', get_template_directory_uri() . '/dist/js/blog-ajax.js', array( 'jquery' ), $theme_version, true );
		wp_localize_script( 'blog-ajax', 'blog_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'paun_theme_enqueue_styles' );


// Get latest post from Offers to use in main menu.
function modify_latest_post_menu_item( $items, $args ) {
    if ( $args->theme_location === 'main' || $args->theme_location === 'footer' ) {
        $post_type = 'angebot';
        $latest_post = get_posts( array(
            'post_type'      => $post_type,
            'posts_per_page' => 1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );

        if ( $latest_post ) {
            $latest_post_url = get_permalink( $latest_post[0]->ID );
            $latest_post_item = '<li class="latest-post-menu-item menu-item"><a href="' . esc_url( $latest_post_url ) . '">Angebote</a></li>';
            
            // Split the menu items into an array
            $menu_items = explode( '</li>', $items );
            
            // Insert the latest post menu item as the second item
            array_splice( $menu_items, 1, 0, $latest_post_item );
            
            // Convert the array back into a string
            $items = implode( '</li>', $menu_items );
        }
    }

    return $items;
}

add_filter( 'wp_nav_menu_items', 'modify_latest_post_menu_item', 10, 2 );


//Google Map Init
function paun_theme_google_map_init() {
	if ( is_admin() ) :
		acf_update_setting( 'google_api_key', 'AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0' );
	endif;
}
add_action( 'acf/init', 'paun_theme_google_map_init' );

/**
 * Wrap the post thumbnail image in a figure element only in the blog posts and project posts.
 */
/*function paun_wrap_post_thumbnail_in_figure( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	$allowed_sizes = array( 'card-post-thumbnail', 'card-project-thumbnail-portrait', 'card-project-thumbnail-landscape' );
	if ( ! in_array( $size, $allowed_sizes ) ) :
		return $html;
	endif;
	return '<a href="' . get_the_permalink() . '"><figure>' . $html . '</figure></a>';
}

add_filter( 'post_thumbnail_html', 'paun_wrap_post_thumbnail_in_figure', 10, 5 );*/

// Remove <p> from Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Create a customized options page and store the data in a variable for later use
 */
function chasseral_theme_acf_op_gc_init() {
	if ( function_exists( 'acf_add_options_page' ) ) :
		$theme_option_page = acf_add_options_page(
			array(
				'page_title'      => __( 'Paun Theme Options', 'paun' ),
				'menu_title'      => __( 'Paun Theme', 'paun' ),
				'menu_slug'       => 'paun-theme-general-options',
				'capability'      => 'edit_posts',
				'icon_url'        => 'dashicons-admin-appearance',
				'redirect'        => false,
				'update_button'   => __( 'Update Theme Options', 'paun' ),
				'updated_message' => __( 'Paun Theme Options Updated', 'paun' ),
			)
		);
	endif;
}

add_action( 'acf/init', 'chasseral_theme_acf_op_gc_init' );

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings
require get_template_directory() . '/inc/theme-admin-settings.php';