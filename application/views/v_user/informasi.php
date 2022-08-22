<!-- Blog Start -->
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Information</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Information</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-danger text-uppercase mb-3" style="letter-spacing: 5px;">Information</h5>
            <h1>All Information</h1>
        </div>
        <div class="row">
            <?php
            foreach ($informasi as $i) :
                $id = $i['id_informasi'];
                $judul = $i['judul'];
                $image = $i['foto'];
            ?>
                <div class="col-xl-3">
                    <img class="img-fluid" src="<?php echo base_url() . 'upload/informasi/' . $image; ?>" alt="" style="width:400px ; height:200px;">
                    <div class="bg-secondary p-4">
                        <a class="h5" href="<?php echo base_url() . 'user/detail_informasi/' . $id; ?>"><?= $judul; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Courses End -->
    <!-- Blog End -->