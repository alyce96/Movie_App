<?php
    require_once('movie.php');
    require_once('movieList_db.php');


    //Declare clear variables
    $title = '';
    $rating = '';
    $genre = '';
    $runtime = '';
    

    //Declare clear variables for errors
    $title_error = '';
    $rating_error = '';
    $genre_error = '';
    $runtime_error = '';

    //Get values from query string and store
    if (isset($_POST['title']))
        $title = $_POST['title'];
    if (isset($_POST['rating']))
        $rating = $_POST['rating'];
    if (isset($_POST['genre']))
        $genre = $_POST['genre'];
    if (isset($_POST['runtime']))
        $runtime = $_POST['runtime'];
    

    //Validate the values entered

    //Title error
    $title_error = Validation\stringValid($title);

    //Rating error
    $rating_error = Validation\stringValid($rating, 10);

    //Genre error
    $genre_error = Validation\stringValid($genre, 10);

    //runtime error
    $runtime_error = Validation\stringValid($runtime, 10);

   
?>
<html>
<head>
    <title>Star Streamer</title>
</head>

<body>
    <h2>Enter movie to find: </h2>
    <form method='POST'>
        <h3>Enter a title: <input type="text" name="title"
            value="<?php echo $title; ?>">
            <?php if (strlen($title_error) > 0)
                <input type="submit" value="Search">    
    </h3>

        <h3>Enter a movie rating: <input type="text" rating="rating"
            value="<?php echo $rating; ?>"?
            <?php if (strlen($rating_error) > 0)
                <input type="submit" value="Search">

        <h3>Enter a genre to watch: <input type="text" rating="genre"
            value="<?php echo $genre; ?>"?
            <?php if (strlen($genre_error) > 0)
                <input type="submit" value="Search">

    </h3>
        <
        <h3>Enter a desired runtime: <input type="text" rating="runtime"
            value="<?php echo $runtime; ?>"?
            <?php if (strlen($runtime_error) > 0)
                <input type="submit" value="Search">
    </h3>
        
    </form>
    <h3><?php
    if strlen($title_error) > 0 || strlen($rating_error) > 0
        || strlen(genre_error) > 0 || strlen($runtime_error > 0) {
        } else {
            echo "All fields searched";
        }
        ?>
    </h3>
    </body>
    </html>
        


    