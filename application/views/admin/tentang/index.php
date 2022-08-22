    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Tentang</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Tentang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] start -->
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col card-header text-right">
                <a href="<?php echo base_url('Auth/Tentang/tambah_data_Tentang'); ?>">
                    <button type=" button" class="btn  btn-primary">Tambah Data</button>
                </a>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <br>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>nama_founder</th>
                                    <th>Foto Founder</th>
                                    <th>tentang_kec</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $no = 1;
                                    foreach ($tentang as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $u['nama_founder']; ?></td>
                                            <td><img width="100 " src="<?php echo base_url(); ?>upload/tentang/<?= $u['foto']; ?>" /></td>
                                            <td><?= $u['tentang_kec']; ?></td>
                                            <td><a href="<?php echo base_url() . "Auth/Tentang/hapus_data_tentang/" . $u['id_tentang']; ?>" class="btn  btn-danger btn-sm">Hapus</a>
                                                <a href="<?php echo base_url() . "Auth/Tentang/edit_data_tentang/" . $u['id_tentang']; ?>" class="btn  btn-warning  btn-sm">ubah</a>
                                                <a href="<?php echo base_url() . "Auth/Tentang/detail_data_tentang/" . $u['id_tentang']; ?>" class="btn  btn-primary  btn-sm">detail</a>
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