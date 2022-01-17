<div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
        <div class="auth-box login-box">
            <!-- Start row -->
            <div class="row no-gutters align-items-center justify-content-center">
                <!-- Start col -->
                <div class="col-md-6 col-lg-5">
                    <!-- Start Auth Box -->
                    <?= $this->session->flashdata('users') ?>
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Well Done!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->

                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-head">
                                        <a href="#" class="logo"><img src="<?= base_url() ?>assets/images/herologo.png" class="img-fluid" alt="logo"></a>
                                    </div>
                                    <h4 class="text-primary my-4">Log in !</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username here" required>
                                        <small class="text-danger float-left mb-3"><?= form_error('username') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password here" required>
                                        <small class="text-danger float-left mb-3"><?= form_error('password') ?></small>
                                    </div>
                                    <div class="form-row mb-3">

                                        <!-- <div class="col-sm-6">
                                            <div class="forgot-psw">
                                                <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                                            </div>
                                        </div> -->

                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                </form>
                                <div class="login-or">
                                    <h6 class="text-muted">OR</h6>
                                </div>

                                <p class="mb-0 mt-3">Don't have a account? <a href="<?= base_url('auth/register') ?>">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>