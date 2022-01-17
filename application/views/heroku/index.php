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
// var_dump($result);
// die

// $url = file_get_contents(base_url('assets/content/hero.json'));
// var_dump($url);
// die;

// var_dump($resp);
// die;
// var_dump($dotask);
// die;


?>
<!-- 

EXAMPLE DATA

"nama":"Zainul Arifin",
"nama2":"Kiai Haji Zainul Arifin Pohan",
"kategori":"Pahlawan Kemerdekaan Nasional",
"asal":"Sumatera Utara",
"lahir":"Kamis, 2 September 1909   di Barus, Tapanuli Tengah, Sumatera Utara",
"usia":"54 tahun",
"gugur":"Sabtu, 2 Maret 1963   di Jakarta, Indonesia",
"lokasimakam":"Taman Makam Pahlawan (TMP) Kalibata, Jakarta",
"history":"Pejuang Kemerdekaan Indonesia. Seorang politisi Nahdlatul Ulama (NU) terkemuka yang sejak remaja di zaman penjajahan Belanda sudah aktif dalam organisasi kepemudaan NU, GP Ansor. Panglima Pasukan Semi-militer Hizbullah. Anggota Badan Pekerja Komite Nasional Indonesia Pusat (BP KNIP). Wakil Perdana Menteri Indonesia (30 Juli 1953 - 12 Agustus 1955). Ketua Dewan Perwakilan Rakyat ke-2 (DPRGR, 1960 - 1963).Zainul Arifin lahir sebagai anak tunggal dari keturunan raja Barus, Sultan Ramali bin Tuangku Raja Barus Sultan Sahi Alam Pohan dengan perempuan bangsawan asal Kotanopan, Mandailing, Siti Baiyah boru Nasution. Memasuki era Demokrasi Terpimpin, Arifin bersedia mengetuai DPR Gotong Royong (DPRGR) sebagai upaya partai NU membendung kekuatan Partai Komunis Indonesia (PKI) di parlemen. Di tengah meningkatnya suhu politik, pada 14 Mei 1962, saat shalat Idul Adha di barisan terdepan bersama Sukarno, Zainul tertembak peluru yang diarahkan seorang pemberontak DI/TII dalam percobaannya membunuh presiden. Zainul Arifin akhirnya wafat 2 Maret 1963 setelah menderita luka bekas tembakan dibahunya selama sepuluh bulan, dan dimakamkan di Taman Makam Pahlawan (TMP) Kalibata, Jakarta. Dan pada tahun yang sama (1963), beliau dianugerahi gelar Pahlawan Kemerdekaan Nasional (Keppres No. 35 Tahun 1963, tanggal 4 Maret 1963).",
"img":"https://image.ibb.co/bMRJae/zainul_arifin.jpg"


 -->

<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Heroku-App</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Heroku</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> -->
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <?php if ($this->session->flashdata('heroku')) : ?>
        <div class="alert alert-success" role="alert">Data has been <strong><?= $this->session->flashdata('heroku') ?></strong> to Favorite</div>
    <?php endif ?>
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">List Hero</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">List Hero Indonesia</h6>
                    <div class="table-responsive">
                        <table id="default-datatable" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Kategori</th>
                                    <th>Asal</th>
                                    <th>Usia</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $numbs = 0;
                                $no = 1;
                                ?>
                                <?php foreach ($result as $r) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r['nama'] ?></td>
                                        <td><?= $r['kategori'] ?></td>
                                        <td><?= $r['asal'] ?></td>
                                        <td><?= $r['usia'] ?></td>
                                        <td>
                                            <a href="<?= base_url('heroku/detail/') . $numbs++ ?>" class="btn btn-success-rgba">Detail</a>
                                        </td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Kategori</th>
                                    <th>Asal</th>
                                    <th>Usia</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->

        <!-- End col -->
    </div>
    <!-- End row -->
</div>