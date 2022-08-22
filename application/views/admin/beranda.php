[ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12"><br><br>
                        <div class="page-header-title">
                            <h5 class="m-b-10">Beranda</h5>
                        </div>
                        <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Beranda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-6">
                <!-- widget primary card start -->
                <div class="flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="<?php echo base_url('Auth/Materi'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>English Skills</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-6">
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="<?php echo base_url('Auth/Informasi'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>Informasi</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <!-- table card-3 start -->
            <div class="col-md-12 col-xl-6">
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-camera"></i>
                        </div>
                        <a href="<?php echo base_url('Auth/Galeri'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>Galeri</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-3 end -->
            <!-- table card-4 start -->
            <div class="col-md-12 col-xl-6">
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-users"></i>
                        </div>
                        <a href="<?php echo base_url('Auth/User'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>User</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-4 end -->
        </div>
        <!-- [ Main Content ] end