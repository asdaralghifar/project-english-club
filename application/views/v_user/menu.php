<!-- Topbar Start -->

<body>
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <img src="<?= base_url(); ?>assets/images/kec.jpeg" alt="" style="width:75px ;">
                </a>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid">
            <div class="row border-top px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <a href="<?= base_url('User'); ?>" class="nav-item nav-link">Home</a>
                                <a href="<?= base_url('User/profil'); ?>" class="nav-item nav-link">Profile KEC</a>
                                <a href="<?= base_url('User/kategori_materi'); ?>" class="nav-item nav-link">English Skills</a>
                                <a href="<?= base_url('User/galeri'); ?>" class="nav-item nav-link">Gallery</a>
                                <a href="<?= base_url('User/informasi'); ?>" class="nav-item nav-link">Information</a>
                                <a href="<?= base_url('User/kontak'); ?>" class="nav-item nav-link">Contact</a>

                            </div>
                            <a class="btn btn-danger py-2 px-4 ml-auto d-none d-lg-block" href="<?= base_url('login_session/logout'); ?>">Log Out</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
</body>