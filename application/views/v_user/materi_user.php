<?php
$b = $materi->row_array();
?>
<!-- Blog Start -->
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Materi</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Materi</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-danger text-uppercase mb-3" style="letter-spacing: 5px;">Materi</h5>
            <h1><?= ucfirst($b['nama_kategori']); ?></h1>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <img class="img-fluid" src="<?php echo base_url() . 'upload/materi/' . $b['foto']; ?>" alt="" style="width:400px ; height:300px;">
                <div class="bg-secondary p-4">
                    <a class="h5" href="<?php echo base_url() . 'user/detail_materi/' . $b['id_materi']; ?>"><?= $b['judul_materi']; ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses End -->
    <!-- Blog End -->