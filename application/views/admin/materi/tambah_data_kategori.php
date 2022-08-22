    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Kategori</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah kategori</a></li>
                            </ul>
                        </div>
                    </div><br>
                    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-6">

                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Kategori_materi/proses_tambah_data_kategori">

                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" placeholder="nama kategori" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Foto</label>
                                <div><input type="file" name="foto"></div>
                            </div>
                            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>

                    </div>
                </div>