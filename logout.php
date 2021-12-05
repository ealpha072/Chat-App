<?php
    include_once('php/classes/access.php');

    if(!isset($_SESSION['unique_id'])){
        header('location: login.php');
    }

    session_destroy();
    header('location:login.php');
?>