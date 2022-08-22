    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Ubah Data materi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Ubah materi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($materi as $u) { ?>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Materi/proses_edit_data_materi">

                                <div class="form-group-row">
                                    <label class="col-sm-3 col-form-label">Judul materi</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" class="form-control" name="id_materi" value="<?php echo $u->id_materi; ?>">
                                        <input type="text" class="form-control" name="judul_materi" value="<?php echo $u->judul_materi; ?>" aria-describedby="Masukkan Email and" placeholder="isi judul materi">
                                    </div>
                                </div>
                                <div class="form-group-row">
                                    <label class="col-sm-3 col-form-label">Nama kategori</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="exampleFormControlSelect1" name="nama_kategori">
                                            <option>Pilih</option>
                                            <?php foreach ($kategori_materi as $key) : ?>
                                                <option value="<?= $key->id_kategori ?>"><?= $key->nama_kategori ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group-row">
                                    <label class="col-sm-3 col-form-label">Isi materi</label>
                                    <div class="col-sm-9">
                                        <textarea name="isi_materi" class="ckeditor" id="ckeditor"><?= $u->isi_materi; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group-row">
                                    <label class="col-sm-3 col-form-label">Foto</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="foto" value="<?php echo $u->foto ?>" />
                                    </div>
                                    <div class="form-group-row col-md-6">
                                        <?php
                                        if (!empty($u->foto)) {
                                        ?>
                                            <img src="<?= base_url('./upload/materi/' . $u->foto) ?>" width="150px" />
                                        <?php
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </div>
                                    <div class="col-sm-9">
                                        <div><input type="file" name="foto" value="<?php echo $u->foto ?>"></div>
                                    </div>
                                    <button type="submit" name="submit" class="btn  btn-primary">Ubah</button>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>