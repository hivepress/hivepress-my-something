<?php
/**
 * Plugin Name: My Something for HivePress
 * Description: Just another HivePress extension.
 * Version: 1.0.0
 * Text Domain: hivepress-my-something
 * Domain Path: /languages/
 *
 * @package HivePress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Register extension directory.
add_filter(
	'hivepress/v1/extensions',
	function( $extensions ) {
		$extensions[] = __DIR__;

		return $extensions;
	}
);
