<?php
/*
Plugin Name: Remove Settings and Posts Menu
Description: Remove and clean some menu items up.
Version: 0.1
License: GPL
Author: Sarah Gooding
Author URI: http://untame.net
*/

/* Remove Admin Pages */
    add_action( 'admin_menu', 'my_remove_menu_pages' );

/* comment out what you don't want to use */
function my_remove_menu_pages() {
      remove_menu_page( 'index.php' );                  //Dashboard
      remove_menu_page( 'jetpack' );                    //Jetpack*
      remove_menu_page( 'edit.php' );                   //Posts
      remove_menu_page( 'upload.php' );                 //Media
      remove_menu_page( 'edit.php?post_type=page' );    //Pages
      remove_menu_page( 'edit-comments.php' );          //Comments
      remove_menu_page( 'themes.php' );                 //Appearance
      remove_menu_page( 'plugins.php' );                //Plugins
      remove_menu_page( 'users.php' );                  //Users
      remove_menu_page( 'tools.php' );                  //Tools
      remove_menu_page( 'options-general.php' );        //Settings
    }

/* Remove Dashboard Widgets */

// Create the function to use in the action hook
/* comment out what you don't want to use */
function example_remove_dashboard_widget() {
 	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}

// Hook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'example_remove_dashboard_widget' );
