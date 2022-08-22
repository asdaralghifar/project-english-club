<!DOCTYPE html>
<html lang="en">

<head>

    <title>KEC - KENDARI ENGLISH CLUB</title>
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
    <link href="<?= base_url(); ?>assets/images/kec.jpeg" rel="icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <h3 style="color:white ;">KEC - KENDARI ENGLISH CLUB</h3>
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Login</h4>
                        <hr>
                        <form action="<?php echo base_url('login_session/cek_login'); ?>" method="post">
                            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" id="username" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
                            </div>
                            <a href="<?= base_url('Registrasi/index'); ?>" style="color:blue ;">Registrasi</a>
                            <button class="btn btn-block btn-danger mb-4" type="submit" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>