<?php

/**
 * Plugin Name: Tour Route
 * Plugin URI: https://github.com/AHDiniz/Tour-Route-Plugin
 * Description: Adds tour activities and tour routes to your site.
 * Version: 0.0.0
 * Author: Alan Herculano Diniz
 * Author URI: http://www.alanhdiniz.com
 * License: MIT
 * License URI: https://github.com/AHDiniz/Tour-Route-Plugin/blob/master/LICENSE
 */

include "src/editor/main_page.php";
include "src/data_persistance/post_type_management.php";

use TourRoute\PostTypeManager;
use TourRoute\Editor;

$editor = new Editor();
$post_type_manager = new PostTypeManager();

function tour_on_plugin_activation()
{
    
}

function tour_on_plugin_uninstall()
{
    // disable_post_types();
}

add_action('admin_menu', array($editor, 'InitEditor'));
add_action('init', array($post_type_manager, 'CreateEventType'));
add_action('init', array($post_type_manager, 'CreateTourPointType'));
add_action('init', array($post_type_manager, 'CreateTourExperienceType'));
add_action('init', array($post_type_manager, 'CreateGroupActivityType'));
register_activation_hook(__FILE__, 'tour_on_plugin_activation');
register_deactivation_hook(__FILE__, 'tour_on_plugin_uninstall');
register_uninstall_hook(__FILE__, 'tour_on_plugin_uninstall');

?>