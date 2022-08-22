    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Materi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Ubah Materi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <?php foreach ($kategori_materi as $u) { ?>

                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'Auth/Kategori_materi/proses_edit_data_kategori'; ?>">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="hidden" name="id_kategori" class="form-control" value="<?php echo $u->id_kategori; ?>">
                                    <input type="text" class="form-control" name="nama_kategori" value="<?php echo $u->nama_kategori; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Foto</label>
                                    <input type="hidden" name="foto" value="<?php echo $u->foto ?>" />
                                    <div class="form-group col-md-6">
                                        <?php
                                        if (!empty($u->foto)) {
                                        ?>
                                            <img src="<?= base_url('./upload/kategori/' . $u->foto) ?>" width="150px" />
                                        <?php
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </div>
                                    <div><input type="file" name="foto" value="<?php echo $u->foto ?>"></div>

                                </div>
                                <button type="submit" name="update" class="btn  btn-primary" value="update">Ubah</button>

                            </div>
                    </form>
                <?php } ?>
            </div>
        </div>