<?php
require_once('database.php');

//class for user table
class UserDB {
    //function to get a user by userName
    public static function getUserByUserName($userName) {
        //get DB connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM users 
             WHERE users.userName = '$userName'";

        //execute the query - returns false
        //if no user
        $result = $dbConn->query($query);
        return $result->fetch_assoc();
        } else {
        return false;
        }
    }
}
