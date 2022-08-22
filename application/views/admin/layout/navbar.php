    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark" style="position:fixed ;">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="<?= base_url(); ?>assets/images/kec.jpeg" alt="" class="logo" style="width:50px">
                <div class="sidebar-brand-text mx-3 text-light">Kendari English Club</div>
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <!-- <div class="pro-head">
                                <img src="<?php echo base_url('upload/user/' . $session_user->foto); ?>" class="img-radius" alt="User-Profile-Image">
                                <span><?= $session_user->nama ?></span>
                            </div> -->
                            <ul class="pro-body">
                                <!-- <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li> -->
                                <!-- <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li> -->
                                <li><a href="<?php echo base_url('login_session/logout'); ?>" class="dropdown-item"><i class="feather icon-log-out"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->