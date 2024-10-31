<?php
//Class to represent an entry in user table
class User {
    //user table is only username and password
    private $userName;
    private $password;

    public function __construct($userName, $password
    = null)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    //get and set user properties
    public function getUserName() {
        return $this->userName;
    }
    public function setUserName($value) {
        $this->userName =$value;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($value) {
        $this->password =$value;
    }
}