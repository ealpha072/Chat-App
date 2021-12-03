<?php 
    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $access = new Access($database);
  
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $email = $_POST['email'];
    $photo = $_FILES['dp-photo']['name'];
    $pass = $_POST['password-1'];

    if( !empty($fname) && !empty($lname) && !empty($email) && !empty($photo) && !empty($pass) )
    {
        $access->firstname = $fname;
        $access->lastname = $lname;
        $access->email = $email;
        $access->photo = $photo;
        $access->password = $pass;

        $access->register();
        
    }else{
        echo 'Empty fields not allowed';
    }

?>