<?php
require_once('controller/user.php');
require_once('model/user_db.php');


class UserController {
    //function to convery a db row to user object
    private static function rowToUser($row) {
        $user = new User($row['username'],
            $row['password']);
        return $user;
    }

    //function to check login
    public static function validUser($username, $password) {
        $queryRes = UserDB::getUserByUsername($username);

        if ($queryRes) {
            //process the user
            $user = self::rowToUser($queryRes);
            return $user->getPassword() === $password;
        } else {
            //no such user or db connection failed
            return false;
        }
    }
}