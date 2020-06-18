<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-sm-8">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tempat Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <?php foreach ($paket as $p) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo base_url('public/assets/back/dist/img/wisata/' . $p->gambar); ?>" class="card-img-top" style="width: auto; height: 200px;">
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row text-left">
                                <div class="col-12">
                                    <h5><?php echo $p->nama_tempat; ?></h5>
                                    <p><?php echo $p->ket_wisata; ?></p>
                                    <h5 class="text-danger"><?php echo indoCurrency($p->harga); ?>/<small>Orang</small></h5>
                                    <a href="<?php echo base_url('booking/' . $p->id_wisata); ?>" class="btn btn-warning">Pesan Sekarang</a>

                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            <?php endforeach; ?>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>