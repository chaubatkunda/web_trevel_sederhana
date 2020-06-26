<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('public/assets/fron/'); ?>img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item <?php echo $this->uri->segment(1) == '' ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'tetangKami' ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url('tetangKami'); ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item  <?php echo $this->uri->segment(1) == 'destinasi' ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url('destinasi'); ?>">Destinasi</a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(1) == 'kontak' ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url('kontak'); ?>">Kontak</a>
                        </li>
                    </ul>
                    <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                        <a class="button" href="<?php echo base_url('auth'); ?>" target="_blank">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->