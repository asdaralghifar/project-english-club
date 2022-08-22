<div class="pb-3">
    <h3 class="m-0">Tranding</h3>
    <div class="scroll">
        <div class="bg-light py-2 px-4 mb-3">
            <?php
            foreach ($informasi as $i) :
                $id = $i['id_informasi'];
                $judul = $i['judul_informasi'];
                $image = $i['foto'];
                $isi = $i['isi_informasi'];
                $tgl_informasi = $i['tgl_informasi'];

            ?>
        </div>

        <div class="d-flex mb-3">
            <img src="<?php echo base_url() . 'upload/informasi/' . $image; ?>" style="width: 100px; height: 100px; object-fit: cover;">
            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                <div class="mb-1" style="font-size: 13px;">
                    <a href="">Informasi</a>
                    <span class="px-1">/</span>
                    <span><?php echo $tgl_informasi; ?></span>
                </div>
                <a class="h6 m-2" href=""><?php echo limit_words($judul, 5); ?></a>

            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>