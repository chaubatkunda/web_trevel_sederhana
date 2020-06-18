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
            <?php foreach ($kategori as $k) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo base_url('public/assets/back/dist/img/kategori/' . $k->gambar); ?>" class="card-img-top" style="width: auto; height: 200px;">
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row text-center">
                                <div class="col-12">
                                    <h5 class=" mb-3"><?php echo $k->jenis_kategori; ?></h5>
                                    <a href="<?php echo base_url('paket.wisata/' . $k->id_kategori); ?>" class="btn btn-primary mb-4">Pilih Paket Wisata</a>
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