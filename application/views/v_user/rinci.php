<?php
$b = $data->row_array();
?>
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Detail</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Detail</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Detail Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <!-- <h6 class="text-primary mb-3">Jan 01, 2050</h6> -->
                    <h1 class="mb-5"><?php echo $b['judul']; ?></h1>
                    <img class="img-fluid rounded w-100 mb-4" src="<?php echo base_url() . 'upload/informasi/' . $b['foto']; ?>" alt="Image" style="width:500px;height:400px">
                    <p><?php echo $b['isi_informasi']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail End -->