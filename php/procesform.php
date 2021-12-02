<?php 
    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $access = new Access($database);
    
    $access->firstname = $_POST['first-name'];
    $access->lastname = $_POST['last-name'];
    $access->email = $_POST['email'];
    $access->photo = $_FILES['dp-photo'];
    $access->password = $_POST['password-1'];

    if( !empty($_POST['first-name']) && !empty($_POST['last-name']) && !empty($_POST['email']) 
        && !empty($_FILES['dp-photo']) && !empty($_POST['password-1']) )
    {
        
    }else{
        
    }


?>