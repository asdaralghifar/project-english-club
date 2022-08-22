    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Galleri</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Gallery</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-danger text-uppercase mb-3" style="letter-spacing: 5px;">Gallery</h5>
                <h1>All Gallery</h1>
            </div>
            <div class="container">
                <div class="row">
                    <?php

                    foreach ($galeri as $i) :
                        $id = $i['id_galeri'];
                        $image = $i['foto'];

                    ?>
                        <div class="col-xl-3">
                            <hr>
                            <div class="card-deck">
                                <!-- <div class="card"> -->
                                <img class="img-fluid card-img-top" src="<?php echo base_url() . 'upload/galeri/' . $image; ?>" style="width:200px;height:200px; text-align:center" alt=" Card image cap">

                                <!-- </div> -->
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Team End -->