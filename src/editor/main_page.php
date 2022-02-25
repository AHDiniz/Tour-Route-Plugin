<?php

namespace TourRoute
{
    class Editor
    {
        public function InitEditor()
        {
            add_menu_page('Tour Route', 'Tour Route', 'manage_options', 'tour_route', array($this, 'MainMenuPage'), 'dashicons-location-alt', 30);
        }

        public function FinishEditor()
        {
            remove_menu_page('tour_route');
        }

        public function MainMenuPage()
        {
            ?>
            
            <h1>Something</h1>
            
            <?php
        }
    }
}

?>