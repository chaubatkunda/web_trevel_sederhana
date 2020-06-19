<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-8">
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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- right column -->
                <div class="col-md-8">
                    <!-- general form elements disabled -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Pemesanan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="post" role="form">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url('public/assets/back/dist/img/wisata/' . $wisata->gambar); ?>" class="card-img-top" style="width: 300px; height: 300px;">
                                        <h3 class="text-primary mt-3">
                                            <?php echo indoCurrency($wisata->harga); ?>
                                        </h3>
                                        <h5><?php echo $wisata->ket_wisata; ?></h5>
                                        <h5>Total Bayar <strong id="totalb"></strong></h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="<?php echo $this->fungsi->user_login()->nama; ?>" readonly>
                                            <input type="hidden" name="id_user" class="form-control" value="<?php echo $this->fungsi->user_login()->id_user; ?>" readonly>
                                            <input type="hidden" name="booking" class="form-control" value="<?php echo $this->fungsi->kodePesanan(); ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Telp</label>
                                            <input type="text" class="form-control" value="<?php echo $this->fungsi->user_login()->nohp; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Paket Wisata</label>
                                            <input type="text" name="paket_wisata" class="form-control" value="<?php echo $wisata->nama_tempat; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Berangkat</label>
                                                    <input type="date" name="berangkat" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Kepulangan</label>
                                                    <input type="date" name="pulang" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Jumlah Wisatawan</label>
                                                    <input type="text" name="jmlwisata" id="jml-wisata" data-hargawisata="<?php echo $wisata->harga; ?>" class="form-control" placeholder="Contoh : 10" autocomplete="off" value="<?php echo set_value('jmlwisata'); ?>">
                                                    <smal class="text-danger"><?php echo form_error('jmlwisata'); ?></smal>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Total Bayar</label>
                                                    <h5 class="text-success" id="totalby"></h5>
                                                </div>
                                            </div>
                                            <input type="hidden" name="total" id="hrgtotal" class="form-control" readonly>
                                            <input type="hidden" name="totalhr" id="total" class="form-control" value="<?php echo $wisata->harga; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-11">
                                        <a href="<?php echo base_url('paket.wisata/' . $wisata->kategori_id); ?>" class="btn btn-warning">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->