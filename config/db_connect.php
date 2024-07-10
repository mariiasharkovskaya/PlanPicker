<?php   

    // connet to database
    $conn = new mysqli('localhost', 'pet_user', 'lfybzadmin', 'pet');

    // check connection
    if ($conn -> connect_errno) {
        echo 'Failed to connect to MySQL: ' . $conn -> connect_error;
        exit();
    }
?>