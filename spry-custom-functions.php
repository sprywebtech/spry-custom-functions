<?php
/*
Plugin Name: Spry Custom Functions
Description: Simple, small, and lightweight WordPress plugin that allows you to enter custom functions just like you would use functions.php in a theme. This solves the issue of not having a functions.php file for some page builders. There is no admin interface, so adding custom functions works just like adding them to functions.php via a code editor.
Version: 1.0.3
Requires at least: 5.2
Requires PHP: 7.4
Author: Spry Web Tech
Author URI: https://sprywebtech.com
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Include the update checker from the libs/updates subdirectory
require_once plugin_dir_path(__FILE__) . 'libs/plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

// Set up the update checker
$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/sprywebtech/spry-custom-functions/',
    __FILE__, // This should be the main plugin file
    'spry-custom-functions' // Your plugin's slug
);

// Optional: Enable GitHub releases assets
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

/* Add custom functions below this line
========================================= */

// Replaces the WordPress logo with Site Icon on login page.

function custom_login_logo() {
    // Get the site icon URL
    $site_icon_url = get_site_icon_url();
    
    // Only proceed if a site icon is set
    if ($site_icon_url) {
        ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-image: url(<?php echo esc_url($site_icon_url); ?>);
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                width: 125px;
                height: 125px;
            }
        </style>
        <?php
    }
}
add_action('login_enqueue_scripts', 'custom_login_logo');

/**
 * Change login logo URL to home page
 */
function custom_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');

/**
 * Change login logo title attribute to site name
 */
function custom_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'custom_login_logo_url_title');
