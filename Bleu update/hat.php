<!---Thoriq Hidayansyah_2172019
    -Yovie Adhisti_2172005
    -Fransisca Elizabeth _2172007-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="center">
        <?php
            $active = "product";
            include_once("proses.php");
        ?>
    <br>
    <table class="table2">
        <tr>
            <td>
                <img src="src/hatt.png">
            </td>

            <td class="left">
                <h1 class="font">/Hat</h1>
                <h1><p class="merah">100k</p></h1>
                <br>
                <h3>The timeless hat complements classic looks and bold fashion-forward  <br>
                    styles in equal measure. A single ‘Boss Logo’ takes the spotlight on the<br>
                    front, adding a bold touch. The matching trim, button and adjustable strap <br>
                    add rich signature accents to this chic piece. <br><br>
                    <div class="divkanan"><h3 class="top"><li>61 Ulasan</li></h3></div>
                    <div class="divkanan"><h3><li>149 Terjual</li></h3></div>
                    <br>
                </h3><br></p><br>
                <form action="struk.php" method="POST" left="60%" target="blank">
		            <input  class="button1" type="text" name="jumlah" id="angka" value="0">
                    <input type="hidden" name="nama" value="Hat">
                    <input type="hidden" name="harga" value="100k">
                    <input class="button" type="submit" name="submit" value="ORDER">
	            </form>
                    <button class="button" onclick="kurang()">-</button>		
                    <button class="button" onclick="tambah()">+</button>
                <script type="text/javascript">
                    var count=0;
                    function kurang(){
                        if(count>0){
                            count=count-1
                            document.getElementById("angka").value=count;
                        }
                    }
                    function tambah(){
                        count=count+1
                        document.getElementById("angka").value=count;
                    
                    }
                </script>
            </td>
        </tr>
    </table>

</body>
</html>