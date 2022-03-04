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

include "src/data_persistance/post_type_management.php";
include "src/data_persistance/route_relationship.php";

use TourRoute\PostTypeManager;
use TourRoute\RouteRelationship;

$post_type_manager = new PostTypeManager();
$route_relationship = new RouteRelationship();

add_action('init', array($post_type_manager, 'CreateEventType'));
add_action('init', array($post_type_manager, 'CreateTourPointType'));
add_action('init', array($post_type_manager, 'CreateTourExperienceType'));
add_action('init', array($post_type_manager, 'CreateGroupActivityType'));
add_action('init', array($post_type_manager, 'CreateTourRouteType'));
add_action('init', array($route_relationship, 'CreateTable'));

?>