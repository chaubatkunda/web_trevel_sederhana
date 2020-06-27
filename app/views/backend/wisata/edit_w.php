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
                                <label for="namatempat">Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    <?php foreach ($kategori as $k) : ?>
                                        <?php if ($k->id_kategori == $wisata->kategori_id) : ?>
                                            <option value="<?php echo $k->id_kategori; ?>" selected><?php echo $k->jenis_kategori; ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->jenis_kategori; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="text-danger"><?php echo form_error('namatempat'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="namatempat">Nama Tempat</label>
                                <input type="text" name="namatempat" class="form-control" id="namatempat" placeholder="Enter Nama Tempat" value="<?php echo $wisata->nama_tempat; ?>">
                                <small class="text-danger"><?php echo form_error('namatempat'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="Harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id="Harga" placeholder="Enter Harga" value="<?php echo $wisata->harga; ?>">
                                <small class="text-danger"><?php echo form_error('harga'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="ketwisata">Keterangan</label>
                                <textarea name="ketwisata" id="" cols="10" class="form-control" placeholder="Keterangan Wisata"><?php echo $wisata->ket_wisata; ?></textarea>
                                <small class="text-danger"><?php echo form_error('ketwisata'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="10" class="form-control" placeholder="Alamat"><?php echo $wisata->alamat; ?></textarea>
                                <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="file">Gambar</label>
                                <input type="file" name="file" class="form-control">
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