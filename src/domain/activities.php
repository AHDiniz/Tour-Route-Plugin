<?php

include '../data_persistance/post_type_management.php';

namespace TourRoute
{
    class Activity
    {
        private $id;
        private $name = "";
        private $description = "";
        private $avg_rating = .0;
        private $likes = 0;
        private $dislikes = 0;
        private $address_link = ""; // Link to the map that shows the location of the activity
        private $tags = array();
        private $media_links = array();
        private $user_id = 0;
        private $formatter = null; // This will format the activity's data into the post's content

        /**
         * Creating a single activity post.
         * 
         * Adds the post information in the data structure and also creates the post in the database. Must be overwritten.
         * 
         * @param string $name
         * @param string $description
         * @param string $address_link
         */
        public function Create($name, $description, $address_link)
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
        public function Delete()
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

        /**
         * Adding a list of tags.
         * 
         * @param array $tags
         */
        public function AddTags($tags)
        {
            for ($i = 0; $i < count($tags); $i++)
            {
                array_push($this->$tags, $tags[$i]);
            }
        }

        /**
         * Liking the activity.
         * 
         * Adds one more like to the activity and updates the avarage rating.
         */
        public function Like()
        {
            ++$likes;

            # TODO: Calculate the avarage rating here
        }

        /**
         * Disliking the activity.
         * 
         * Adds one more dislike to the activity and updates the avarage rating.
         */
        public function Dislike()
        {
            ++$dislikes;

            # TODO: Calculate the avarage rating here
        }

        /**
         * Adding a formatter to the activity
         * 
         * The formatter gets the activity's data and outputs the post's content. It must implement the IActivityFormatter interface.
         * 
         * @param object $formatter
         */
        public function AddFormatter($formatter)
        {
            $this->$formatter = $formatter;
        }
    }

    class Event extends Activity
    {
        private $prices;
        private $datetimes;

        public Event($prices, $datetimes)
        {
            $this->$prices = $prices;
            $this->$datetimes = $datetimes;
        }

        public function Create($name, $description, $address_link)
        {
            parent::Create($name, $description, $address_link);
        }
    }
}
?>