    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">English Skills</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">English Skills</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-danger text-uppercase mb-3" style="letter-spacing: 5px;">English Skills</h5>
                <h1>Upgrade to Skills</h1>
            </div>
            <div class="row">
                <div class="row">
                    <?php
                    foreach ($kategori_materi as $i) {
                        $id = $i['id_kategori'];
                        $nama_kategori = $i['nama_kategori'];
                        $image = $i['foto'];
                    ?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="cat-item position-relative overflow-hidden rounded mb-2">
                                <img class="img-fluid" src="<?php echo base_url() . 'upload/kategori/' . $image; ?>" alt="" style="width:300px">
                                <a class="cat-overlay text-white text-decoration-none" href="<?php echo base_url() . 'user/materi/' . $nama_kategori; ?>">
                                    <h4 class="text-white font-weight-medium"><?= $nama_kategori; ?></h4>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- Category Start -->