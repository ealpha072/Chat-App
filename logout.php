<?php
    include_once('php/classes/access.php');

    if(!isset($_SESSION['unique_id'])){
        header('location: login.php');
    }

    $db = new Database();
    $db->getConn();

    $access = new Access($db);
    $access->unique_id = $_GET['logout_id'];

    if($access->logout()){
        session_unset();
        session_destroy();
        header('location:login.php');
    }else{
        echo 'Problem';
    };

?>