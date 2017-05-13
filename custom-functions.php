<?php
/**
 * Custom functions
 */
 
function ebwp_tribe_widget_featured_image() {
	global $post;

	echo tribe_event_featured_image( $post->ID, 'post_large' );
}
add_action( 'tribe_events_list_widget_before_the_event_title', 'ebwp_tribe_widget_featured_image' );