<?php
/*
    Plugin Name: Empty plugin
    Plugin URI: https://www.linkedin.com/in/mackral/
    Description: An empty wordpress plugin
    Author: Mackral Gonsalves
    Author URI: https://www.linkedin.com/in/mackral/
    Version: 1.0.0
*/


// it inserts the entry in the admin menu
add_action('admin_menu', 'plugin_create_menu_entry');

// creating the menu entries
function plugin_create_menu_entry() {
	// icon image path that will appear in the menu
	$icon = plugins_url('/images/empy-plugin-icon-16.png', __FILE__);
	// adding the main manu entry
	add_menu_page('Empty Plugin', 'Empty Plugin', 'edit_posts', 'main-page-empty-plugin', 'empty_plugin_show_main_page', $icon);
	// adding the sub menu entry
	add_submenu_page( 'main-page-empty-plugin', 'Add New', 'Add New', 'edit_posts', 'add-edit-empty-plugin', 'empty_plugin_add_another_page' );
}

// function triggered in add_menu_page
function empty_plugin_show_main_page() {
	include('main-page-empty-plugin.php');
}

// function triggered in add_submenu_page
function empty_plugin_add_another_page() {
	include('another-page-empty-plugin.php');
}
