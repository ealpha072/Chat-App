<?php require_once('header.php'); ?>

<div class="container-fluid d-flex h-100 row align-items-center justify-content-center">
    <div class="card"  id="wrapper">
        <div class="card-header">
            <h5 class="card-title text-center">Login</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Ooooh no that is unfortunate
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" action="">
                <div class="form-row">
                    <label for="" class="col-12">Email</label>
                    <div class="col-12">
                        <input type="email" name="email" id="" placeholder="Email Address" class="form-control form-control-sm shadow-none">
                    </div>
                </div>
                <div class="form-row">
                    <label for="" class="col-12">Password</label>
                    <div class="col-12 input-group">
                        <input type="password" name="password-1" id="" placeholder="Password" class="form-control form-control-sm shadow-none">
                        <div class="input-group-append">
                            <button class="btn shadow-none" type="button"><i class="fa fa-eye-slash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-8 remember">
                        <p>Not signed up? <a href="signup.php">Sign-up</a></p>
                    </div>
                    <div class="col-4 submit">
                        <button class="btn btn-dark btn-sm" name="signup" type="submit"><i class="fa fa-paper-plane"></i> Login</button>
                    </div>                    
                </div>
            </form>
        </div>
        
    </div>
</div>

<?php require_once('footer.php') ?>