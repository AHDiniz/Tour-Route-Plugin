<?php

namespace TourRoute
{
    class PostTypeManager
    {
        public function CreateEventType()
        {
            register_post_type('event', 
                array(
                    'labels' => array(
                        'name' => __('Events'),
                        'singular_name' => __('Event')
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'event'),
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-tickets-alt'
                )
            );
        }

        public function CreateTourPointType()
        {
            register_post_type('tour_point', 
                array(
                    'labels' => array(
                        'name' => __('Tour Points'),
                        'singular_name' => __('Tour Point')
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'tour_point'),
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-location'
                )
            );
        }

        public function CreateTourExperienceType()
        {
            register_post_type('tour_experience', 
                array(
                    'labels' => array(
                        'name' => __('Tour Experiences'),
                        'singular_name' => __('Tour Experience')
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'tour_experience'),
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-palmtree'
                )
            );
        }

        public function CreateGroupActivityType()
        {
            register_post_type('group_activity', 
                array(
                    'labels' => array(
                        'name' => __('Group Activities'),
                        'singular_name' => __('Group Activity')
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'group_activity'),
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-groups'
                )
            );
        }

        public function CreateTourRouteType()
        {
            register_post_type('tour_route', 
                array(
                    'labels' => array(
                        'name' => __("Tour Routes"),
                        'singular_name' => __("Tour Route")
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'tour_route'),
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-location-alt'
                ),
            );
        }
    }
}

?>