<?php
/*
  Plugin Name: Subscribe to Category
  Plugin URI: http://dcweb.nu
  Description: Lets your visitor subscribe to posts for one or several categories.
  Version: 1.8.1
  Author: Daniel Söderström 
  Author URI: http://dcweb.nu/
  License: GPLv2 or later
  Text Domain: stc_textdomain
  Domain Path: /languages
*/

  // If this file is called directly, abort.
  if ( !defined( 'WPINC' ) )
    die();

  define( 'STC_SLUG', 'stc' );
  define( 'STC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
  define( 'STC_PLUGIN_PATH', dirname( __FILE__ ) );
  define( 'STC_DEV_MODE', false ); // set to true email is printed out on setting page and will not be sent.

  require_once( 'classes/class-main.php' );
  require_once( 'classes/class-settings.php' );
  require_once( 'classes/class-subscribe.php' );
  require_once( 'classes/class-stc-widget.php' );

  // Create instance for main class
  add_action( 'plugins_loaded', array( 'STC_Main', 'get_instance' ) );

  // Register activation hook
  register_activation_hook( __FILE__, array( 'STC_Main', 'activate' ) );
  
  // Register deactivation hook
  register_deactivation_hook( __FILE__, array( 'STC_Main', 'deactivate' ) );


?>