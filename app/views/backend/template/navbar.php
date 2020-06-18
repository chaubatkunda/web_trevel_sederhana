<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>" target="_blank">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
        <img src="<?php echo base_url('public/assets/back/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Trevel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('public/assets/back/dist/img/user/') . $this->fungsi->user_login()->foto; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?php if ($this->fungsi->user_login()->role == 1) :  ?>
                    <a href="<?php echo base_url('admin'); ?>" class="d-block"><?php echo $this->fungsi->user_login()->nama; ?></a>
                    <?php if ($this->fungsi->user_login()->is_online == 1) : ?>
                        <a href="#"><i class="fas fa-circle text-success"></i> Online</a>
                    <?php endif; ?>
                <?php else : ?>
                    <a href="<?php echo base_url('user'); ?>" class="d-block"><?php echo $this->fungsi->user_login()->nama; ?></a>
                    <?php if ($this->fungsi->user_login()->is_online == 1) : ?>
                        <a href="#"><i class="fas fa-circle text-success"></i> Online</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('admin'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('profil'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <?php if ($this->fungsi->user_login()->role == 2) :  ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('kategori.wisata'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Kategori Wisata
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->fungsi->user_login()->role == 1) :  ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-skiing-nordic"></i>
                            <p>
                                Wisata
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('admin/tempat_wisata'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tempat Wisata</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('admin/kategori_wisata'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>