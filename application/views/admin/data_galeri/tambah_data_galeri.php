    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data User</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah User</a></li>
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

                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Galeri/proses_tambah_data_galeri">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Foto</label>
                                <div><input type="file" name="foto"></div>
                            </div>
                            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>

                        </form>
                    </div>
                </div>