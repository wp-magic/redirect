<?php
/**
 * Plugin Name: MagicRedirect
 * Description: Makes attachment and author pages redirect somewhere else.
 * Author: Jascha Ehrenreich
 * Version: 0.0.1
 * Author URI: https://github.com/wp-magic/plugin-redirect
 * License: GPLv3
 *
 * @package MagicRedirect
 * @since 0.0.1
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'MAGIC_REDIRECT_SLUG', 'magic_redirect' );
define( 'MAGIC_REDIRECT_POST_SETTINGS_ACTION', 'magic_redirect_post_settings' );

/**
 * Include functionality
 *
 * @since 0.0.1
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/plugin.php';
