<?php
/*
Plugin Name: Stick Admin Bar To Bottom
Description: Annoyed by the new Admin Bar that is covering the top 28 pixels of your website, but you don't want it completely gone? This plugin sticks the Admin Bar to the bottom of your screen!
Author: Coen Jacobs
Version: 1.2
Author URI: http://coenjacobs.me
*/

function stick_admin_bar_to_bottom_css() {
	echo "
	<style type='text/css'>
	* html body {
        margin-top: 0 !important; 
    }
	
	body.admin-bar {
		margin-top: -28px;
		padding-bottom: 28px;
	}
	
	body.wp-admin #footer {
		padding-bottom: 28px;
	}
	
	#wpadminbar {
		top: auto !important;
		bottom: 0;
	}

	#wpadminbar .quicklinks .ab-sub-wrapper {
		bottom: 28px;
	}

	#wpadminbar .quicklinks .ab-sub-wrapper ul .ab-sub-wrapper {
		bottom: -7px;
	}
	</style>
	";
}

add_action('admin_head', 'stick_admin_bar_to_bottom_css');
add_action('wp_footer', 'stick_admin_bar_to_bottom_css');

?>
