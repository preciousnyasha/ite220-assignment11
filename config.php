<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpass = "root";

// connect database
$link = mysqli_connect($dbhost, $dbusername, $dbpass, 'Ahm_Assignment');
if (!$link) {
    die('Could not connect: ' . mysqli_error(link));
}


?>