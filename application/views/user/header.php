<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Infomasi Pertanahan</title>
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
    <link rel="stylesheet" href="<?= base_url() ?>leaflet/leaflet.css" />
    <script src="<?= base_url() ?>leaflet/leaflet.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-1.11.1.min.js"></script>



</head>
<style>
    .span {
        font-family: Georgia;
    }
</style>
<!-- [ Header ] start -->
<div class="container-fluid">
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-light">
        <div class=" collapse navbar-collapse">
            <h3 align="center">
                <span class="span">S</span>
                <span class="span"><img src="<?php echo base_url(); ?>assets/images/i-logo.png" alt="" style="width:30px;"></span>
                <span class="span">P</span>
                <span class="span">E</span>
                <span class="span">R</span>
                <span class="span">T</span>
                <span class="span">A</span>
            </h3>
            <!-- <h3 class="body">SISTEM INFORMASI PERTANAHAN</h3> -->
        </div>
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