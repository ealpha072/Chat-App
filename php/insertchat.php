<?php

    use function PHPSTORM_META\type;

    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $message = new Messages($database);

    $incoming_id = $_POST['incoming_id'];
    $outgoing_id = $_POST['outgoing_id'];
    $msg = $_POST['message'];

    if(!empty($msg)){
        $message->incoming_msg_id = $incoming_id;
        $message->outgoing_msg_id = $outgoing_id;
        $message->msg = $msg;

        $message->insertMesage();
    }
   
?>