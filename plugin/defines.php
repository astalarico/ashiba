<?php
namespace Ashiba\Defines;
global $wpdb;

define( __NAMESPACE__ . '\PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( __NAMESPACE__ . '\PLUGIN_ADMIN_URL', admin_url() . 'admin.php?page=ashiba-admin' );
define( __NAMESPACE__ . '\PLUGIN_PATH', __DIR__  );
define( __NAMESPACE__ . '\PLUGIN_VERSION', '0.0.1' );

// Define path and URL to the ACF plugin.
// define(  __NAMESPACE__ . '\ACF_PATH', PLUGIN_PATH . '/acf/' );
// define(  __NAMESPACE__ . '\ACF_URL', PLUGIN_URL . '/acf/' );