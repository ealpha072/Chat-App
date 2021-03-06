<?php 
    require_once('header.php'); ?>


<div class="container-fluid d-flex h-100 row align-items-center justify-content-center">
    <div class="card"  id="wrapper">
        <div class="card-header">
            <h5 class="card-title text-center">Login</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert" style="display: none;">
                <ul></ul>
            </div>

            <form action="#" method="POST" id="form">
                <div class="form-row">
                    <label for="" class="col-12">Email</label>
                    <div class="col-12">
                        <input type="email" name="email" id="" placeholder="Email Address" class="form-control form-control-sm shadow-none">
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="col-12">Password</label>
                    <div class="col-12 input-group">
                        <input type="password" name="password" placeholder="Password" class="form-control form-control-sm shadow-none user-pass" id="user-pass">
                        <div class="input-group-append">
                            <button class="btn btn-dark shadow-none" type="button" id="show-hide-pass"><i class="fa fa-eye-slash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-8 remember">
                        <p>Not signed up? <a href="signup.php">Sign-up</a></p>
                    </div>
                    <div class="col-4 submit">
                        <input type="submit" class="btn btn-dark btn-sm"  value="Login" id="submit-form">
                    </div>                    
                </div>
            </form>
        </div>
        
    </div>
</div>
<?php require_once('footerscripts.php'); ?>
    <script src="javascript/togglepass.js"></script>
    <script src="javascript/login.js"></script>
<?php require_once('footer.php') ?>