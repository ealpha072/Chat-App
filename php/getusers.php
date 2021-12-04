<?php

    use function PHPSTORM_META\type;

    include_once('classes/config.php');
    include_once('classes/access.php');

    $database = new Database();
    $database->getConn();

    $users = new User($database);
    $data = $users->getAllusers();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
    $output = '';

    if(count($results) === 1){
        $output = 'No users found';
    }elseif(count($results) > 1){
        foreach ($results as $user) {
            # code...
            $output .= '
            <a href="">
                <div class="content">
                    <img src="images/user.png" alt="">
                    <div class="name-msg-active">
                        <span>Alph Emm</span>
                        <p>Default Message</p>
                    </div>
                </div>
                <div class="fa fa-circle status-button"></div>
            </a>
            
            ';
        }
    }
    echo $output;
?>