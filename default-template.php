<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action('genesis_loop','ebwp_genesis_tribe');
function ebwp_genesis_tribe() {
echo '<div id="tribe-events-pg-template" class="ebwp-tribe-events-page">';
echo tribe_events_before_html();
echo tribe_get_view(); 
echo tribe_events_after_html();
echo '</div> <!-- #tribe-events-pg-template -->';
}

genesis();