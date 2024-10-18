<?php

include 'baglan.php';

session_start();

if(isset($_SESSION['Kullanici_Adi'])) {

$sql ="SELECT * FROM anasayfafoto";
$sorgu = $db->prepare($sql);
$sorgu->execute();

?>

<!doctype html>
<html lang"tr">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>CagriCar - Ana Sayfa</title>
         
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/mmainmenu.css">
    </head>
    

        <header>
            <div class="container-head">
                <div class="logo">
                    <a href="mainmenu.php"><img src="resimler/logo2.png"></a>
                </div>
                <div class="menu">
                    <u1>
                        
                        <li><a href="mainmenu.php">ANA SAYFA</a></li>
                        <li><a href="araclar.php">Araçlar</a></li>
                        <li><a href="iletisim.php">İletişim</a></li>
                        <li><a href="hakkimizda.php">Hakkımızda</a></li>
                        <li><a href="index.php">Çıkış Yap</a></li>
                    
                    </u1>
                </div>
            </div>
        </header>
        <body>  
        <br><br><br><br><br><br>
        
        <div class="slogan">
            <h5>Honda, hayat onda...</h5>
        </div>
        
        <br><br><br><br><br><br>
        
        <div class="gallery">
    <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
        <img class="resimler" src="resimler/<?php echo $satir['Foto_Ad']; ?>" style="width:100%; height:auto;">
    <?php } ?>

    <button class="navigation left" onclick="showPreviousImage()">&#10094;</button>
    <button class="navigation right" onclick="showNextImage()">&#10095;</button>
</div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        <script>
    var resimler = document.querySelectorAll('.resimler');
    var index = 0;

    function showPreviousImage() {

        resimler[index].style.display = 'none';


        index = (index - 1 + resimler.length) % resimler.length;

        resimler[index].style.display = 'block';
    }

    function showNextImage() {
        resimler[index].style.display = 'none';

        index = (index + 1) % resimler.length;

        resimler[index].style.display = 'block';
    }
</script>
        
        <div class="aracini-sec">
            <img src="resimler/foto1.png" width="400px;" height="250px;">
            <div>
                <h1>Aracını Seç</h1>
                <p>Honda, BMW yada Mercedes… hangisine #bizayrılamayız diyeceğine ve paketine karar ver.</p>
            </div>
        </div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        <div class="siparis">
            <div>
                <h1>Siparişini Ver</h1>
                <p>Güvenle ön ödemeni yap. Aracını seçtiğin yetkili satıcı seni hemen arasın. Aklında olsun, aracını istediğin yetkili satıcıdan teslim alabilirsin. Unutma! seçtiğin yetkili satıcı seni aradığında, aracı teslim almak istediğin yetkili satıcıyı belirtmelisin.</p>
            </div>
            <img src="resimler/foto2.jpg" width="400px;" height="250px;">
        </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
        <footer class="section-area">
            <div class="container">
                <div class="col2">
                    <div class="footer-item">
                        <a href="mainmenu.php"><img src="resimler/logo3.png"></a>
                        <p>2 yıldır vermiş olduğumuz hizmetle sizin konforunuzu sağlamaya özen gösteriyoruz. Keyifli bir araç kiralama hizmeti için bizimle iletişimde kalınız.</p>
                    </div>
                </div>
                <div class="col2">
                    <div class="footer-item">
                        <u1 class="footer-linkleri">
                            <li><a href="mainmenu.php">ANA SAYFA</a></li>
                            <li><a href="araclar.php">Araçlar</a></li>
                            <li><a href="iletisim.php">İletişim</a></li>
                            <li><a href="hakkimizda.php">Hakkımızda</a></li>
                        </u1>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
</html>

<?php
    
}

?>