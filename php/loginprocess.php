<?php

    use function PHPSTORM_META\type;

    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $login = new Access($database);
  
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if( !empty($email) && !empty($pass) )
    {
        $login->email = $email;
        $login->password = $pass;
        $checkLogin = $login->login();

        if(!is_bool($checkLogin)){
            foreach ($checkLogin as $error) {
                echo $error. ',';
            }
        }else{
            echo 'Logged in';
        }
        
    }else{
        echo 'Empty';
    }

?>