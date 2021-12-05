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
    $user->unique_id = $_GET['user_id'];

    $details = $user->getUser();
?>

<div class="container-fluid d-flex h-100 row align-items-center justify-content-center">
    <div class="card"  id="wrapper">
        <div class="card-header chat-user">
            <div class="arrow-back">
                <a href="user.php"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="img-name">
                <img src="images/<?php echo $details[0]['photo']?>" alt="">
                <div class="name-active">
                    <span><?php echo $details[0]['firstname'] .' '.$details[0]['lastname']; ?></span>
                    <p><?php echo $details[0]['status']; ?></p>
                </div>
            </div>
        </div>

        <div class="card-body chat-area">
            <div class="chat outgoing">
                <div class="message">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam est accusamus quod, voluptatem, atque modi consequatur id perspiciatis veniam hic soluta? </p>
                </div>
            </div>

            <div class="chat incoming">
                <img src="images/user.png" alt="">
                <div class="message">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nihil molestiae repudiandae a inventore maxime, soluta reprehenderit optio </p>
                </div>
            </div>

            <div class="chat outgoing">
                <div class="message">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam est accusamus quod, voluptatem, atque modi consequatur id perspiciatis veniam hic soluta? </p>
                </div>
            </div>
            
            <div class="chat incoming">
                <img src="images/user.png" alt="">
                <div class="message">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nihil molestiae repudiandae a inventore maxime, soluta reprehenderit optio </p>
                </div>
            </div>

            <div class="chat incoming">
                <img src="images/user.png" alt="">
                <div class="message">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nihil molestiae repudiandae a inventore maxime, soluta reprehenderit optio </p>
                </div>
            </div>

            <div class="chat outgoing">
                <div class="message">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam est accusamus quod, voluptatem, atque modi consequatur id perspiciatis veniam hic soluta? </p>
                </div>
            </div> 
        </div>

        <div class="typing-area">
                <form action="" class="" method="POST">
                    <div class="form-group">
                        <input type="text" name="outgoing_id" hidden value="<?php echo $_SESSION['unique_id']?>">
                        <input type="text" name="incoming_id" hidden value="<?php echo $details[0]['unique_id']; ?>">
                        <input type="text" name="message" placeholder="Type message" class="form-control shadow-none" id="msg-field">
                        <button class="btn btn-dark btn-sm shadow-none" id="send-message"><i class="fa fa-paper-plane"></i> </button>
                    </div>
                </form>
        </div>

    </div>
</div>

<?php require_once('footerscripts.php'); ?>
<script src="javascript/chat.js"></script>
<?php require_once('footer.php') ?>