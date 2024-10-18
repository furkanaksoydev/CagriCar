<?php
include 'baglan.php';

session_start();

if (!isset($_SESSION['Kullanici_Adi'])) {
    header("Location: index.php");
    exit;
}

if (isset($_GET['Plaka'])) {
    $plaka = $_GET['Plaka'];

    $sql = "SELECT * FROM araclar WHERE Plaka = :plaka";
    $sorgu = $db->prepare($sql);
    $sorgu->execute(['plaka' => $plaka]);
    $arac = $sorgu->fetch(PDO::FETCH_ASSOC);

    if (!$arac) {
        echo "Araç bulunamadı.";
        exit;
    }
} else {
    echo "Geçersiz istek.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adres = $_POST['adres'];
    $telefon = $_POST['telefon'];
    $kart_no = $_POST['kart_no'];
    $kart_skt = $_POST['kart_skt'];
    $cvv = $_POST['cvv'];
    $siparis_gonderildi = true;
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Seyahat Yolculuk Firması">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CagriCar - Araç Önizlemesi</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/ooonizle.css">
</head>

<body>
<header>
    <div class="container-head">
        <div class="logo">
            <a href="mainmenu.php"><img src="resimler/logo2.png"></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="mainmenu.php">ANA SAYFA</a></li>
                <li><a href="araclar.php">Araçlar</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a href="index.php">Çıkış Yap</a></li>
            </ul>
        </div>
    </div>
</header>
    <br><br><br><br><br><br>

<div class="container">
    <div class="arac-detay">
        <h2>Araç Detayları</h2>
        <img src="aracresimleri/<?php echo $arac['AracResim']; ?>" style="width:600px;height:400px;">
        <table class="detay-table">
            <tr>
                <th>Plaka:</th>
                <td><?php echo $arac['Plaka']; ?></td>
            </tr>
            <tr>
                <th>Marka:</th>
                <td><?php echo $arac['Marka']; ?></td>
            </tr>
            <tr>
                <th>Model:</th>
                <td><?php echo $arac['Model']; ?></td>
            </tr>
            <tr>
                <th>Tip:</th>
                <td><?php echo $arac['Tip']; ?></td>
            </tr>
            <tr>
                <th>Yıl:</th>
                <td><?php echo $arac['Yil']; ?></td>
            </tr>
            <tr>
                <th>Renk:</th>
                <td><?php echo $arac['Renk']; ?></td>
            </tr>
            <tr>
                <th>Vites:</th>
                <td><?php echo $arac['Vites']; ?></td>
            </tr>
            <tr>
                <th>Yakıt:</th>
                <td><?php echo $arac['Yakit']; ?></td>
            </tr>
            <tr>
                <th>Fiyat:</th>
                <td><?php echo $arac['Fiyat']; ?> TL</td>
            </tr>
        </table>
    </div>

    <?php if (!isset($siparis_gonderildi)) { ?>
        <div class="siparis-form">
            <form action="satin_al.php" method="post">
                <input type="hidden" name="plaka" value="<?php echo $arac['Plaka']; ?>">
                <label for="adres">Adres</label>
                <input type="text" id="adres" name="adres" required>

                <label for="telefon">Telefon Numarası</label>
                <input type="tel" id="telefon" name="telefon" required>

                <label for="kart_no">Kredi Kartı Numarası</label>
                <input type="number" id="kart_no" name="kart_no" required>

                <label for="kart_skt">Son Kullanma Tarihi</label>
                <input type="month" id="kart_skt" name="kart_skt" required>

                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" required>
                
                <td name="fiyat"><?php echo $arac['Fiyat']; ?> TL</td> <br><br>

                <button type="submit">Siparişi Tamamla</button>
            </form>
        </div>
    <?php } else { ?>
        <div>
            <p>Siparişiniz başarıyla alındı!</p>
            <p>Sipariş detayları:</p>
            <ul>
                <li>Adres: <?php echo $adres; ?></li>
                <li>Telefon: <?php echo $telefon; ?></li>
                <li>Kredi Kartı: <?php echo $kart_no; ?></li>
                <li>Son Kullanma Tarihi: <?php echo $kart_skt; ?></li>
                <li>CVV: <?php echo $cvv; ?></li>
            </ul>
        </div>
    <?php } ?>
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
