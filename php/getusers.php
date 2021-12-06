<?php

    use function PHPSTORM_META\type;

    //include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $users = new User($database);
    $message = new Messages($database);

    $data = $users->getAllusers();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
    $output = '';

    $outgoing_id = $_SESSION['unique_id'];

    if(count($results) === 1){
        $output = 'No users found';
    }elseif(count($results) > 1){
        //include('updatelist.php');
        foreach ($results as $user) {
            
            $last_msg = $message->getLastMessage($user['unique_id'], $outgoing_id);
            //print_r($last_msg);
            if(count($last_msg) > 0){
                $showMsg = '';
                foreach ($last_msg as $msg) {
                    # code...
                    $showMsg = $msg['msg'];
                    if(strlen($showMsg) > 28){
                        $showMsg = substr($showMsg, 0 ,28);
                    }else{
                        $showMsg = $showMsg;
                    }
                    //print_r($showMsg);
                }
            }else{
                $showMsg = 'No message available';
            }
            
            # code...
            $output .= '
            <a href="chat.php?user_id='.$user['unique_id'].'">
                <div class="content">
                    <img src="images/'.$user['photo'].'" alt="">
                    <div class="name-msg-active">
                        <span>'.$user['firstname'].' '.$user['lastname'].'</span>
                        <p>'.$showMsg.'</p>
                    </div>
                </div>
                <div class="fa fa-circle status-button"></div>
            </a>
            ';
        }
    }
    echo $output;
?>