<?php
    include_once('php/classes/config.php');
    
    if(!isset($_SESSION['unique_id'])){
        header('location: login.php');
    }

    require_once('header.php');
    include_once('php/classes/access.php');

    $db = new Database();
    $db->getConn();

    $user = new User($db);
    $user->unique_id = $_SESSION['unique_id'];

    $details = $user->getUser();

?>

<div class="container-fluid d-flex h-100 row align-items-center justify-content-center">
    <div class="card"  id="wrapper">
        <div class="card-header user-details">
            <div class="image-name-active">
                <img src="images/<?php echo $details[0]['photo']?>" alt="">
                <div class="name-active">
                    <span><?php echo $details[0]['firstname'] .' '.$details[0]['lastname']; ?></span>
                    <p><?php echo $details[0]['status']; ?></p>
                </div>
            </div>
            <a href="" class="">Logout</a>
        </div>
        <div class="card-body">
            <div class="search-user">
                <form action="" class="">
                    <div class="search-input">
                        <span>Select user to start chatting</span>
                        <input type="text" id="" class="form-control form-control-sm shadow-none" placeholder="Search online users..." name="search" required>
                        <button class="btn shadow-none"><i class="fa fa-search"></i> </button>
                    </div>
                </form>
            </div>

            <div class="online-users">

                <!--<a href="">
                    <div class="content">
                        <img src="images/user.png" alt="">
                        <div class="name-msg-active">
                            <span>Alph Emm</span>
                            <p>Default Message</p>
                        </div>
                    </div>
                    <div class="fa fa-circle status-button"></div>
                </a>

                extras-->
                
                <!--<a href="">
                    <div class="content">
                        <img src="images/user.png" alt="">
                        <div class="name-msg-active">
                            <span>Alph Emm</span>
                            <p>Default Message</p>
                        </div>
                    </div>
                    <div class="fa fa-circle status-button"></div>
                </a>-->
                <!--end of extras-->
            </div>
        </div>
        
    </div>
</div>

<?php require_once('footerscripts.php'); ?>
<script src="javascript/searchbar.js"></script>
<script src="javascript/users.js"></script>
<?php require_once('footer.php') ?>