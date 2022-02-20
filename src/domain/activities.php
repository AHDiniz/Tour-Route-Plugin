<?php

namespace TourRoute
{
    class Activity
    {
        private $name = "";
        private $description = "";
        private $avg_rating = .0f;
        private $address_link = ""; // Link to the map that shows the location of the activity
        private $tags = array();
        private $media_links = array();

        /**
         * Creates the activity type in WordPress.
         * 
         * Adds the custom post type in the specific activity type you're dealing with. It's overwrites are called when the plugin is activated for the first time.
         */
        public static function CreateActivityPostType()
        {

        }

        /**
         * Removes the activity type in WordPress.
         * 
         * Removes the activity type table in the site's database. It's overwrites are called when the plugin is uninstalled.
         */
        public static function DeleteActivityPostType()
        {

        }

        /**
         * Creating a single activity post.
         * 
         * Adds the post information in the data structure and also creates the post in the database. Must be overwritten.
         * 
         * @param string $name
         * @param string $description
         * @param string $address_link
         */
        public function CreateActivity($name, $description, $address_link)
        {
            $this->$name = $name;
            $this->$description = $description;
            $this->$address_link = $address_link;
        }

        /**
         * Deletes a single activity post.
         * 
         * Removes the post from the database. Must be overwritten.
         */
        public function DeleteActivity()
        {

        }

        /**
         * Adding a tag.
         * 
         * Adds a tag to the post's tag list.
         * 
         * @param string $tag
         */
        public function AddTag($tag)
        {
            array_push($tags, $tag);
        }
    }
}
?>