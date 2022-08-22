<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-10"><br><br>
                        <div class="page-header-title">
                            <h5 class="m-b-10">Informasi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Informasi/Deatil
                                </a></li>
                        </ul>
                    </div>
                </div><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <h5>Foto</h5>
                        </div>
                        <div class="col">
                            <img src="<?= base_url('./upload/informasi/' . $detail->foto) ?>" width="150px" />
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-2">
                            <h5>Judul Informasi</h5>
                        </div>
                        <div class="col">
                            <h6><?= $detail->judul; ?></h6>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-2">
                            <h5> Isi Informasi</h5>
                        </div>
                        <div class="col">
                            <h6><?= $detail->isi_informasi; ?></h6>
                        </div>
                    </div>
                </div>