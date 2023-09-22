<?php
/**
* Plugin Name: Stop WP Notifications
* Plugin URI: https://www.benvankat.com/
* Description: Stop Wordpress from emailing you every time a plugin gets updated.
* Version: 0.1
* Author: Ben Vankat
* Author URI: https://www.benvankat.com/
**/


// Disable plugin update emails
add_filter( 'auto_plugin_update_send_email', '__return_false' );
