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
                                        <th>Nama Tempat</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($wisata as $ws) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $ws->nama_tempat; ?></td>
                                            <td><?php echo $ws->alamat; ?></td>
                                            <td class="text-right"><?php echo indoCurrency($ws->harga); ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit.wisata/') . $ws->id_wisata; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?php echo base_url('admin/hapus.wisata/') . $ws->id_wisata; ?>" class="btn btn-danger btn-sm">Hapus</a>
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