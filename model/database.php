<?php
class Database {
    //DB connection paramaters
    private $host = 'localhost';
    private $dbname = 'Movielist';
    private $username = "root";
    private $password = "";

    //DB connection and error message
    private $conn;
    private $conn_error = '';

    //constructor - connect to the DB or set an error 
    //message if the connection failed
    function __construct() {
        //turn off error reporrting since errors are manual
        mysqli_report(MYSQLI_REPORT_OFF);

        //Cconnect to the database
        $this->conn = mysqli_connect($this->host,
        $this->username, $this->password,
        $this->dbname);

        //if the connection failed, set the error message
        if($this->conn === false) {
            $this->conn_error = "Failed to connect to DB: "
                . mysqli_connect_error();
        }
    }

    function __destruct() {
        mysqli_close($this->conn);
    }

    //return the connection; if the connection failed, it
    //will be false
    function getDbConn () {
        return $this->conn;
    }
    function getDbError() {
        return $this->conn_error;
    }
    //functions to get the DB connection parameters
    function getDbHost() {
        return $this->host;

    }
    function getDbName() {
        return $this->dbname;
    }

    function getDbUser() {
        return $this->username;
    }

    function getDbUserPw() {
        return $this->password;
    }

    

    
    //function to add movies to database 
    //public static function formatNewMovieQuery($title, $rating, $runtime, $platform, $genre) {
        //return $query = "INSERT INTO movielist (Title, )
                //VALUES ({$title}, {$rating}, {$runtime}, {$platform}, {$genre});"
    
     //Adding movies to Database
     //$Marvels = formatNewMovieQuery('105min', 'Adventure', 'PG13', 'Disney+')
     //$Encanto = formatNewMovieQuery('102min', 'PG', 'Family', 'Disney+')
     //$Elemental = formatNewMovieQuery('101min', 'PG', 'Comedy', 'Hulu')
     //$Moana = formatNewMovieQuery('107min', 'TV-PG', 'Adventure', 'Netflix')
     //$Wish = formatNewMovieQuery('102min', 'TV-PG', 'Adventure', 'AmazonPrime')
     //$Frozen = formatNewMovieQuery('102min', 'TV-PG', 'Adventure', 'Netflix')
     //$Mulan = formatNewMovieQuery('87min', 'G', 'Adventure', 'Disney+')
     //$UP = formatNewMovieQuery('96Min', 'G', 'Adventure', 'Hulu')
    // $Aladdin = formatNewMovieQuery('90min', 'G', 'Comedy', 'Disney+')
     //$Luca = formatNewMovieQuery('95min', 'PG', 'Adventure', 'Hulu')    
   // }
}
