-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Eki 2024, 18:29:10
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cagricar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfafoto`
--

CREATE TABLE `anasayfafoto` (
  `Foto_ID` int(11) NOT NULL,
  `Foto_Ad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `anasayfafoto`
--

INSERT INTO `anasayfafoto` (`Foto_ID`, `Foto_Ad`) VALUES
(2, 'arac2.jpg'),
(5, 'arac4.jpg'),
(6, 'arac5.jpg'),
(7, 'arac6.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `Plaka` varchar(15) NOT NULL,
  `Marka` varchar(16) NOT NULL,
  `Model` varchar(16) NOT NULL,
  `Tip` varchar(16) NOT NULL,
  `Yil` varchar(4) NOT NULL,
  `Renk` varchar(16) NOT NULL,
  `Vites` varchar(16) NOT NULL,
  `Yakit` varchar(32) NOT NULL,
  `AracResim` text NOT NULL,
  `Fiyat` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`Plaka`, `Marka`, `Model`, `Tip`, `Yil`, `Renk`, `Vites`, `Yakit`, `AracResim`, `Fiyat`) VALUES
('01 FCE 5316', 'AUDI', 'RS6 ', 'Station Wagoon', '2024', 'Metalik Antrasit', 'Otomatik', 'Dizel', 'audi.jpg', 3500000.00),
('16 AY 1963', 'Honda', 'Civic', 'Coupe', '2011', 'Sedefli Beyaz', 'Manuel', 'Benzin', 's2000.jpg', 1245000.00),
('16 BRS 9732', 'TOFAŞ', 'Doğan SLX', 'Sedan', '2003', 'Midnight Purple', 'Manuel ', 'Benzin & LPG & NOS', 'doganslx.jpg', 7984571.00),
('17 TKM 024', 'Mazda', 'RX 7', 'Coupe', '2005', 'Turuncu Siyah', 'Manuel', 'Benzin', 'rx7.jpg', 17000000.00),
('34 CAG 1234', 'Honda', 'Civic', 'Sedan', '2020', 'Beyaz', 'Yarı-Otomatik', 'Benzin & LPG', 'civic.jpg', 1100000.00),
('34 CSD 1234', 'Honda', 'Civic', 'Sedan', '2023', 'Beyaz', 'Yarı Otomatik', 'Benzin', 'araba.jpg', 1333000.00),
('34 EMR 066', 'Peugeot', 'Partner', 'Panelvan', '2015', 'Metalik Gri', 'Manuel', 'Dizel', 'partner.jpg', 666000.00),
('34 FUR 2252', 'Mercedes', 'E-300', 'Sedan', '2023', 'Siyah', 'Otomatik', 'Dizel', 'e300.jpg', 4100000.00),
('34 PLT 034', 'BMW', 'E 60', 'Sedan', '2006', 'Siyah', 'Manuel', 'Dizel', 'e60.jpg', 1115000.00),
('39 EFE 4380', 'BMW', '320i', 'Sedan', '2014', 'Gri', 'Manuel', 'Benzin', '320i.jpg', 2700000.00),
('53 KDL 053', 'BMW', 'M5 CS', 'Sedan', '2024', 'Koyu Yeşil', 'Otomatik', 'Benzin', 'm5cs.jpg', 25000053.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fatura`
--

CREATE TABLE `fatura` (
  `Fatura_ID` int(11) NOT NULL,
  `Kullanici_EPosta` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `Plaka` varchar(15) NOT NULL,
  `Adres` text NOT NULL,
  `Telefon_Numarasi` varchar(11) NOT NULL,
  `Fiyat` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `fatura`
--

INSERT INTO `fatura` (`Fatura_ID`, `Kullanici_EPosta`, `Plaka`, `Adres`, `Telefon_Numarasi`, `Fiyat`) VALUES
(12, 'furkankdzc@gmail.com', '34 FUR 2252', 'Öztoprak Sokak - No : 38 - Daire : 10', '05060678915', 3500000.00),
(13, 'furkankdzc@gmail.com', '34 FUR 2252', 'Öztoprak Sokak - No : 38 - Daire : 10', '05060678915', 3500000.00),
(14, 'furkankdzc@gmail.com', '34 CAG 1234', 'Öztoprak Sokak - No : 38 - Daire : 10', '05060678915', 1000000.00),
(15, 'furkankdzc@gmail.com', '01 FCE 5316', 'filandozlu köyü', '05337013662', 3500000.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `Kullanici_ID` int(11) NOT NULL,
  `Kullanici_Adi` varchar(16) NOT NULL,
  `Kullanici_EPosta` varchar(30) NOT NULL,
  `Kullanici_Sifre` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`Kullanici_ID`, `Kullanici_Adi`, `Kullanici_EPosta`, `Kullanici_Sifre`) VALUES
(1, 'Tuğrul', 'tuğrul@gmail.com', 'tuğrul123'),
(2, 'Furkan', 'furkankdzc@gmail.com', 'furkan123'),
(3, 'soner', 'soner@gmail.com', 'soner123'),
(4, 'kenanbaysal', 'kenanbaysal@gmail.com', 'kenan123'),
(5, 'Çağrı', 'cagri1676@gmail.com', 'cagri123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfafoto`
--
ALTER TABLE `anasayfafoto`
  ADD PRIMARY KEY (`Foto_ID`);

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`Plaka`),
  ADD KEY `Fiyat` (`Fiyat`);

--
-- Tablo için indeksler `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`Fatura_ID`),
  ADD KEY `Plaka` (`Plaka`),
  ADD KEY `Kullanici_EPosta` (`Kullanici_EPosta`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`Kullanici_ID`),
  ADD UNIQUE KEY `Kullanici_EPosta` (`Kullanici_EPosta`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfafoto`
--
ALTER TABLE `anasayfafoto`
  MODIFY `Foto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `fatura`
--
ALTER TABLE `fatura`
  MODIFY `Fatura_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `Kullanici_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `fatura`
--
ALTER TABLE `fatura`
  ADD CONSTRAINT `fatura_ibfk_2` FOREIGN KEY (`Plaka`) REFERENCES `araclar` (`Plaka`),
  ADD CONSTRAINT `fatura_ibfk_3` FOREIGN KEY (`Kullanici_EPosta`) REFERENCES `kullanicilar` (`Kullanici_EPosta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
