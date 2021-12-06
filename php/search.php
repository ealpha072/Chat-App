<?php
   
    use function PHPSTORM_META\type;

    //including files
    include_once('classes/access.php');

    $database = new Database();

    $database->getConn();

    $user = new User($database);
    $message = new Messages($database);

    $value = htmlspecialchars($_POST['searchValue']);
    $outgoing_id = $_SESSION['unique_id'];
    
    
    $results = $user->searchUser($value, $outgoing_id);
    $output = '';
    if(count($results) > 0){
        include('updatelist.php');
    }else{
        $output .= 'No user found';
    }
    echo $output;
    
?>