<?php
    foreach ($results as $user) {
            
        $last_msg = $message->getLastMessage($user['unique_id'], $outgoing_id);
        //print_r($last_msg);
        if(count($last_msg) > 0){
            $showMsg = '';
            
            foreach ($last_msg as $msg) {
                # code...
                $showMsg = $msg['msg'];

                (strlen($showMsg) > 28) ? $showMsg = substr($showMsg, 0 ,28).'...' : $showMsg = $showMsg ;


                if($msg['outgoing_msg_id'] == $outgoing_id){
                    $you = 'You: ';
                }else{
                    $you = '';
                }

            }
        }else{
            $showMsg = 'No message available';
        }

        ($user['status'] == 'Offline') ? $offline = 'Offline' : $offline = '';

        ($showMsg != 'No message available') ? $display = $you.$showMsg : $display = $showMsg;
        
        
        # code...
        $output .= '
        <a href="chat.php?user_id='.$user['unique_id'].'">
            <div class="content">
                <img src="images/'.$user['photo'].'" alt="">
                <div class="name-msg-active">
                    <span>'.$user['firstname'].' '.$user['lastname'].'</span> 
                    <p>'.$display.'</p>
                </div>
            </div>
            <div class="fa fa-circle status-button '.$offline.'"></div>
        </a>
        ';
    }
?>