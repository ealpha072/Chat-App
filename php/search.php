<?php

    use function PHPSTORM_META\type;

    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $user = new User($database);
    $value = htmlspecialchars($_POST['searchValue']);
    
    $results = $user->searchUser($value);
    $output = '';
    if(count($results) > 0){
        include('updatelist.php');
    }else{
        $output .= 'No user found';
    }
    echo $output;
    
?>