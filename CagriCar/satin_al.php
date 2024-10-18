<?php
include 'baglan.php';

session_start();

if (!isset($_SESSION['Kullanici_Adi'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plaka = $_POST['plaka'];
    $adres = $_POST['adres'];
    $telefon = $_POST['telefon'];


    $kullanici_eposta = $_SESSION['Kullanici_EPosta'];

    try {
        $sql_fiyat = "SELECT Fiyat FROM araclar WHERE Plaka = :plaka";
        $sorgu_fiyat = $db->prepare($sql_fiyat);
        $sorgu_fiyat->execute(['plaka' => $plaka]);
        $arac_fiyat = $sorgu_fiyat->fetch(PDO::FETCH_ASSOC);

        $sql = "INSERT INTO fatura (Kullanici_EPosta, Plaka, Adres, Telefon_Numarasi, Fiyat) 
                VALUES (:eposta, :plaka, :adres, :telefon, :fiyat)";
        $sorgu = $db->prepare($sql);
        $sorgu->bindParam(':eposta', $kullanici_eposta, PDO::PARAM_STR);
        $sorgu->bindParam(':plaka', $plaka, PDO::PARAM_STR);
        $sorgu->bindParam(':adres', $adres, PDO::PARAM_STR);
        $sorgu->bindParam(':telefon', $telefon, PDO::PARAM_STR);
        $sorgu->bindParam(':fiyat', $arac_fiyat['Fiyat'], PDO::PARAM_STR);
        
        $sorgu->execute();

        $siparis_id = $db->lastInsertId();
        $success_message = "Siparişiniz başarıyla alındı. Sipariş numaranız: " . $siparis_id;

        unset($_POST);
    } catch (PDOException $e) {
        echo "Sipariş oluşturulurken bir hata oluştu: " . $e->getMessage();
    }
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Seyahat Yolculuk Firması">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CagriCar - Sipariş Onayı</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/ssaatinal.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .siparis-sonuc {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .siparis-sonuc h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<header>
    <div class="container-head">
        <div class="logo">
            <a href="mainmenu.php"><img src="resimler/logo.png"></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="mainmenu.php">ANA SAYFA</a></li>
                <li><a href="araclar.php">Araçlar</a></li>
                <li><a href="iletisim.php">İletişim - Hakkımızda</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a href="index.php">Çıkış Yap</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="container">
    <?php if (isset($success_message)) { ?>
        <div class="siparis-sonuc">
            <h2>Siparişiniz Başarıyla Alındı!</h2>
            <p><?php echo $success_message; ?></p>
            <p>Ana sayfaya dönmek için <a href="mainmenu.php">buraya tıklayın</a>.</p>
        </div>
    <?php } else { ?>
        <div class="siparis-sonuc">
            <h2>Bir Hata Oluştu!</h2>
            <p>Sipariş verilirken bir hata oluştu. Lütfen tekrar deneyin.</p>
            <p>Ana sayfaya dönmek için <a href="mainmenu.php">buraya tıklayın</a>.</p>
        </div>
    <?php } ?>
</div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
        <footer class="section-area">
            <div class="containerr">
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
