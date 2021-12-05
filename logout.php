<?php
    include_once('php/classes/access.php');

    if(session_destroy()){
        echo 'Session destroyed';
    }else{
        echo 'Npt destrpyed';
    }

?>