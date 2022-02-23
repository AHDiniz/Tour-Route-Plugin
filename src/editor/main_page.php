<?php

namespace TourRoute
{
    class Editor
    {
        public Editor()
        {
            add_menu_page('tour_route', 'Tour Route', 'administrator', 'tour_route', null, 'dashicons-chart-area', 26);
        }

        public function FinishEditor()
        {
            
        }
    }
}

?>