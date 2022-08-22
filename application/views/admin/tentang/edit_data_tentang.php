    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Ubah Data Informasi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Ubah Informasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($tentang as $u) { ?>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Tentang/proses_edit_data_tentang">

                                <div class="form-group-row">
                                    <label class="col-sm-3 col-form-label">Nama Founder</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" class="form-control" name="id_tentang" value="<?php echo $u->id_tentang; ?>">
                                        <input type="text" class="form-control" name="nama_founder" value="<?php echo $u->nama_founder; ?>" aria-describedby="Masukkan Email and" placeholder="isi nama founder">
                                    </div>
                                </div>
                                <div class="form-group-row">
                                    <label class="col-sm-3 col-form-label">tentang Kendari English Club</label>
                                    <div class="col-sm-9">
                                        <textarea name="tentang_kec" class="ckeditor" id="ckeditor"><?= htmlentities($u->tentang_kec); ?></textarea>
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
                                            <img src="<?= base_url('./upload/tentang/' . $u->foto) ?>" width="150px" />
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