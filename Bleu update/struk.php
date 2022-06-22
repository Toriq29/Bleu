<!---Thoriq Hidayansyah_2172019
    -Yovie Adhisti_2172005
    -Fransisca Elizabeth _2172007-->
<?php
$submit = FILTER_INPUT(INPUT_POST,'submit');
$nama = FILTER_INPUT(INPUT_POST,'nama');
$harga = (int)FILTER_INPUT(INPUT_POST,'harga');
$jumlah = (int)FILTER_INPUT(INPUT_POST,'jumlah');
if(isset($submit)){
    $total = $jumlah * $harga;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Belanja</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="body">
        <div class="struck">
                    <p class="center"><img src="src/logo.jpg" width="20%" height="10%"></p>
            <div class="struck2">
                    <hr>
                    <hr>
                    <p><h1>Order :</h1></p>
                    <br>
                    <p><h1>Nama Produk   : <?php echo $nama ?></h1></p>
                    <p><h1>Harga Produk  : <?php echo $harga . 'k'  ?></h1></p>
                    <p><h1>Jumlah Beli   : <?php echo $jumlah ?></h1></p>
                    <br>
                    <hr>
                    <hr>
                    <br>
                    <p><h1>Total Belanja : <?php echo $total . 'k' ?></h1></p>
                    <br>
                    <hr>
                    <hr>
                    <br>
                    <p class="center"><h1>TERIMA KASIH :)</h1></p>
                    <br>
                    <hr>
                    <hr>
            </div>           
        </div>
    </body>
</html> 
<?php } ?>