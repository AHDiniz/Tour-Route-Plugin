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

function tour_on_plugin_activation()
{
    
}

function tour_on_plugin_uninstall()
{
    
}

register_activation_hook(__FILE__, 'tour_on_plugin_activation');
register_deactivation_hook(__FILE__, 'tour_on_plugin_uninstall');
register_uninstall_hook(__FILE__, 'tour_on_plugin_uninstall');

?>