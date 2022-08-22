<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">



</head>
<!-- [ Header ] start -->
<div class="container-fluid">
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-light">
        <div class="collapse navbar-collapse">
        </div>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="user">
            <li class="nav-item">
                <a href="<?php echo base_url('user/index'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('user/list_informasi'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext" style>Informasi</span>
                    <style color: #fffff;></style>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('datatanah/index'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Tentang</span></a>
            </li>

            </li>
        </ul>
    </header>
</div>

<body>
    <br><br><br><br><br><br><br><br>
    <h1 align="center">
        <span>S</span>
        <span><img src="<?php echo base_url(); ?>assets/images/i-logo.png" alt="" style="width:30px;"></span>
        <span>P</span>
        <span>E</span>
        <span>R</span>
        <span>T</span>
        <span>A</span>
    </h1>
    <center>
        <form action="<?php echo base_url('user/cari') ?>" method="post">
            <input class="nosubmit" type="search" placeholder="Search..." name="search">
        </form>
    </center>
    <?php
    if ($hasil != []) {
    ?>
        <br>
        <br>
        <div class="col-xl-12">
            <div class="card">
                <br>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <h5>Hasil Cari : <?php echo $search . ' Menenukan ' . count($hasil) . ' Data'; ?></h5>
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama pemilik Awal</th>
                                <th>Nama pemilik Akhir</th>
                                <th>No Hak</th>
                                <th>Surat Ukur</th>
                                <th>NIB</th>
                                <th>Luas Tanah</th>
                                <th>Status Hak Tanah</th>
                                <th>Status Sertifikat</th>
                                <th>Status Sengketa</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Keterangan</th>
                                <th>Polygon</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $start = 1;
                                foreach ($hasil as $u) {
                                ?>
                                    <tr>
                                        <td><?= $start; ?></td>
                                        <td><?= $u['nama_pemilik_awal']; ?></td>
                                        <td><?= $u['nama_pemilik_akhir']; ?></td>
                                        <td><?= $u['no_hak']; ?></td>
                                        <td><?= $u['surat_ukur']; ?></td>
                                        <td><?= $u['nib']; ?></td>
                                        <td><?= $u['luas_tanah']; ?></td>
                                        <td><?= $u['status_hak_tanah']; ?></td>
                                        <td><?= $u['status_sertifikat']; ?></td>
                                        <td><?= $u['status_sengketa']; ?></td>
                                        <td><?= $u['latitude']; ?></td>
                                        <td><?= $u['longitude']; ?></td>
                                        <td><?= $u['keterangan']; ?></td>
                                        <td><a href="<?= 'upload/polygon/' . $u['polygon']; ?>" target="_BLANK"><?= $u['polygon']; ?></a></td>

                                    </tr>
                                <?php $start++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</body>
<!-- Required Js -->
<script src="<?php echo base_url(); ?>assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="<?php echo base_url(); ?>assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard-main.js"></script>

</html>