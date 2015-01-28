<?php

/*
Plugin Name: Advanced Custom Fields: Instagram
Plugin URI: https://github.com/francoiscote/acf-field-instagram
Description: An ACF custom field that shows a single Instagram image and link from the provided shortcode.
Version: 1.0.0
Author: François Côté
Author URI: http://francoiscote.net
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/



// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-instagram', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );


// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_instagram( $version ) {

	include_once('acf-instagram-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_instagram');

?>
