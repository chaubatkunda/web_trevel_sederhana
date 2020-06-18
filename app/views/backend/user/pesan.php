<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-11">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="" method="post" enctype="multipart/form-data" role="form">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Detail Wisata
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="kode_pesan" class="form-control" value="<?php echo $this->fungsi->kodePesanan(); ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="kode_pesan" class="form-control" value="<?php echo $wisata->nama_tempat; ?>">
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Kode Pesan</th>
                                        <td><?php echo $this->fungsi->kodePesanan(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Wisata</th>
                                        <td><?php echo $wisata->nama_tempat; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td class="text-danger"><?php echo indoCurrency($wisata->harga); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?php echo $wisata->alamat; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan <i class="far fa-paper-plane"></i></button>
                            <a href="<?php echo base_url('tempat.wisata'); ?>" class="btn btn-outline-danger">Batal <i class="fas fa-window-close"></i></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At, maiores!
                        </div>
                        <div class="card-body">
                            <h5>Detail Pesan</h5>

                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </form>
    </section>
    <!-- /.content -->
</div>