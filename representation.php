<?php
/**
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also defines a function that starts the plugin.
 *
 * @link              https://representation.phport.ru
 * @since             1.0.0
 * @package           representation
 *
 * @wordpress-plugin
 * Plugin Name:       RePresentation
 * Plugin URI:        https://clone.phport.ru/wp-plugins/representation
 * Description:       Система созданию удобных и гибких страниц из шаблонных блоков на react.js
 * Version:           1.0.0
 * Author:            Asuvox
 * Author URI:        https://phport.ru
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
//Invoking hooks
add_action( 'plugins_loaded', 'start_processing' );

//Starting...
function start_processing() {
    
}