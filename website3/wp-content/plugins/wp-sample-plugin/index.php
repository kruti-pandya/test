<?php
/**
 * Plugin Name: WP Sample Plugin
 * Plugin URI:  https://google.com
 * Description: this is sample pluging
 * Version:     1.1
 * Author:      Kruti
 * Author URI:  https://google.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'My Custom Menu page', 'My Custom Menu page', 'manage_options', 'my_custom_plugin', 'my_custom_function', 'dashicons-welcome-widgets-menus', 90 );
}

function my_custom_function() {
	echo '<h1>Hi Plugin</h1>';
}
  ?>
  
  