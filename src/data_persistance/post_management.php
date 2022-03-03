<?php

namespace TourRoute
{
    class PostManager
    {
        /**
         * Creates the activity page.
         * 
         * After given the activity name, the activity slug and the activity content in HTML, these data are passed to WordPress so it can create the activity's page.
         * 
         * @param string $name
         * @param string $slug
         * @param string $content: the page content in formated HTML
         * 
         * @return int the post's id
         */
        public static function InsertPost($name, $content)
        {
            return wp_insert_post(
                array(
                    'post_title' => $name,
                    'post_content' => $content
                )
            );
        }

        /**
         * Creates the activity page.
         * 
         * After given the activity name, the activity slug and the activity content in HTML, these data are passed to WordPress so it can create the activity's page.
         * 
         * @param int $id: the post's id so it can be updated
         * @param string $name
         * @param string $slug
         * @param string $content: the page content in formated HTML
         * 
         * @return int the post's id
         */
        public static function UpdatePost($id, $name, $content)
        {
            return wp_insert_post(
                array(
                    'post_id' => $id,
                    'post_title' => $name,
                    'post_content' => $content
                )
            );
        }

        /**
         * Deletes a post from the site.
         * 
         * @param int the post's id.
         */
        public static function DeletePost($id)
        {

        }
    }
}

?>