<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if ($this->fungsi->user_login()->role == 1) :  ?>
                        <a href="<?php echo base_url('add.kategori'); ?>" class="btn btn-outline-primary">Add Kategori <i class="fas fa-plus"></i></a>
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
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <?php echo $this->session->flashdata('warning'); ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Kategori Wisata</th>
                                        <th>Total</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($ktwisata as $kt) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                <img src="<?php echo base_url('public/assets/back/dist/img/wisata/') . $kt->gambar; ?>" class="img-thumbnail" width="90">
                                            </td>
                                            <td>
                                                <?php echo $kt->jenis_kategori; ?>
                                            </td>
                                            <td>
                                                <?php
                                                $idk = $kt->id_kategori;
                                                $queryk = $this->db->get_where('t_wisata', ['kategori_id' => $idk])->num_rows();

                                                ?>
                                                <span class="badge badge-primary"><?php echo $queryk; ?></span>
                                            </td>
                                            <td>
                                                <?php if ($this->fungsi->user_login()->role == 1) :  ?>
                                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="<?php echo base_url('hapus.katwisata/') . $kt->id_kategori; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                                <?php else : ?>
                                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Kategori Wisata</th>
                                        <th>Total</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
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