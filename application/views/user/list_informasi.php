<body>
    <div><br><br><br>
        <div class="transparent" style="border: 0; padding: 40px; background-color: rgba(72,454,505, 0.2); text-align: Center;">
            <h4>Informasi</h4>
        </div>
        <?php
        function limit_words($string, $word_limit)
        {
            $words = explode(" ", $string);
            return implode(" ", array_splice($words, 0, $word_limit));
        }
        ?><br>
        <div class="container">
            <div class="row">
                <?php
                foreach ($informasi as $i) :
                    $id = $i['id_informasi'];
                    $judul = $i['judul_informasi'];
                    $image = $i['foto'];
                    $isi = $i['isi_informasi'];
                ?>
                    <div class="col-xl-4">
                        <hr>
                        <div class="card-deck">
                            <div class="card">
                                <img class="img-fluid card-img-top" src="<?php echo base_url() . 'upload/informasi/' . $image; ?>" style="width:300px;height:300px; text-align:center" alt=" Card image cap">
                                <div class="card-body">
                                    <a href="<?php echo base_url() . 'user/view/' . $id; ?>">
                                        <h5 class="card-title"><?php echo $judul; ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
</body>