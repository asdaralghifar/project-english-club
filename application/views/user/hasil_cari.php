<?php $this->load->view('user/header'); ?>

<body>
    <br><br><br>
    <div align="center">
        <div class="col-6">
            <form action="<?php echo base_url('user/cari') ?>" method="post">
                <input class="nosubmit" type="search" placeholder="Search..." name="search">
            </form>
        </div>
    </div>

    <?php
    if ($hasil != []) {
    ?>
        <br>
        <br>
        <div class="container-fluid">
            <div class="col-xl-14">
                <div class="card">
                    <br>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <h5>Hasil Cari : <?php echo $search . ' Menemukan ' . count($hasil) . ' Data'; ?></h5>
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>No Hak</th>
                                    <th>Surat Ukur</th>
                                    <th>NIB</th>
                                    <th>Luas Tanah</th>
                                    <th>Status Hak Tanah</th>
                                    <th>Status Sertifikat</th>
                                    <th>Status Sengketa</th>
                                    <th>Keterangan</th>
                                    <th>Detail</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $start = 1;
                                    foreach ($hasil as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $start; ?></td>
                                            <td><?= $u['no_hak']; ?></td>
                                            <td><?= $u['surat_ukur']; ?></td>
                                            <td><?= $u['nib']; ?></td>
                                            <td><?= $u['luas_tanah']; ?></td>
                                            <td><?= $u['status_hak_tanah']; ?></td>
                                            <td><?= $u['status_sertifikat']; ?></td>
                                            <td><?= $u['status_sengketa']; ?></td>
                                            <td><?= $u['keterangan']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url() . "user/detail_cari/" . $u['id_tanah']; ?>" class="btn  btn-primary  btn-sm">detail</a>
                                            </td>
                                        </tr>
                                    <?php $start++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        <?php } elseif ($hasil == []) {
        ?>
            <div class="col-xl-12">
                <div class="card">
                    <br>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <h5 style="color:red ;">Data Tidak di Temukan, Silahkan masukkan Kata Kunci Lain...</h5>
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>No Hak</th>
                                    <th>Surat Ukur</th>
                                    <th>NIB</th>
                                    <th>Luas Tanah</th>
                                    <th>Status Hak Tanah</th>
                                    <th>Status Sertifikat</th>
                                    <th>Status Sengketa</th>
                                    <th>Keterangan</th>
                                    <th>Detail</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $start = 1;
                                    foreach ($hasil as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $start; ?></td>
                                            <td><?= $u['no_hak']; ?></td>
                                            <td><?= $u['surat_ukur']; ?></td>
                                            <td><?= $u['nib']; ?></td>
                                            <td><?= $u['luas_tanah']; ?></td>
                                            <td><?= $u['status_hak_tanah']; ?></td>
                                            <td><?= $u['status_sertifikat']; ?></td>
                                            <td><?= $u['status_sengketa']; ?></td>
                                            <td><?= $u['keterangan']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url() . "user/detail_cari/" . $u['id_tanah']; ?>" class="btn  btn-primary  btn-sm">detail</a>
                                            </td>
                                        </tr>
                                    <?php $start++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
</body>