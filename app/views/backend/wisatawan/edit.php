<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

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
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <!-- <h3 class="card-title">DataTable with default features</h3> -->
                    </div>
                    <!-- /.card-header -->
                    <form action="" method="post" enctype="multipart/form-data" role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $wisatawan->email; ?>" readonly>
                                <small class="text-danger"><?php echo form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Full Name" value="<?php echo $wisatawan->nama; ?>" autofocus autocomplete="off">
                                <small class="text-danger"><?php echo form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input type="text" name="telp" class="form-control" value="<?php echo $wisatawan->nohp; ?>" id="telp" placeholder="Telp">
                                <small class="text-danger"><?php echo form_error('telp'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <textarea name="alamat" id="alamat" cols="10" class="form-control" placeholder="Alamat"><?php echo $wisatawan->alamat; ?></textarea>
                                <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan <i class="far fa-paper-plane"></i></button>
                            <a href="<?php echo base_url('admin/wisatawan'); ?>" class="btn btn-outline-danger">Batal <i class="fas fa-window-close"></i></a>
                        </div>
                    </form>
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