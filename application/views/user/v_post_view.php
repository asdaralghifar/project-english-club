<?php
$b = $data->row_array();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
</head><br><br>
<div class="transparent-mt4" style="border: 0; padding: 40px; background-color: rgba(72,454,505, 0.2); text-align: Center;">
    <h4>Informasi</h4>
</div>

<body>
    <div class="container-fluid"><br><br><br>
        <div class="col-md-10 col-md-offset-2">
            <h2><?php echo $b['judul_informasi']; ?></h2>
            <hr /><br>
            <p><img src="<?php echo base_url() . 'upload/informasi/' . $b['foto']; ?>" width="300px" height="400px" style="float:left">
                <?php echo $b['isi_informasi']; ?></p>
        </div>

    </div>

    <script src="<?php echo base_url() . 'assets/jquery/jquery-2.2.3.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
</body>

</html>