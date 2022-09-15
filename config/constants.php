<?php
        //Start Session
        session_start();

    //create constants to stare non repeating values
    define('SITEURL', 'http://localhost/food/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD,) or die(mysqli_error());//Database Connection
    $db_select = mysqli_select_db($conn, 'food') or die(mysqli_error());//Selecting Database



?>