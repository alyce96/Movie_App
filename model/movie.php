<?php
//class to represent an entry in the movie table
class User {
    //properties - match the columns in the user table
    private $title;
    private $rating;
    private $genre;
    private $runtime;
    private $platform

    public function __construct($title, $rating, $genre,
        $runtime, $platform = null)
    {
        $this-> $title = $title;
        $this-> $rating = $rating;
        $this-> $genre = $genre;
        $this-> $runtime = $runtime;
        $this-> $platform = $platform;
    }
}