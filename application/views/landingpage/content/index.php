<?php

$url = "http://hero.ardhacodes.com/hero.json";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$result = json_decode($resp, true);

// var_dump(count($result));
// die

// $url = file_get_contents(base_url('assets/content/hero.json'));
// var_dump($url);
// die;

// var_dump($resp);
// die;
// var_dump($dotask);
// die;

// if (@fopen($url, 'url')) {
//     $countdata = count($result);
// } else {
//     echo ("Connection Lost");
// }
?>
<?php if (@fopen($url, 'url')) : ?>
    <?php $countdata = count($result); ?>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <strong>Sorry you're Offline. Please Turn On Your Internet!</strong>
        <h5>Data Hero can't be show</h5>
    </div>
<?php endif ?>
<div class="contentbar">
    <!-- Start row -->
    <section id="heroku">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <img class="img-fluid align-self-center" src="<?= base_url('assets/images/logofav.png') ?>" alt="" srcset="">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 align-self-center">
                    <h1 class="text-center herokuapp-fontreg">HEROKU</h1>
                    <blockquote class="blockquote mb-0 card-body herokuapp-lightfont  ">
                        <p class="text-justify">
                            Heroku App adalah sebuah platform pendidikan untuk pengenalan para pahlawan Indonesia.
                            Disini kita menemukan banyak pahlawan dan kamu dapat memberikan tanda <strong>LOVE</strong> kepada
                            pahlawan favoritmu.
                            <br>
                            Jangan Sekali kali meninggalkan sejarah.
                        </p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                JAS MERAH <cite title="Source Title">Ir. Soekarno</cite>
                            </small>
                        </footer>
                        <a href="<?= base_url('heroku') ?>" class="btn btn-primary mt-3">Explore Now</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section id="salampahlawan">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-sm-12 col-md-12 align-self-center">
                    <h1 class="text-left herokuapp-fontreg">SALAM PAHLAWAN</h1>
                    <p class="text-justify mt-2">
                        Dengan menekan tanda <strong>LOVE</strong> adalah salah satu upaya untuk menghormati dan mengenang jasa-jasamu
                        <br>
                    </p>

                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <img class="img-fluid align-self-center" src="<?= base_url('assets/images/hormatpahlawan.png') ?>" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <section id="count">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <img class="img-fluid align-self-center" src="<?= base_url('assets/images/kepal.png') ?>" alt="" srcset="">

                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 align-self-center">
                    <?php if (@fopen($url, 'url')) : ?>
                        <?php $countdata = count($result); ?>
                        <h1 class="text-left herokuapp-fontreg">Kenangan Pahlawan</h1>
                        <h1 class="herokuapp-fontbold align-self-left text-left"><?= $countdata ?> Pahlawan</h1>
                        <p class="text-justify mt-2">
                            Terdapat <?= $countdata ?> pahlawan yang dapat kita explore untuk menguatkan memory kita.
                        </p>
                    <?php else : ?>
                        <h1 class="text-left herokuapp-fontreg">Kenangan Pahlawan</h1>
                        <h1 class="herokuapp-fontbold align-self-left text-left">NULL DATA Pahlawan</h1>
                        <p class="text-justify mt-2">
                            Terdapat NULL DATA pahlawan yang dapat kita explore untuk menguatkan memory kita.
                        </p>

                    <?php endif ?>

                </div>
            </div>
        </div>
    </section>
    <section id="merdeka">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12 align-self-center">
                    <h1 class="text-left herokuapp-fontreg">MERDEKA!</h1>
                    <p class="text-justify mt-2">
                        Tetes darah juangmu melekat pada kami selaku rakyat Indonesia.
                        <br>
                        Satu Nusa. Satu Bangsa. Satu Bahasa.
                        Salam Indonesia Merdeka!
                        <br>
                    </p>

                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <img class="img-fluid align-self-center" src="<?= base_url('assets/images/juang.png') ?>" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
</div>
<hr>
<section id="step">
    <div class="container-fluid">
        <div class="contentbar">
            <h1 class="text-center herokuapp-fontbold">STEP TO USING</h1>
            <div class="card m-b-30">
                <section class="timeline timeline-js">
                    <div class="timeline-container">
                        <div class="timeline-block block-js">
                            <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-user-plus"></i></div>
                            <div class="timeline-content content-js">
                                <h4>Registration</h4>
                                <p>Buat akses akun untuk mengakses Para pahlawan</p>
                                <!-- <span class="timeline-date">Jul 2019</span> -->
                            </div>
                        </div>
                        <div class="timeline-block block-js">
                            <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-sunrise"></i></div>
                            <div class="timeline-content content-js">
                                <h4>Explore Hero</h4>
                                <p>Explore Pahlawan favoritmu</p>
                                <!-- <span class="timeline-date">Mar 2019</span> -->
                            </div>
                        </div>
                        <div class="timeline-block block-js">
                            <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-heart"></i></div>
                            <div class="timeline-content content-js">
                                <h4>Berikan Love</h4>
                                <p>Berikan tombol <strong>LOVE</strong> kepada hero favoritemu</p>
                                <!-- <span class="timeline-date">Jan 2019</span> -->
                            </div>
                        </div>


                        <div class="timeline-block block-js">
                            <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                            <div class="timeline-content content-js">
                                <h4>Rasakan Pengalaman yang luar biasa</h4>
                                <p>
                                    Dengan setelah menekan tombol LOVE pada halaman pahlawan Indonesia. Kamu dapat merasakan pengalaman dengan sensasi darah juang para pahlawan Indonesia dalam memerdekakan negara tercinta.
                                </p>
                                <!-- <span class="timeline-date">Feb 2018</span> -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<style>
    @font-face {
        font-family: Jakarta-sans-regular;
        src: url(./assets/fonts/jakartasans/PlusJakartaSans-Regular.ttf);
    }

    @font-face {
        font-family: Jakarta-sans-light;
        src: url(./assets/fonts/jakartasans/PlusJakartaSans-Light.ttf);
    }

    @font-face {
        font-family: Jakarta-sans-bold;
        src: url(./assets/fonts/jakartasans/PlusJakartaSans-Bold.ttf);
    }

    @font-face {
        font-family: Jakarta-sans-semi-bold;
        src: url(./assets/fonts/jakartasans/PlusJakartaSans-SemiBold.ttf);
    }

    @font-face {
        font-family: Jakarta-sans-extra-bold;
        src: url(./assets/fonts/jakartasans/PlusJakartaSans-ExtraBold.ttf);
    }

    @font-face {
        font-family: Jakarta-sans-medium;
        src: url(./assets/fonts/jakartasans/PlusJakartaSans-Medium.ttf);
    }


    .herokuapp-fontreg {
        font-family: Jakarta-sans-regular;

    }

    .herokuapp-fontbold {
        font-family: Jakarta-sans-bold;

    }

    .herokuapp-lightfont {
        font-family: Jakarta-sans-light;
    }
</style>