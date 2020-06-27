<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if ($this->fungsi->user_login()->role == 1) :  ?>
                        <a href="<?php echo base_url('admin/create_wisata'); ?>" class="btn btn-outline-primary">Add <i class="fas fa-plus"></i></a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo $this->session->flashdata('warning'); ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Invoice</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($transaksi as $t) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($t->tgl_transaksi); ?></td>
                                            <th>#<?php echo $t->invoice; ?></th>
                                            <td class="text-right">
                                                <?php echo indoCurrency($t->total); ?>
                                            </td>
                                            <td>
                                                <?php if ($t->is_success == 1) : ?>
                                                    <span class="text-success">Verify</span>
                                                <?php else : ?>
                                                    <span class="text-warning">Pending</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php $query = $this->db->get_where('t_transaksi_detail', ['invoice' => $t->invoice])->num_rows(); ?>
                                                <?php if ($t->is_success == 1) : ?>
                                                    <a href=#" class="btn btn-success btn-sm">Verify</a>
                                                <?php else : ?>
                                                    <?php if ($query > 0) : ?>
                                                        <a href="<?php echo base_url('admin/konfirmasi/') . $t->invoice; ?>" class="btn btn-primary btn-sm">Konfirmasi</a>
                                                    <?php else : ?>
                                                        <a href="#" class="btn btn-warning btn-sm">Belum Konfirmasi</a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>