<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Heroku-App</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Heroku</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <!-- <button class="btn btn-danger-rgba float-right"><i class="feather icon-heart mr-2"></i>Add Favorite</button> -->
            <!-- <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div> -->
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <?php if ($this->session->flashdata('heroku')) : ?>
        <div class="alert alert-success" role="alert">Data has been <?= $this->session->flashdata('heroku') ?> to Favorite</div>
    <?php endif ?>
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header d-inline">
                    <h5 class="card-title">Detail</h5>
                    <?php
                    // var_dump($getwherefav['is_favorite']);
                    // die;
                    ?>
                    <?php if ($getwherefav != NULL) : ?>
                        <?php if ($getwherefav['is_favorite'] == 1) : ?>
                            <form action="<?= base_url('heroku/unfavorite') ?>" method="post">
                                <input type="hidden" name="users_id" value="<?= $username_id ?>">
                                <input type="hidden" name="hero_id" value="<?= $this->uri->segment(3) ?>">
                                <input type="hidden" name="nama" value="<?= $result['nama'] ?>">
                                <input type="hidden" name="nama2" value="<?= $result['nama2'] ?>">
                                <input type="hidden" name="kategori" value="<?= $result['kategori'] ?>">
                                <input type="hidden" name="asal" value="<?= $result['asal'] ?>">
                                <input type="hidden" name="lahir" value="<?= $result['lahir'] ?>">
                                <input type="hidden" name="usia" value="<?= $result['usia'] ?>">
                                <input type="hidden" name="gugur" value="<?= $result['gugur'] ?>">
                                <input type="hidden" name="lokasimakam" value="<?= $result['lokasimakam'] ?>">
                                <input type="hidden" name="history" value="<?= $result['history'] ?>">
                                <input type="hidden" name="img" value="<?= $result['img'] ?>">
                                <button type="submit" class="btn btn-danger float-right"><i class="feather icon-heart-on mr-2"></i>Favorited</button>
                            </form>
                        <?php elseif ($getwherefav['is_favorite'] == 0) : ?>
                            <form action="<?= base_url('heroku/updatefavorite') ?>" method="post">
                                <input type="hidden" name="users_id" value="<?= $username_id ?>">
                                <input type="hidden" name="hero_id" value="<?= $this->uri->segment(3) ?>">
                                <input type="hidden" name="nama" value="<?= $result['nama'] ?>">
                                <input type="hidden" name="nama2" value="<?= $result['nama2'] ?>">
                                <input type="hidden" name="kategori" value="<?= $result['kategori'] ?>">
                                <input type="hidden" name="asal" value="<?= $result['asal'] ?>">
                                <input type="hidden" name="lahir" value="<?= $result['lahir'] ?>">
                                <input type="hidden" name="usia" value="<?= $result['usia'] ?>">
                                <input type="hidden" name="gugur" value="<?= $result['gugur'] ?>">
                                <input type="hidden" name="lokasimakam" value="<?= $result['lokasimakam'] ?>">
                                <input type="hidden" name="history" value="<?= $result['history'] ?>">
                                <input type="hidden" name="img" value="<?= $result['img'] ?>">
                                <button type="submit" class="btn btn-danger-rgba float-right"><i class="feather icon-heart mr-2"></i>Add Favorite</button>
                            </form>
                        <?php endif ?>
                    <?php elseif ($getwherefav == NULL) : ?>
                        <form action="<?= base_url('heroku/addfavorite') ?>" method="post">
                            <input type="hidden" name="users_id" value="<?= $username_id ?>">
                            <input type="hidden" name="hero_id" value="<?= $this->uri->segment(3) ?>">
                            <input type="hidden" name="nama" value="<?= $result['nama'] ?>">
                            <input type="hidden" name="nama2" value="<?= $result['nama2'] ?>">
                            <input type="hidden" name="kategori" value="<?= $result['kategori'] ?>">
                            <input type="hidden" name="asal" value="<?= $result['asal'] ?>">
                            <input type="hidden" name="lahir" value="<?= $result['lahir'] ?>">
                            <input type="hidden" name="usia" value="<?= $result['usia'] ?>">
                            <input type="hidden" name="gugur" value="<?= $result['gugur'] ?>">
                            <input type="hidden" name="lokasimakam" value="<?= $result['lokasimakam'] ?>">
                            <input type="hidden" name="history" value="<?= $result['history'] ?>">
                            <input type="hidden" name="img" value="<?= $result['img'] ?>">
                            <button type="submit" class="btn btn-danger-rgba float-right"><i class="feather icon-heart mr-2"></i>Add Favorite</button>
                        </form>
                    <?php endif ?>
                    <a href="<?= base_url('heroku') ?>" class="btn btn-primary-rgba float-right mr-2"><i class="feather icon-arrow-left-circle mr-2"></i>Back</a>
                </div>
                <div class="card-body">
                    <!-- <h6 class="card-subtitle">Below is an example of a single media object. Only two classes are required—the wrapping <code class="highlighter-rouge">.media</code> and the <code class="highlighter-rouge">.media-body</code> around your content.</h6> -->
                    <div class="media">
                        <img class="mr-3 " src="<?= $result['img'] ?>" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 font-16"><?= $result['nama'] ?></h5>
                            <dl class="row">
                                <dt class="col-sm-3">Nama</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['nama'] ?></p>
                                </dd>
                                <dt class="col-sm-3">Nama Panjang</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['nama2'] ?></p>
                                </dd>
                                <dt class="col-sm-3">Kategori</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['kategori'] ?></p>
                                </dd>
                                <dt class="col-sm-3 text-truncate">Asal</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['asal'] ?></p>
                                </dd>
                                <dt class="col-sm-3">Lahir</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['lahir'] ?></p>
                                </dd>
                                <dt class="col-sm-3">Usia</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['usia'] ?></p>
                                </dd>
                                <dt class="col-sm-3">Gugur</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['gugur'] ?></p>
                                </dd>
                                <dt class="col-sm-3">Lokasi Makam</dt>
                                <dd class="col-sm-9">
                                    <p><?= $result['lokasimakam'] ?></p>
                                </dd>
                                <!-- <dd class="col-sm-9">
                                    <dl class="row">
                                        <dt class="col-sm-4">Nested definition list</dt>
                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                    </dl>
                                </dd> -->
                                <dt class="col-sm-3">Sejarah</dt>
                            </dl>
                            <p class="text-justify">
                                <?= $result['history'] ?>
                            </p>
                        </div>
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