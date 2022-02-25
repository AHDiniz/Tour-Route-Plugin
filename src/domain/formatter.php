<?php

namespace TourRoute
{
    interface IActivityFormatter
    {
        /**
         * This gets the activity data and outputs the post's content accordingly.
         * 
         * @param object $activity
         * 
         * @return string the post's content
         */
        function Format($activity);
    }
}

?>