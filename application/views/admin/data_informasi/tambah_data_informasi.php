    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Informasi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah Informasi</a></li>
                            </ul>
                        </div>
                    </div><br>
                    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/informasi/proses_tambah_data_informasi">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul Informasi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul" placeholder="judul informasi" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi informasi</label>
                                <div class="col-sm-9">
                                    <textarea id="ckeditor" class="ckeditor" name="isi_informasi" id="exampleFormControlTextarea1" rows="5" required="required"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="tgl_informasi" value="<?php echo date("d-m-Y"); ?>">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" name="foto">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn  btn-primary" style="float:right ;">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>