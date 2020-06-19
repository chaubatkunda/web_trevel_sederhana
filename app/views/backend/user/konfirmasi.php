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
                                        <ul class="text-text-justify">
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cum.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cum.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cum.</li>
                                        </ul>
                                        <ul>
                                            <li>Bank BRI</li>
                                            <ul>
                                                <li>00000000000000</li>
                                            </ul>
                                            <li>Bank BCA</li>
                                            <ul>
                                                <li>00000000000000</li>
                                            </ul>
                                            <li>Bank Mandiri</li>
                                            <ul>
                                                <li>00000000000000</li>
                                            </ul>
                                            <li>Bank BNI</li>
                                            <ul>
                                                <li>00000000000000</li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="text-primary text-right"> Tanggal : <span class="badge badge-warning"><?php echo indoDate($konfirm->tgl_transaksi); ?></span></h5>
                                        <div class="form-group">
                                            <label>Invoice</label>
                                            <h5>
                                                <strong>#<?php echo $konfirm->invoice; ?> |</strong>
                                                <span class="badge badge-primary">
                                                    <?php echo indoCurrency($konfirm->total); ?>
                                                </span>
                                            </h5>
                                            <input type="hidden" class="form-control" value="<?php echo $konfirm->invoice; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pengirim</label>
                                            <input type="text" class="form-control" placeholder="Nama Pengirim">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Transfer</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Transfer">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Transfer</label>
                                            <input type="text" class="form-control" placeholder="Jumlah Transfer">
                                        </div>
                                        <div class="form-group">
                                            <label>Bukti Transfer</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-11">
                                        <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
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