<?php

namespace TourRoute
{
    function create_tour_point_type()
    {
        $labels = array(
            'name' => __('Tour Points', ),
            'singular_name' => __('Tour Point', ),
            'add_new' => __('New Tour Point', ),
            'add_new_item' => __('Add New Tour Point', ),
            'edit_item' => __('Edit Tour Point', ),
            'new_item' => __('New Tour Point', ),
            'view_item' => __('View Tour Point', ),
            'search_items' => __('Search Tour Point', ),
            'not_found' => __('No Tour Point', ),
            'not_found_in_trash' => __('No Tour Point found in trash',),
        );

        $args = array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'hierarchical' => false,
            'supports' => array('title', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
            'taxonomies' => 'category',
            'rewrite' => array('slug' => 'tour_point'),
            'show_in_rest' => true
        );

        register_post_type('tour_point', $args);
    }

    function create_tour_experience_type()
    {
        $labels = array(
            'name' => __('Tour Experiences', ),
            'singular_name' => __('Tour Experience', ),
            'add_new' => __('New Tour Experience', ),
            'add_new_item' => __('Add New Tour Experience', ),
            'edit_item' => __('Edit Tour Experience', ),
            'new_item' => __('New Tour Experience', ),
            'view_item' => __('View Tour Experience', ),
            'search_items' => __('Search Tour Experience', ),
            'not_found' => __('No Tour Experience', ),
            'not_found_in_trash' => __('No Tour Experience found in trash',),
        );

        $args = array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'hierarchical' => false,
            'supports' => array('title', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
            'taxonomies' => 'category',
            'rewrite' => array('slug' => 'tour_experience'),
            'show_in_rest' => true
        );

        register_post_type('tour_experience', $args);
    }

    function create_group_activity_type()
    {
        $labels = array(
            'name' => __('Group Activities', ),
            'singular_name' => __('Group Activity', ),
            'add_new' => __('New Group Activity', ),
            'add_new_item' => __('Add New Group Activity', ),
            'edit_item' => __('Edit Group Activity', ),
            'new_item' => __('New Group Activity', ),
            'view_item' => __('View Group Activity', ),
            'search_items' => __('Search Group Activity', ),
            'not_found' => __('No Group Activity', ),
            'not_found_in_trash' => __('No Group Activity found in trash',),
        );

        $args = array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'hierarchical' => false,
            'supports' => array('title', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
            'taxonomies' => 'category',
            'rewrite' => array('slug' => 'group_activity'),
            'show_in_rest' => true
        );

        register_post_type('group_activity', $args);
    }

    function create_event_type()
    {
        $labels = array(
            'name' => __('Events', ),
            'singular_name' => __('Event', ),
            'add_new' => __('New Event', ),
            'add_new_item' => __('Add New Event', ),
            'edit_item' => __('Edit Event', ),
            'new_item' => __('New Event', ),
            'view_item' => __('View Event', ),
            'search_items' => __('Search Event', ),
            'not_found' => __('No Event', ),
            'not_found_in_trash' => __('No Event found in trash',),
        );

        $args = array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'hierarchical' => false,
            'supports' => array('title', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
            'taxonomies' => 'category',
            'rewrite' => array('slug' => 'event'),
            'show_in_rest' => true
        );

        register_post_type('event', $args);
    }

    function disable_post_types()
    {
        unregister_post_type('event');
        unregister_post_type('tour_point');
        unregister_post_type('tour_experience');
        unregister_post_type('group_activity');
    }
}

?>