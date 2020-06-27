<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-8">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Bukti Pembayaran:</h5>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                            Show Bukti Pembayaran
                        </button>
                    </div>

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <!-- <i class="fas fa-globe"></i> AdminLTE, Inc. -->
                                    <small class="float-right">Tanggal: <?php echo indoDate($detail->tgl_bayar); ?></small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <!-- Pengirim -->
                                <address>
                                    <b>Invoice : </b> #<?php echo $detail->invoice; ?><br>
                                    <b>Pengirim : </b> <?php echo $detail->nama_pengirim; ?><br>
                                    <b>Tanggal : </b><?php echo indoDate($detail->tgl_transfer); ?><br>
                                    <!-- Phone: (804) 123-5432<br>
                                    Email: info@almasaeedstudio.com -->
                                </address>
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Wisata</th>
                                            <th>Berangkat</th>
                                            <th>Pulang</th>
                                            <th>Wisatawan</th>
                                            <th class="text-center">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $transaksi->wisata; ?></td>
                                            <td><?php echo indoDate($transaksi->chek_in); ?></td>
                                            <td><?php echo indoDate($transaksi->chek_out); ?></td>
                                            <td><?php echo $transaksi->jumlah_wisatawan; ?> Orang</td>
                                            <td class="text-right">
                                                <?php echo indoCurrency($transaksi->harga); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td class="text-right text-primary">
                                            <?php echo indoCurrency($transaksi->total); ?>
                                        </td>
                                    </tr>
                                </table>

                                <form action="<?php echo base_url('admin/simpan_konfirmasi'); ?>" method="post">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="hidden" name="invoice" id="" class="form-control" value="<?php echo $detail->invoice; ?>">
                                        <input type="hidden" name="verify" id="" class="form-control" value="1">
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                        <a href="<?php echo base_url('admin/transaksi'); ?>" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
</div>

<div class="modal fade" id="modal-info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title">Bukti Pembayaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <img src="<?php echo base_url('public/assets/bukti_transfer/' . $detail->bukti_transfer); ?>" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-light">Save changes</button>
            </div> -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->