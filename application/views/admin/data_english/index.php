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
                                <li class="breadcrumb-item"><a href="#!">English Skills</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] start -->
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col card-header text-right">
                <a href="<?php echo base_url('Auth/English_skiils/tambah_data_english'); ?>">
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
                                    <th>Nama Kategori</th>
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
                                    foreach ($english as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u['judul']; ?></td>
                                            <td><?= limit_words($u['isi_english'], 20); ?></td>
                                            <td><img width="100 " src="<?php echo base_url(); ?>upload/english/<?= $u['foto']; ?>" /></td>
                                            <td><a href="<?php echo base_url() . "Auth/english/hapus_data_english/" . $u['id_english']; ?>" class="btn  btn-danger btn-sm">Hapus</a>
                                                <a href="<?php echo base_url() . "Auth/english/edit_data_english/" . $u['id_english']; ?>" class="btn  btn-warning  btn-sm">ubah</a>
                                                <a href="<?php echo base_url() . "Auth/english/detail_data_english/" . $u['id_english']; ?>" class="btn  btn-primary  btn-sm">detail</a>
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