<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-md-5">
                    <h1><?php echo $left; ?></h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $left; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="" class="btn btn-warning">Add</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($wisatawan as $w) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <?php echo $w->nama; ?> <br>
                                            <small class="text-primary"><?php echo $w->email; ?></small>
                                        </td>
                                        <td><?php echo $w->nohp; ?></td>
                                        <td>
                                            <?php if ($w->is_online == 1) : ?>
                                                <span>
                                                    <i class="fas fa-circle text-success"></i> Online
                                                </span>
                                            <?php else : ?>
                                                <span>
                                                    <i class="fas fa-circle text-danger"></i> Offline
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">Detail</a>
                                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->