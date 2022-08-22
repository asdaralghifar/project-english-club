<body>
    <div class="container">
        <u style="color: #148f77 ;">
            <h2 align="center" style="color: #148f77 ;">Informasi</h2>
        </u>
        <?php
        function limit_words($string, $word_limit)
        {
            $words = explode(" ", $string);
            return implode(" ", array_splice($words, 0, $word_limit));
        }
        foreach ($informasi as $i) :
            $id = $i['id_informasi'];
            $judul = $i['judul_informasi'];
            $image = $i['foto'];
            $isi = $i['isi_informasi'];

        ?>


        <?php endforeach; ?>
    </div>

    <script src="<?php echo base_url() . 'assets/jquery/jquery-2.2.3.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
</body>