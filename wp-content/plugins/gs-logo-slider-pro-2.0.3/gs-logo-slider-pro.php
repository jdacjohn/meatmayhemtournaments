<?php
/**
 *
 * @package   GS_Logo_Slider
 * @author    Golam Samdani <samdani1997@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.gsamdani.com
 * @copyright 2014 Golam Samdani
 *
 * @wordpress-plugin
 * Plugin Name:			GS Logo Slider PRO
 * Plugin URI:			http://www.gsamdani.com/wordpress-plugins
 * Description:       	Best Responsive Logo slider to display partners, clients or sponsors Logo on Wordpress site. Display anywhere at your site using shortcode like [gs_logo] Check more shortcode examples and documention at <a href="http://logo.gsamdani.com">GS Logo Slider Docs</a> 
 * Version:           	2.0.3
 * Author:       		Golam Samdani
 * Author URI:       	http://www.gsamdani.com
 * Text Domain:       	gsl
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( ! defined( 'GSL_HACK_MSG' ) ) define( 'GSL_HACK_MSG', __( 'Sorry cowboy! This is not your place', 'gsl' ) );

/**
 * Protect direct access
 */
if ( ! defined( 'ABSPATH' ) ) die( GSL_HACK_MSG );

/**
 * Defining constants
 */
if( ! defined( 'GSL_VERSION' ) ) define( 'GSL_VERSION', '2.0.3' );
if( ! defined( 'GSL_MENU_POSITION' ) ) define( 'GSL_MENU_POSITION', 33 );
if( ! defined( 'GSL_PLUGIN_DIR' ) ) define( 'GSL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if( ! defined( 'GSL_PLUGIN_URI' ) ) define( 'GSL_PLUGIN_URI', plugins_url( '', __FILE__ ) );
if( ! defined( 'GSL_FILES_DIR' ) ) define( 'GSL_FILES_DIR', GSL_PLUGIN_DIR . 'gsl-files' );
if( ! defined( 'GSL_FILES_URI' ) ) define( 'GSL_FILES_URI', GSL_PLUGIN_URI . '/gsl-files' );

require_once GSL_FILES_DIR . '/includes/gs-logo-cpt.php';
require_once GSL_FILES_DIR . '/includes/gs-logo-metabox.php';
require_once GSL_FILES_DIR . '/includes/gs-logo-column.php';
require_once GSL_FILES_DIR . '/includes/gs-logo-shortcode.php';
require_once GSL_FILES_DIR . '/includes/gs-logo-shortcode2.php';
require_once GSL_FILES_DIR . '/includes/gs-logo-shortcode3.php';
require_once GSL_FILES_DIR . '/includes/gs-logo-shortcode4.php';
require_once GSL_FILES_DIR . '/includes/aq_resizer.php';
require_once GSL_FILES_DIR . '/gs-ls-script.php';
require_once GSL_FILES_DIR . '/admin/class.settings-api.php';
require_once GSL_FILES_DIR . '/admin/gs_logo_options_config.php';
require_once GSL_FILES_DIR . '/gs-plugins/gs-plugins.php';

add_action('do_meta_boxes', 'gsl_change_image_box');
function gsl_change_image_box()
{
    remove_meta_box( 'postimagediv', 'gs-logo-slider', 'side' );
    add_meta_box('postimagediv', __('Company Logo'), 'post_thumbnail_meta_box', 'gs-logo-slider', 'normal', 'high');
}