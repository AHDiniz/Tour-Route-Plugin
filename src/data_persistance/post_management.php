<?php

namespace TourRoute
{
    function create_single_event($author_id, $content, $title, $status)
    {
        $postargs = array(
            'post_author' => $author_id,
            'post_content' => $content,
            'post_title' => $title,
            'post_status' => $status,
            'post_type' => 'event'
        );

        wp_insert_post($postargs);
    }

    function create_single_tour_point($author_id, $content, $title, $status)
    {
        $postargs = array(
            'post_author' => $author_id,
            'post_content' => $content,
            'post_title' => $title,
            'post_status' => $status,
            'post_type' => 'tour_point'
        );

        wp_insert_post($postargs);
    }

    function create_single_tour_experience($author_id, $content, $title, $status)
    {
        $postargs = array(
            'post_author' => $author_id,
            'post_content' => $content,
            'post_title' => $title,
            'post_status' => $status,
            'post_type' => 'tour_experience'
        );

        wp_insert_post($postargs);
    }

    function create_single_group_activity($author_id, $content, $title, $status)
    {
        $postargs = array(
            'post_author' => $author_id,
            'post_content' => $content,
            'post_title' => $title,
            'post_status' => $status,
            'post_type' => 'group_activity'
        );

        wp_insert_post($postargs);
    }
}

?>