<?php
/*
Plugin Name: Royal Scroll to Top
Plugin URI: http://wordpress.org/plugins/rt-scroll-to-top/
Description: Simple scroll to top plugin
Author: Mehdi Akram
Version: 1.0
Author URI: http://shamokaldarpon.com/
*/

/*Some Set-up*/
define('RT_TOP_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );




/* Acive Code */
wp_enqueue_script('rt-scroll-top-active', RT_TOP_PLUGIN_PATH.'lib/rt_scroll_top.js', array( 'jquery' ), '',  true );

/* Adding Plugin custm CSS file */
wp_enqueue_style('rt-scroll-top-style', RT_TOP_PLUGIN_PATH.'lib/rt_scroll_top.css');


// Function Add in Footer
function rt_scrool_top_footer()
{	
	echo "\n<a href=\"#top\" id=\"rtscrolltop\" title=\"Top\"></a>\n";
}

// Run All Function

add_action('wp_footer','rt_scrool_top_footer');

?>