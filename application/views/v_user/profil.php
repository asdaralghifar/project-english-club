    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Profil</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Profil</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <?php foreach ($tentang as $i) {
                            $id = $i['id_tentang'];
                            $nama_founder = $i['nama_founder'];
                            $image = $i['foto'];
                            $tentang_kec = $i['tentang_kec'];
                        ?>
                            <h5 class="text-danger text-uppercase mb-3" style="letter-spacing: 5px;">Profil</h5>
                            <h1>KEC - Kendari English Club</h1>
                            <img src="<?php echo base_url() . 'upload/tentang/' . $image; ?>" alt="" style="width:300px;"><br><br>
                            <div class="row">
                                <div class="col-mb-3">
                                    <h3>Founder</h3>
                                </div>
                                <div class="col">
                                    <h3><?php echo $nama_founder; ?></h3>
                                </div>
                            </div>
                    </div>
                    <h3>Abaout Kendari English Club</h3>
                    <p><?php echo $tentang_kec; ?></p>

                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">