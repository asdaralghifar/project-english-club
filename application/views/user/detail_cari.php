<style>
    .label {
        color: #1abc9c;
        font-family: helvetica;
    }

    .kotak {
        box-shadow: inset 2px 4px 4px rgba(0, 0, 0, 0.1);
        padding: 10px;
        color: black;
    }

    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
</style>

<body>
    <div class="container-fluid">
        <nav class="pcoded-navbar" style="background:white;">
            <div class="navbar-wrapper " style="width: 300px;">
                <div class="navbar-content scroll-div ">
                    <ul class="nav pcoded-inner-navbar ">
                        <br>
                        <li>
                            <h5>
                                <label class="label">No Hak:</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->no_hak; ?>
                            </h6>
                        </li>
                        <li>
                            <h5>
                                <label class="label">Surat Ukur:</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->surat_ukur; ?>

                            </h6>
                        </li>
                        <li>
                            <h5>
                                <label class="label">NIB</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->nib; ?>
                            </h6>
                        </li>
                        <li>
                            <h5>
                                <label class="label">Luas Tanah</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->luas_tanah; ?>
                            </h6>
                        </li>
                        <li>

                            <h5>
                                <label class="label">Status Hak Tanah</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->status_hak_tanah; ?>
                            </h6>
                        </li>
                        <li>
                            <h5>
                                <label class="label">Status Sertifikat</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->status_sertifikat; ?>
                            </h6>
                        </li>
                        <li>
                            <h5>
                                <label class="label">Status Sengketa</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->status_sengketa; ?>
                            </h6>
                        </li>
                        <li>
                            <h5>
                                <label class="label">Latitude</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->latitude; ?>
                            </h6>
                        <li>
                            <h5>
                                <label class="label">Longitude</label><br>
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->longitude; ?>
                            </h6>
                        </li>
                        </li>
                        <li>
                            <h5>
                                <label class="label">Keterangan<label class="label">
                            </h5>
                            <h6 class="kotak">
                                <?= $detail->keterangan; ?>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-content-user">
                <div id="wrapper">
                    <div class="">
                        <div id="mapid" style="width:100%;height:380px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var map = L.map('mapid').setView([-4.7711752, 122.0350875], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    $.getJSON("<?= base_url('upload/polygon/' . $detail->polygon); ?>", function(data) {
        L.geoJson(data).addTo(map);
    });
</script>