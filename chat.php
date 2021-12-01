<?php require_once('header.php'); ?>

<div class="container-fluid d-flex h-100 row align-items-center justify-content-center">
    <div class="card"  id="wrapper">
        <div class="card-header chat-user">
            <div class="arrow-back">
                <a href="user.php"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="img-name">
                <img src="images/user.png" alt="">
                <div class="name-active">
                    <span>Alph Emm</span>
                    <p>Active Now</p>
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
                <form action="" class="">
                    <div class="form-group">
                        <input type="text" placeholder="Type message" class="form-control shadow-none">
                        <button class="btn btn-dark btn-sm shadow-none"><i class="fa fa-paper-plane"></i> </button>
                    </div>
                </form>
        </div>

    </div>
</div>

<?php require_once('footer.php') ?>