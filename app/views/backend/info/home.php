<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <?php echo $this->session->flashdata('warning'); ?>
                        <?php if ($this->fungsi->user_login()->role == 1) :  ?>
                            <a href="<?php echo base_url('admin/info/create'); ?>" class="btn btn-outline-primary">Add <i class="fas fa-plus"></i></a>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>BANK</th>
                                        <th>No Rekening</th>
                                        <th>Pemilik Rekening</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($info as $i) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $i->nama_bank; ?></td>
                                            <td><?php echo $i->no_rek; ?></td>
                                            <td class="text-right"><?php echo $i->nama_pemilik; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/info/edit/') . $i->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?php echo base_url('admin/info/hapus/') . $i->id; ?>" class="btn btn-danger btn-sm">Hapus</a>
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