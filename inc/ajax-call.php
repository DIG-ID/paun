<?php
add_action( 'wp_ajax_get_blog_posts', 'get_blog_posts' );
add_action( 'wp_ajax_nopriv_get_blog_posts', 'get_blog_posts' );

function get_blog_posts() {
	$pag_container = "";
	if ( isset( $_POST['page'] ) ) :

		// Sanitize the received page  
		$page     = sanitize_text_field( $_POST['page'] );
		$cur_page = $page;
		$page    -= 1;

		// Set the number of results to display
		$per_page     = 6;
		$previous_btn = true;
		$next_btn     = true;
		$first_btn    = true;
		$last_btn     = true;
		$start        = $page * $per_page;

		$blog_query = new WP_Query(
			array(
				'post_type'        => 'post',
				'post_status '     => 'publish',
				'posts_per_page'   => $per_page,
				'offset'           => $start,
				'category__not_in' => array( get_cat_ID( 'uncategorized' ) ),
				'hide_empty'       => true,
			)
		);

		$count = new WP_Query(
			array(
				'post_type'        => 'post',
				'post_status '     => 'publish',
				'posts_per_page'   => -1,
				'category__not_in' => array( get_cat_ID( 'uncategorized' ) ),
				'hide_empty'       => true,
			)
		);

		// Loop into all the posts to count them
		if ( $count->have_posts() ) :
			$count = $count->post_count;
			wp_reset_postdata();
		else :
			$count = 0;
		endif;

		// Loop into all the posts to get them
		if ( $blog_query->have_posts() ) :
			echo '<div class="blog-grid-pagination-content blog-grid grid grid-cols-3 gap-5">';
			while ( $blog_query->have_posts() ) :
				$blog_query->the_post();
				get_template_part( 'template-parts/components/card', 'blog');
			endwhile;
			echo '</div>';
			wp_reset_postdata();
		else :
			echo "No posts found.";
		endif;


		//$msg = '<div class="blog-grid--content">' . $msg . '</div>';

		// This is where the magic happens
		$no_of_paginations = ceil( $count / $per_page );
		if ( $cur_page >= 7 ) :
			$start_loop = $cur_page - 3;
			if ( $no_of_paginations > $cur_page + 3 ) :
				$end_loop = $cur_page + 3;
			elseif ( $cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6 ) :
				$start_loop = $no_of_paginations - 6;
				$end_loop   = $no_of_paginations;
			else :
				$end_loop = $no_of_paginations;
			endif;
		else :
			$start_loop = 1;
			if ( $no_of_paginations > 7 ) :
				$end_loop = 7;
			else :
				$end_loop = $no_of_paginations;
			endif;
		endif;

		// Pagination Buttons logic    

		$icon_last_page = 'yo';
		$icon_first_page = "";
		$icon_prev_page = "";
		$icon_next_page = "";

		$pag_container .= "<ul class='blog-grid-pagination'>";

		if ( $first_btn && $cur_page > 1 ) :
			$pag_container .= "<li p='1' class='active'>First</li>";
		elseif ( $first_btn ) :
			$pag_container .= "<li p='1' class='inactive'>First</li>";
		endif;

		if ( $previous_btn && $cur_page > 1 ) :
			$pre = $cur_page - 1;
			$pag_container .= "<li p='$pre' class='active'>Previous</li>";
		elseif ( $previous_btn ) :
			$pag_container .= "<li class='inactive'>Previous</li>";
		endif;
		for ( $i = $start_loop; $i <= $end_loop; $i++ ) :
			if ( $cur_page == $i ) :
				$pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
			else :
				$pag_container .= "<li p='$i' class='active'>{$i}</li>";
			endif;
		endfor;

		if ( $next_btn && $cur_page < $no_of_paginations ) :
			$nex = $cur_page + 1;
			$pag_container .= "<li p='$nex' class='active'>Next</li>";
		elseif ( $next_btn ) :
			$pag_container .= "<li class='inactive'>Next</li>";
		endif;

		if ( $last_btn && $cur_page < $no_of_paginations ) :
			$pag_container .= "<li p='$no_of_paginations' class='active'>last</li>";
		elseif ( $last_btn ) :
			$pag_container .= "<li p='$no_of_paginations' class='inactive'>last</li>";
		endif;

		$pag_container = $pag_container . '</ul>';

		// We echo the final output
		//echo $msg . '<div class= "blog-grid-pagination-wrapper">' . $pag_container . '</div>';

		echo '<div class="blog-grid-pagination-nav flex justify-center items-center">' . $pag_container . '</div>';

	endif;

	// Always exit to avoid further execution
	exit();
}
