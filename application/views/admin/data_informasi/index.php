    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Informasi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Informasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] start -->
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col card-header text-right">
                <a href="<?php echo base_url('Auth/Informasi/tambah_data_informasi'); ?>">
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
                                    <th>No</th>
                                    <th>judul Informasi</th>
                                    <th>Isi Informasi</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    function limit_words($string, $word_limit)
                                    {
                                        $words = explode(" ", $string);
                                        return implode(" ", array_splice($words, 0, $word_limit));
                                    }
                                    $no = 1;
                                    foreach ($informasi as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u['judul']; ?></td>
                                            <td><?= $u['isi_informasi']; ?></td>
                                            <td><img width="100 " src="<?php echo base_url(); ?>upload/informasi/<?= $u['foto']; ?>" /></td>
                                            <td><a href="<?php echo base_url() . "Auth/Informasi/hapus_data_informasi/" . $u['id_informasi']; ?>" class="btn  btn-danger btn-sm">Hapus</a>
                                                <a href="<?php echo base_url() . "Auth/Informasi/edit_data_informasi/" . $u['id_informasi']; ?>" class="btn  btn-warning  btn-sm">ubah</a>
                                                <a href="<?php echo base_url() . "Auth/Informasi/detail_data_informasi/" . $u['id_informasi']; ?>" class="btn  btn-primary  btn-sm">detail</a>
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