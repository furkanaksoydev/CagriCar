<?php 

ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit']))
{
    $Kullanici_Adi = $_POST['kullanici_adi'];
    $Kullanici_EPosta = $_POST['kullanici_eposta'];
    $Kullanici_Sifre = $_POST['kullanici_sifre'];
    $Kullanici_Sifre_tekrar = $_POST['kullanici_sifre_tekrar'];
    
    if(!$Kullanici_Adi){
        echo "Lütfen Kullanıcı Adınızı girin.";
    }
    
    elseif(!$Kullanici_EPosta){
        echo "Lütfen E-Postanızı girin.";
    }
    
    elseif(!$Kullanici_Sifre || !$Kullanici_Sifre_tekrar){
        echo "Lütfen şifrenizi girin.";
    }
    
    elseif($Kullanici_Sifre != $Kullanici_Sifre_tekrar){
        echo "Lütfen girdiğiniz şifre ve şifre tekrarını birebir aynı karakterler olarak girin.";
    }
    
    else{
        $sorgu = $db->prepare('INSERT INTO kullanicilar SET Kullanici_Adi = ?, Kullanici_EPosta = ?, Kullanici_Sifre = ?');
        $ekle = $sorgu->execute([
            $Kullanici_Adi, $Kullanici_EPosta, $Kullanici_Sifre
        ]);
        if($ekle){
            echo "Kayıt başarıyla gerçekleştirildi, yönlendiriliyorsunuz !";
            header('Refresh:2; index.php');
        }
        else{
            echo "Bir hata oluştu, lütfen kayıt oluşturmayı tekrar deneyiniz !";
            header('Refresh:2; index.php');
        }
    }
    
}

if(isset($_POST['giris'])){
    $Kullanici_Adi = $_POST['adi'];
    $kullanici_Sifre = $_POST['sifre'];
    
    if(!$Kullanici_Adi){
        echo "Lütfen Kullanıcı Adınızı girin.";
    }
    
    elseif(!$kullanici_Sifre){
        echo "Lütfen şifrenizi girin";
    }
    
    else{
        $kullanici_sorgula = $db->prepare('SELECT * FROM kullanicilar WHERE Kullanici_Adi = ? && Kullanici_Sifre = ?');
        $kullanici_sorgula->execute([
            $Kullanici_Adi, $kullanici_Sifre
        ]);
        
        $say = $kullanici_sorgula->rowCount();
        
        if($say == 1){
            $_SESSION['Kullanici_Adi'] = $Kullanici_Adi;
            echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz !";
            header('Refresh:2; mainmenu.php');
        }
        
        else{
            echo "Kullanıcı adı veya şifreniz hatalı, lütfen tekrar giriş yapmayı deneyin !";
            header('Refresh:2; index.php');
        }
    }
}

?>