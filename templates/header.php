<?php
    session_start();

    if($_SERVER['QUERY_STRING'] == 'noname'){
        //unset($_SESSION['name']);
        session_unset();
    }

    $name = $_SESSION['name'] ?? 'Guest';

?>