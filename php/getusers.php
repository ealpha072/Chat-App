<?php

    use function PHPSTORM_META\type;

    //include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $users = new User($database);
    $message = new Messages($database);
    $outgoing_id = $_SESSION['unique_id'];
    $data = $users->getAllusers($outgoing_id);
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
    $output = '';

    if(count($results) === 1){
        $output = 'No users found';
    }elseif(count($results) > 1){
        include('updatelist.php');
    }
    
    echo $output;
?>