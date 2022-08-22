    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">English Skills</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Materi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] start -->

            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col card-header text-right">
                <a href="<?php echo base_url('Auth/Materi/tambah_data_materi'); ?>">
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
                                    <th>Judul Materi</th>
                                    <th>Isi materi</th>
                                    <th>foto</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($materi as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u['nama_kategori']; ?></td>
                                            <td><?= $u['judul_materi']; ?></td>
                                            <td><?= $u['isi_materi']; ?></td>
                                            <td><img width="100 " src="<?php echo base_url(); ?>upload/materi/<?= $u['foto']; ?>" /></td>
                                            <td><a href="<?php echo base_url() . "Auth/Materi/hapus_data_materi/" . $u['id_materi']; ?>" class="btn  btn-danger btn-sm">Hapus</a>
                                                <a href="<?php echo base_url() . "Auth/Materi/edit_data_materi/" . $u['id_materi']; ?>" class="btn  btn-warning  btn-sm">ubah</a>
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