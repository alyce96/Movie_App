<?php
require_once('database.php');

//class for movie table queries
class movieList {
    //function to get a movie by the title
    public static function getMovieByTitle($title) {
        //get the DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            //create the query string
            $query = "SELECT * FROM movies
                WHERE movies.title = '$title'";

            //execute the query - returns false if 
            //no title found
            $result = $dbConn->query($query);
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}