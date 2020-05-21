<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
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
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('public/assets/back/dist/img/user/') . $this->fungsi->user_login()->foto; ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"> <?php echo $this->fungsi->user_login()->nama; ?></h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <!-- <b>Followers</b> <a class="float-right">1,322</a> -->
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Email</strong>
                            <p class="text-muted">
                                <?php echo $this->fungsi->user_login()->email; ?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> No Telp/Hp</strong>
                            <p><?php echo $this->fungsi->user_login()->nohp; ?></p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                            <p class="text-muted"><?php echo $this->fungsi->user_login()->alamat; ?></p>
                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Tanggal Daftar</strong>

                            <p class="text-muted"><?php echo indoDate($this->fungsi->user_login()->tgl_daftar); ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#editprofil" data-toggle="tab">Edit Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('gantiPassword'); ?>">Ganti Password</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <?php echo $this->session->flashdata('user'); ?>
                                <div class="active tab-pane" id="editprofil">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email" class="form-control" id="email" value="<?php echo $this->fungsi->user_login()->email; ?>" placeholder="Email" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $this->fungsi->user_login()->nama; ?>" placeholder="Name">
                                                <small class="text-danger"><?php echo form_error('nama'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="telp" class="col-sm-2 col-form-label">Telp/Hp</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="telp" class="form-control" id="telp" value="<?php echo $this->fungsi->user_login()->nohp; ?>" placeholder="Telp/Np">
                                                <small class="text-danger"><?php echo form_error('telp'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Experience"><?php echo $this->fungsi->user_login()->alamat; ?></textarea>
                                                <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Foto</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->