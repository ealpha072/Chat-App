<?php

    use function PHPSTORM_META\type;

    //include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $message = new Messages($database);

    $incoming_id = $_POST['incoming_id'];
    $outgoing_id = $_POST['outgoing_id'];
    
    $message->incoming_msg_id = $incoming_id;
    $message->outgoing_msg_id = $outgoing_id;

    $data = $message->getMessage();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
    $output = '';

    if(count($results) > 0){
        foreach ($results as $msg) {
            # code...
            if($msg['outgoing_msg_id'] ===  $outgoing_id){ //user is the sender, msg is an outgoing msg
                $output .= '
                    <div class="chat outgoing">
                        <div class="message">
                            <p>'.$msg['msg']. '</p>
                        </div>
                    </div>
                ';
            }else{ //user is a receiver, message is an incoming msg
                $output .= '
                    <div class="chat incoming">
                        <div class="message">
                            <p>'.$msg['msg']. '</p>
                        </div>
                    </div>
                ';
            }
        }
    }
    echo $output;
    
?>