<?php
   
    include_once('php/classes/access.php');
    
    if(!isset($_SESSION['unique_id'])){
        header('location: login.php');
    }

    require_once('header.php');

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
            <a href="logout.php?logout_id=<?php echo $details[0]['unique_id']; ?>" class="">Logout</a>
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

                
            </div>
        </div>
        
    </div>
</div>

<?php require_once('footerscripts.php'); ?>
<script src="javascript/users.js"></script>
<?php require_once('footer.php') ?>