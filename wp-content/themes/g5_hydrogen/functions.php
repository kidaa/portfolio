<?php
/**
 * @package   Gantry 5 Theme
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') or die;

// Note: This file must be PHP 5.2 compatible.

// Bootstrap Gantry framework or fail gracefully.
$gantry = include_once dirname(__FILE__) . '/includes/gantry.php';

/** @var \Gantry\Framework\Theme $theme */
$theme = $gantry['theme'];

// Theme helper files that can contain useful methods or filters
$helpers = array(
    'includes/helper.php', // General helper file
);

foreach ($helpers as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'g5_hydrogen'), $file), E_USER_ERROR);
    }

    require $filepath;
}

/**
 * Add custom code below
*/
function register_my_menu() {
    register_nav_menu('mega_main_nav_menu',__( 'Mega Main Nav Menu' ));
}
add_action( 'init', 'register_my_menu' );