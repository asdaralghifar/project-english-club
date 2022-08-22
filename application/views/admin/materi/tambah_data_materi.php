    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data materi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah materi</a></li>
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
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Materi/proses_tambah_data_materi">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul materi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul_materi" placeholder="judul materi" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kategori Materi</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleFormControlSelect1" name="nama_kategori" required>
                                        <option>Pilih</option>
                                        <?php foreach ($kategori_materi as $key) : ?>
                                            <option value="<?= $key->nama_kategori ?>" required><?= $key->nama_kategori ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi Materi</label>
                                <div class="col-sm-9">
                                    <textarea id="ckeditor" class="ckeditor" name="isi_materi" id="exampleFormControlTextarea1" rows="5" required></textarea>
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