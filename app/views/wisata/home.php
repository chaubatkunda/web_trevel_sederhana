<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
        <div class="hero-banner-sm-content">
            <h1><?php echo $title; ?></h1>
            <p>Air seed winged lights saw kind whales in sixth best a dont seas dron image so fish all tree on</p>
        </div>
    </div>
</section>
<!--================Hero Banner SM Area End =================-->
<!--================Service Area Start =================-->
<section class="section-margin">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="<?php echo base_url('public/assets/fron/'); ?>img/home/section-icon.png" alt="">
            <h2>Kategori Tempat Wisata</h2>
            <!-- <p>Fowl have fruit moveth male they are that place you will lesser</p> -->
        </div>

        <div class="row justify-content-center">
            <?php foreach ($kategori as $k) : ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="service-card text-center">
                        <div class="service-card-img">
                            <img class="img-fluid" src="<?php echo base_url('public/assets/back/dist/img/kategori/' . $k->gambar); ?>" style="height: 164px;">
                        </div>
                        <div class="service-card-body">
                            <h3><?php echo $k->jenis_kategori; ?></h3>
                            <p><?php echo $k->keterangan; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--================Service Area End =================-->


<!--================Tour section Start =================-->
<section class="section-margin">
    <div class="container">
        <div class="row">
            <?php foreach ($wisata as $w) : ?>
                <div class="col-md-6 col-lg-6">
                    <div class="tour-card">
                        <img class="card-img rounded-0" src="<?php echo base_url('public/assets/back/dist/img/wisata/' . $w->gambar); ?>">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4><?php echo $w->nama_tempat; ?></h4>
                                    <!-- <small>5 days offer</small> -->
                                    <p class="text-primary"><?php echo indoCurrency($w->harga); ?>/Wisatawan</p>
                                </div>
                                <div class="media-price">
                                    <p class="text-primary"><?php echo $w->ket_wisata; ?></p>
                                </div>
                            </div>
                            <a href="<?php echo base_url('auth?url=kategori.wisata'); ?>" class="btn btn-success btn-sm">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!--================Tour section End =================-->