-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Şub 2020, 18:07:23
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `wheel_vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(11) NOT NULL,
  `protocol` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `host` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `port` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `from` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `to` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `email_settings`
--

INSERT INTO `email_settings` (`id`, `protocol`, `host`, `port`, `user`, `password`, `from`, `to`, `user_name`, `isActive`, `createdAt`) VALUES
(1, 'smtp', 'ssl://smtp.gmail.com', '465', 'senseref67@gmail.com', '1996.sen', 'senseref67@gmail.com', 'senseref67@gmail.com', 'Çiftlik Panel', 1, '2019-07-14 21:35:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slogan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `about_us` longtext COLLATE utf8_turkish_ci NOT NULL,
  `mission` longtext COLLATE utf8_turkish_ci NOT NULL,
  `vision` longtext COLLATE utf8_turkish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `phone_1` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `fax_1` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `slogan`, `about_us`, `mission`, `vision`, `address`, `logo`, `favicon`, `phone_1`, `fax_1`, `email`, `facebook`, `twitter`, `instagram`, `linkedin`, `createdAt`, `updateAt`) VALUES
(1, 'WHEEL', 'ÇEVİR KARAR VER', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                1996 Yılında Memleketim\'de doğdum. Klasik olacak; okul hayatım liseye kadar memleketimde geçti. Üniversiteyi kazanınca ver elini İstanbul. İstanbul Aydın Üniversitesini 3.04 puan ile bitirdim. Bilgisayar Öğretim Teknolojileri Eğitmeni olarak mezun oldum. Mezun olmadan önce bölümümüze ait 11. BÖTE Kurultayına eğitsel oyun kategorisine katıldım ve burada juri özel ödülünü aldım. Daha sonralarda Konya\'da bulunan CODER Akademiden Programlama Üzerine Sertifikalar Aldım. Mezun olduktan sonra ise Engeli bireylerimizi anlamak ve bunlar için hayatı kolaylaştırmak adına MEB\'in yaptığı eğitimlere katılarak Özel Eğitim ve İşaret Dili üzerine sertifika aldım.Kişisel Özelliklerime değinecek olursak... araştırmayı seven birisiyimdir ve bölümüme veya diğer adıyla teknolojiye aşık bir insanımdır. Kendim ile barışık artı insanlara yardım etmeyi severim desem de her zaman bu özelliğimi kullanmam... :D şaka şaka yardım etmeyi sevmesem neden bu sityeyi kurayım... Benim hakkımda bu kadar yeterli.. Beni daha fazla merak edenler Sosyal Medya üzerinden takip ederler. Makalelerde Görüşmek Üzere...\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    																																						', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Günümüzde gelişen bir teknolojiyi ve günlük hayatta takıldığımız basit sorunların çözümlerini araştırmak ve sizlere aktarmak amacıyla faaliyete geçmiştir.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  																																						', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Yeni teknolojileri Türkiye çevresine yaymak ve Bilişim Teknolojileri alanında öğrencilerime yeni bilgileri kişisel web sitem üzerinden aktarmayı amaçlıyorum.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            																																					', '							Kdz. Ereğli							', 'wheel.png', 'wheel.png', '0(555)555 55 55', '', 'senseref67@gmail.com', 'senseref67', 'senseref67', 'senseref67', 'senseref67', '2019-07-20 01:09:52', '2020-01-06 16:55:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_role_id` int(2) DEFAULT '2',
  `isActive` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `user_role_id`, `isActive`, `createdAt`) VALUES
(1, 'admin', 'Şeref ŞEN', 'senseref67@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, '2019-07-04 22:45:01'),
(2, 'demo', 'Demo Codetify', 'demo@codetify.net', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2019-10-10 23:12:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `permissions` text COLLATE utf8_turkish_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user_roles`
--

INSERT INTO `user_roles` (`id`, `title`, `permissions`, `isActive`, `createdAt`) VALUES
(0, 'Admin', '{\"emailsettings\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"userop\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"users\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"user_roles\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"},\"wheel\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"}}', 1, '2019-08-04 18:20:20'),
(1, 'Demo', '{\"users\":{\"read\":\"on\",\"write\":\"on\",\"update\":\"on\",\"delete\":\"on\"}}', 1, '2019-10-10 23:08:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `wheel`
--

CREATE TABLE `wheel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `color` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `wheel`
--

INSERT INTO `wheel` (`id`, `title`, `color`, `isActive`, `createdAt`) VALUES
(13, 'Yazılım', '#8f3596', 1, '2020-01-13 17:36:40'),
(14, 'Robotik', '#5482db', 1, '2020-01-13 17:36:53'),
(15, 'Eğitim', '#439635', 1, '2020-01-13 17:37:34'),
(18, 'Öğretmen', '#e81e43', 1, '2020-01-13 17:44:55'),
(19, 'Arduino', '#bd17b6', 1, '2020-01-16 18:46:31');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `wheel`
--
ALTER TABLE `wheel`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `wheel`
--
ALTER TABLE `wheel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
