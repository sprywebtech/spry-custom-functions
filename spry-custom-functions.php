<?php
/*
Plugin Name: Spry Custom Functions
Description: Simple, small, and lightweight WordPress plugin that allows you to enter custom functions just like you would use functions.php in a theme. This solves the issue of not having a functions.php file for some page builders. There is no admin interface, so adding custom functions works just like adding them to functions.php via a code editor.
Version: 1.0.2
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

