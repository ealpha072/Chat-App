<?php
    foreach ($results as $user) {
        # code...
        $output .= '
        <a href="">
            <div class="content">
                <img src="images/'.$user['photo'].'" alt="">
                <div class="name-msg-active">
                    <span>'.$user['firstname'].' '.$user['lastname'].'</span>
                    <p>Default Message</p>
                </div>
            </div>
            <div class="fa fa-circle status-button"></div>
        </a>
        ';
    }
?>