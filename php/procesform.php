<?php

    use function PHPSTORM_META\type;

    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $access = new Access($database);
  
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $email = $_POST['email'];
    $photo = $_FILES['dp-photo']['name'];
    $tmp = $_FILES['dp-photo']['tmp_name'];
    $pass = $_POST['password-1'];

    if( !empty($fname) && !empty($lname) && !empty($email) && !empty($photo) && !empty($pass) )
    {
        $access->firstname = $fname;
        $access->lastname = $lname;
        $access->email = $email;
        $access->photo = $photo;
        $access->tmpName = $tmp;
        $access->password = $pass;

        $grantAccess = $access->register();
        if(!is_bool($grantAccess)){
            foreach ($grantAccess as $error) {
                echo $error;
            }
        }else{
            echo 'Registered';
        }

    }else{
        echo 'Empty fields not allowed';
    }

?>