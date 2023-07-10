<?php
$current_date = gmdate( 'Ymd' );
$args = array(
	'post_type'      => 'agenda',
	'posts_per_page' => -1,
	'meta_key'       => 'start_date',
	'orderby'        => 'meta_value_num',
	'order'          => 'ASC',
	'meta_query'     => array(
		array(
			'key'     => 'end_date',
			'value'   => $current_date,
			'compare' => '>=',
			'type'    => 'DATE',
		),
	),
);
$events_query = new WP_Query( $args );
if ( $events_query->have_posts() ) :
	while ( $events_query->have_posts() ) :
		$events_query->the_post();
		get_template_part( 'template-parts/components/card', 'agenda' );
	endwhile;
	wp_reset_postdata();
endif;