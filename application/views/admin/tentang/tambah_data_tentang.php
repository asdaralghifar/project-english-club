    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Tentang</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah Tentang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Tentang/proses_tambah_data_tentang">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Founder</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_founder" placeholder="nama founder" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tentang Kendari English Club</label>
                                <div class="col-sm-9">
                                    <textarea id="ckeditor" class="ckeditor" name="tentang_kec" id="exampleFormControlTextarea1" rows="5" required></textarea>
                                </div>
                            </div>
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