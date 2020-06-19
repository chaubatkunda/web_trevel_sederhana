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
                            <h3 class="card-title">Riwayat Transaksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Wisata</th>
                                        <th>Invoice</th>
                                        <th>Subtotal</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($transaksi as $t) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($t->tgl_transaksi); ?></td>
                                            <td><?php echo $t->wisata; ?></td>
                                            <td><b>#<?php echo $t->invoice; ?></b></td>
                                            <td><?php echo indoCurrency($t->harga); ?></td>
                                            <td>
                                                <?php if ($t->is_success !== 1) : ?>
                                                    <span class="badge badge-warning">
                                                        Konfirmasi Pembayaran
                                                    </span>
                                                <?php else : ?>
                                                    <span class="text-success">
                                                        Aktif
                                                    </span>
                                                <?php endif ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('konfirmasi?invoice=' . $t->invoice); ?>" class="btn btn-primary btn-sm">Konfirmasi</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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