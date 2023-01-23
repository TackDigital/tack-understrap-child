<?php
/**
 * Tack Theme functions and definitions
 *
 * @package tack-understrap-child
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Tack Theme's includes directory.
$tack_inc_dir = 'inc';

// Array of files to include.
$tack_includes = array(
	'/tack-enqueue.php',    // Enqueue scripts and styles.
);

// Include files.
foreach ( $tack_includes as $file ) {
	require_once get_theme_file_path( $tack_inc_dir . $file );
}
