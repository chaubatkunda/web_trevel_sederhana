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
                                <label for="bank">BANK</label>
                                <input type="text" name="bank" class="form-control" id="bank" placeholder="BANK" value="<?php echo $info->nama_bank; ?>">
                                <small class="text-danger"><?php echo form_error('bank'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="rek">Rekening</label>
                                <input type="text" name="rek" class="form-control" id="rek" placeholder="Rekening" value="<?php echo $info->no_rek; ?>">
                                <small class="text-danger"><?php echo form_error('rek'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="pemilik">Pemilik</label>
                                <input type="text" name="pemilik" class="form-control" id="pemilik" placeholder="Pemilik" value="<?php echo $info->nama_pemilik; ?>">
                                <small class="text-danger"><?php echo form_error('pemilik'); ?></small>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan <i class="far fa-paper-plane"></i></button>
                            <a href="<?php echo base_url('admin/tempat_wisata'); ?>" class="btn btn-outline-danger">Batal <i class="fas fa-window-close"></i></a>
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