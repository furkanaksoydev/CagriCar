<?php

include 'baglan.php';

session_start();

if(isset($_SESSION['Kullanici_Adi'])) {

$sql ="SELECT * FROM araclar";
$sorgu = $db->prepare($sql);
$sorgu->execute();

?>

<!doctype html>
<html lang"tr">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Sehayat Yolculuk Firması">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>CagriCar - Araçlar</title>
         
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/araraclar.css">
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
        
        <div class="container">
            <table class="arac-table">
                <thead>
                    <tr>
                        <th>Aracın Resmi</th>
                        <th>Plaka</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Tip</th>
                        <th>Yıl</th>
                        <th>Renk</th>
                        <th>Vites</th>
                        <th>Yakıt</th>
                        <th>Fiyat</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><img src="aracresimleri/<?php echo $satir['AracResim']; ?>" style="width:300px;height: 200px"></td>
                        <td><?=$satir['Plaka']?></td>
                        <td><?=$satir['Marka']?></td>
                        <td><?=$satir['Model']?></td>
                        <td><?=$satir['Tip']?></td>
                        <td><?=$satir['Yil']?></td>
                        <td><?=$satir['Renk']?></td>
                        <td><?=$satir['Vites']?></td>
                        <td><?=$satir['Yakit']?></td>
                        <td><?=$satir['Fiyat']?> TL</td>
                        <td>
                            <div class="btn-group">
                                <a href="onizle.php?Plaka=<?=$satir['Plaka']?>" class="btn btn-success">Araç Önizlemesi</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
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