<div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
        <div class="auth-box register-box">
            <!-- Start row -->
            <div class="row no-gutters align-items-center justify-content-center">
                <!-- Start col -->
                <div class="col-md-6 col-lg-5">
                    <!-- Start Auth Box -->
                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-head">
                                        <a href="#" class="logo"><img src="<?= base_url() ?>assets/images/herologo.png" class="img-fluid" alt="logo"></a>
                                    </div>
                                    <h4 class="text-primary my-4">Sign Up !</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username here" required>
                                        <small class="text-danger float-left mb-4"><?= form_error('username') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Your Name here" required>
                                        <small class="text-danger float-left mb-4"><?= form_error('nama') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email here" required>
                                        <small class="text-danger float-left mb-4"><?= form_error('email') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password here" required>
                                        <small class="text-danger float-left mb-4"><?= form_error('password') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="passwordconfirm" id="passwordconfirm" placeholder="Re-Type Password" required>
                                        <small class="text-danger float-left mb-4"><?= form_error('passwordconfirm') ?></small>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox text-left">
                                                <input type="checkbox" class="custom-control-input" name="terms" id="terms" value="Agree">
                                                <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Orbiter</label>
                                                <small class="text-danger float-left mb-4"><?= form_error('terms') ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block font-18">Register</button>
                                </form>
                                <p class="mb-0 mt-3">Already have an account? <a href="<?= base_url('auth/index') ?>">Log in</a></p>
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