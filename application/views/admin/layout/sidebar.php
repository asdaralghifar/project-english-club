<body class="">
    <nav class="pcoded-navbar  ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">
                <div class="">
                    <!-- <div class="main-menu-header">
                        <img class="img-radius" src="<?php echo base_url('upload/user/' . $session_user->foto); ?>" alt="User-Profile-Image">
                        <div class="user-details">
                            <span><?= $session_user->nama ?></span>
                            <div id="more-details"><?= $session_user->level ?></div>
                        </div>
                    </div> -->
                </div>
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Auth/Materi'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-book"></i></span><span class="pcoded-mtext">Data English Skills</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Auth/kategori_materi'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Kategori Materi</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Auth/Informasi'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-newspaper"></i></span><span class="pcoded-mtext">Data Informasi</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Auth/Galeri'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-camera"></i></span><span class="pcoded-mtext">Data Galeri</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('auth/User/pesan'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-envelope"></i></span><span class="pcoded-mtext">Pesan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('auth/User'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Data User</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('auth/Tentang'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-info"></i></span><span class="pcoded-mtext">Tentang</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->