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
        
        <title>CagriCar - Hakkımızda</title>
         
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/hahakkimizda.css">
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
        
        <div class="aciklama">
            
            <br><br>    
            
            <h5>Hakkımızda</h5>
            
            <br><br>
            
            <p>Hoş Geldiniz! En Güvenilir Araçlar Burada.</p><br>

            <p>CagriCar, araç alımında güvenilir çözümler sunan lider platformlardan biridir. Geniş araç yelpazemizde, her bütçeye uygun seçenekler bulabilirsiniz. Sıfır kilometre araçlarımızdan; her biri titizlikle incelenmiş, güvenilir markaların en iyi modelleri sizleri bekliyor.</p><br>

            <p>Neden CagriCar Tercih Edilmeli?</p><br>

            <p>Güvenilirlik: Tüm araçlarımız uzman ekiplerimiz tarafından detaylı bir şekilde incelenmiş ve güvenlik standartlarına uygun olarak sunulmaktadır.
            Çeşitlilik: Her zevke ve ihtiyaca uygun geniş bir araç portföyü sunuyoruz. Yeni ve sizin için en uygun seçeneği burada bulabilirsiniz.
            Müşteri Odaklı Yaklaşım: Profesyonel müşteri destek ekibimiz, satın alma sürecinizde size her adımda destek olmaktadır.</p><br>
            
            <p>Bizimle İletişime Geçin</p><br>

            <p>CagriCar, araç alım satımında güvenilirliği ve kaliteyi bir araya getiren bir adrestir. Siz de hemen bugün, hayalinizdeki araca kolayca sahip olabilirsiniz. Detaylı bilgi için bize ulaşın veya web sitemizi ziyaret edin. Unutmayın, en iyi araçlar en uygun fiyatlarla burada!</p>
            
            <br><br><br><br>
            
            <h5>Adres</h5>
            
            <br><br>
            
            <p>Eskicami - Ortacami</p>
            <p>Hükümet Cd. NO:11</p>
            <p>Süleymanpaşa/Tekirdağ - 59100</p>
        </div>
        
        <br><br><br><br><br>
    
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