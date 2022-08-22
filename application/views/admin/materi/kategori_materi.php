    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Kategori Materi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data User</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] start -->

            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col card-header text-right">
                <a href="<?php echo base_url('Auth/Kategori_materi/tambah_data_kategori'); ?>">
                    <button type=" button" class="btn  btn-info">Tambah Data</button>
                </a>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <br>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>foto</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kategori_materi as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u['nama_kategori']; ?></td>
                                            <td><img width="100 " src="<?php echo base_url(); ?>upload/kategori/<?= $u['foto']; ?>" /></td>
                                            <td><a href="<?php echo base_url() . "Auth/Kategori_materi/hapus_data_kategori/" . $u['id_kategori']; ?>" class="btn  btn-danger btn-sm">Hapus</a>
                                                <a href="<?php echo base_url() . "Auth/Kategori_materi/edit_data_kategori/" . $u['id_kategori']; ?>" class="btn  btn-warning  btn-sm">ubah</a>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->