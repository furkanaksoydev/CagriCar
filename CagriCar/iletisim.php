<?php

require 'baglan.php';

session_start();

if(isset($_SESSION['Kullanici_Adi'])) {

?>

<!doctype html>
<html lang"tr">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Sehayat Yolculuk Firması">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>CagriCar - İletişim</title>
         
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/iilletisim.css">
    </head>
    
    <body>
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
        <section class="iletisim-kismi">
                <div class="iletisim">
                       <div class="konteynir">
                            <div class="col3">
                                <div class="iletisim-konteynir">
                                    <img src="resimler/gmail.png" class="fotograf-over">
                                    <div class="iletisim-overlay">
                                        <div class="iletisim-link">
                                            <a href="mailto:cagri1676@gmail.com">G-Mail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col3">
                                <div class="iletisim-konteynir">
                                    <img src="resimler/insta.jpg" class="fotograf-over">
                                    <div class="iletisim-overlay">
                                        <div class="iletisim-link">
                                            <a href="https://www.instagram.com/cagrriay/">Instagram</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col3">
                                <div class="iletisim-konteynir">
                                    <img src="resimler/whatsapp.png" class="fotograf-over">
                                    <div class="iletisim-overlay">
                                        <div class="iletisim-link">
                                            <a href="https://wa.me/905431597076">WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
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