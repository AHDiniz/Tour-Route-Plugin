<?php

namespace TourRoute
{
    class RouteRelationship
    {
        public static function CreateTable()
        {
            global $wpdb;
            $query = "
                CREATE TABLE {$wpdb->prefix}RouteActivityRelation(
                    route_id int NOT NULL,
                    activity_id int NOT NULL,
                    PRIMARY KEY (route_id, activity_id)
                );
            ";
            $result = $wpdb->get_results($query, OBJECT);
        }

        public static function DeleteTable()
        {
            global $wpdb;
            $query = "
                DROP TABLE {$wpdb->prefix}RouteActivityRelation;
            ";
            $result = $wpdb->get_results($query, OBJECT);
        }

        public static function Insert($route_id, $activity_id)
        {
            global $wpdb;
            $query = "
                INSERT INTO {$wpdb->prefix}RouteActivityRelation (route_id, activity_id)
                VALUES ({$route_id}, {$activity_id});
            ";
            $result = $wpdb->get_results($query, OBJECT);
        }

        public static function Delete($route_id, $activity_id)
        {
            global $wpdb;
            $query = "
                DELETE FROM {$wpdb->prefix}RouteActivityRelation WHERE
                route_id={$route_id} AND
                activity_id={$activity_id};
            ";
            return $wpdb->get_results($query, OBJECT);
        }

        public static function GetActivitiesInRoute($route_id)
        {
            global $wpdb;
            $query = "
                SELECT * FROM {$wpdb->prefix}RouteActivityRelation WHERE
                route_id={$route_id};
            ";
            return $wpdb->get_results($query, OBJECT);
        }

        public static function GetRoutesWithActivity($activity_id)
        {
            global $wpdb;
            $query = "
                SELECT * FROM {$wpdb->prefix}RouteActivityRelation WHERE
                activity_id={$activity_id};
            ";
            return $wpdb->get_results($query, OBJECT);
        }
    }
}

?>