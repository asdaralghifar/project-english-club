
<body>
<div><br><br><br>
    <div style="border: 0; padding: 40px; background-color: #82CAFA; text-align: Center;">Informasi</div>
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

                <div class="card col-xl-4 col-md-4" style="padding: 15px;" style="border:1 ;">
                    <img class="card-img-top" src="<?php echo base_url() . 'upload/informasi/' . $image; ?>" width="300px" height="300px" alt=" Card image cap">
                    <div class="card-body">
                        <a href="<?php echo base_url() . 'user/view/' . $id; ?>">
                            <h5 class="card-title"><?php echo $judul; ?></h5>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>