<?php require_once('header.php'); ?>

<div class="container-fluid d-flex h-100 row align-items-center justify-content-center">
    <div class="card"  id="wrapper">
        <div class="card-header">
            <h5 class="card-title text-center">Signup</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Ooooh no that is unfortunate
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="">
                <input type="text" hidden name="register" value="register-user">
                <div class="form-row">
                    <div class="col">
                        <label for="">First Name</label>
                        <input type="text" placeholder="Fist name" class="form-control form-control-sm shadow-none" name="first-name" id="fname" required >
                    </div>   
                    <div class="col">
                        <label for="">Last Name</label>
                        <input type="text" name="last-name" placeholder="Last Name" class="form-control form-control-sm shadow-none" id="lname" required >
                    </div>             
                </div>
                <div class="form-row">
                    <label for="" class="col-12">Email</label>
                    <div class="col-12">
                        <input type="email" name="email" placeholder="Email" class="form-control form-control-sm shadow-none" id="email" required >
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="col-12">Photo</label>
                    <div class="col-12">
                        <input type="file" name="dp-photo" placeholder="" class="form-control form-control-sm shadow-none">
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="col-12">Password</label>
                    <div class="col-12 input-group">
                        <input type="password" name="password-1" placeholder="Password" class="form-control form-control-sm shadow-none user-pass" id="user-pass-1" value="123">
                        <div class="input-group-append">
                            <button class="btn btn-dark shadow-none" type="button" id="show-hide-pass"><i class="fa fa-eye-slash"></i></button>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-8 remember">
                        <p>Already signed up ? <a href="login.php">Log in</a></p>
                    </div>
                    <div class="col-4 submit">
                        <input type="submit" value="Sign up" class="btn btn-dark" id="submit-form">
                        <!--<button class="btn btn-dark btn-sm" name="signup" type="submit" id="submit-form"><i class="fa fa-paper-plane mr-1"></i> Signup</button>-->
                    </div>                    
                </div>
            </form>
        </div>
        
    </div>
</div>

<?php require_once('footerscripts.php'); ?>
<script src="javascript/togglepass.js"></script>
<script src="javascript/signup.js"></script>
<?php require_once('footer.php') ?>