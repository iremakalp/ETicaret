-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2021, 00:27:09
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaretdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `ust_id` int(11) DEFAULT NULL,
  `kategori_adi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `ust_id`, `kategori_adi`, `slug`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(1, NULL, 'Aksesuar', 'aksesuar', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(2, 1, 'Kulaklık', 'kulaklik', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(3, 1, 'Mouse', 'mouse', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(4, 1, 'Telefon Kılıfı', 'telefon-kilifi', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(5, 1, 'Webcam', 'webcam', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(6, NULL, 'Laptop', 'laptop', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(7, NULL, 'Akıllı Telefon', 'akilli-telefon', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(8, NULL, 'Fotoğraf Makinesi ve Kamera', 'kamera', '2021-05-08 23:30:25', '2021-05-08 23:30:25', NULL),
(9, NULL, 'TV,Ses ve Görüntü', 'tv-ses-goruntu', '2021-05-14 06:32:31', '2021-05-14 06:33:32', '2021-05-14 06:33:32'),
(10, 1, 'Ses Sistemleri', 'ses-sistemleri', '2021-05-14 07:41:42', '2021-05-14 11:13:17', NULL),
(11, NULL, 'Ses Sistemleri', 'ses-sistemleri', '2021-05-16 18:50:59', '2021-05-16 18:50:59', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori_urun`
--

CREATE TABLE `kategori_urun` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategori_urun`
--

INSERT INTO `kategori_urun` (`id`, `kategori_id`, `urun_id`) VALUES
(33, 1, 1),
(34, 1, 2),
(35, 1, 3),
(36, 1, 7),
(37, 1, 8),
(38, 1, 9),
(39, 1, 13),
(40, 1, 14),
(41, 1, 15),
(42, 1, 16),
(43, 1, 17),
(44, 1, 18),
(47, 2, 3),
(48, 3, 16),
(49, 3, 17),
(50, 3, 18),
(51, 4, 7),
(52, 4, 8),
(53, 4, 9),
(54, 5, 13),
(55, 5, 14),
(56, 5, 15),
(57, 6, 10),
(58, 6, 11),
(59, 6, 12),
(60, 7, 4),
(61, 7, 5),
(62, 7, 6),
(63, 8, 19),
(64, 8, 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(10) UNSIGNED NOT NULL,
  `adsoyad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivasyon_anahtari` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_mi` tinyint(1) NOT NULL DEFAULT 0,
  `yonetici_mi` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adsoyad`, `email`, `sifre`, `aktivasyon_anahtari`, `aktif_mi`, `yonetici_mi`, `remember_token`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(1, 'İrem Akalp ', 'iremklp@gmail.com', '$2y$10$ZaJuu4BLDbbmgTtnYdg9Ye54xm1hkPujIGEkIQhZf97197WF8McGu', NULL, 1, 1, 'hMapvRL60CCdauI0HtLS9d6wBFDlK3sy15uLpAVSTlFZZdrQ8AlDYQX40h5W', '2021-05-13 15:35:02', '2021-05-15 14:30:06', NULL),
(2, 'Göktürk Özdoğan', 'gokturk@gmail.com', '$2y$10$L4BCBhQR75Iyo5xCuN3Qa.Ey/E6LIW3CLr7BB3tBghFzRA9j7zw22', NULL, 1, 0, '62BegE847mbLCoe4lbeKJkVwUTXfhBmUNZs1fC7Txu2raIWvfuc0CfVJ9kNI', '2021-05-13 15:35:02', '2021-05-14 17:00:59', NULL),
(3, 'Sinem Karadaş', 'sinem@example.net', '$2y$10$sY6cz6ByAowSQFst/TnDvel2EO6QZE2g15fkoQsgwEecFv2LwtvHy', NULL, 1, 0, 'gUMSV7TbSSmGkWdkB4APKS666ygQzz2LAmIkhICVxLFWzDV1F3KfQ7dxZLKo', '2021-05-13 15:35:02', '2021-05-14 20:55:10', NULL),
(4, 'Şahnur Günday', 'sahnur@example.org', '$2y$10$5UkG0ANti9iJUL8TTdFkVOd5E10GBq0YTF08sZcWXueLilqOg78vq', NULL, 1, 0, 'AObJkAVyQ0BoH9rokOQHnng60UIpzWYzg8Q5K4ZJgyTWiTUcc4tpZBE9B07G', '2021-05-13 15:35:02', '2021-05-14 20:57:00', NULL),
(5, 'Yiğit Gürmen', 'yigitg@example.com', '$2y$10$gLDSP5arivbqnG2XWYNyVuTe1.mOFUQuFIu0fygKlZvpDjmx/KLra', NULL, 1, 0, NULL, '2021-05-13 15:35:02', '2021-05-13 18:51:47', NULL),
(6, 'Emirhan Karadaş', 'emir@example.com', '$2y$10$4CuZUyAUSrI875zDa3Eb1uRozZEz4DvTOKP5t/9neSseikdSn2Whi', NULL, 1, 0, NULL, '2021-05-13 15:35:03', '2021-05-13 18:51:47', NULL),
(7, 'Ebru Nebioğlu', 'ebru12@hotmail.com', '$2y$10$GEo/XYRz57rFjXcOvhF80eWe8SxhqLOnjRvelFrRPETjqhs0JM3rm', NULL, 1, 0, NULL, '2021-05-13 15:35:03', '2021-05-13 18:51:47', NULL),
(8, 'Savaş Gök', 'savas@gmail.com', '$2y$10$qW6Ue87ssRfOh1HdoJX/Le8s/9CMBTK6IR6ZouMeSOGwzqEKheXzq', 'fbfd6mhVhQeWtWUKuUm0C5yVORg0zDpfFrAysTVQj6RDsgTZ7dmm8mCfpW2y', 1, 0, 'T1QLCQmJyZdzdQZB10IET4djC9Eq00Bj5FJjgf1y8bUMrcjWzijq1p0C3ocb', '2021-05-13 15:54:15', '2021-05-16 21:27:12', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_detay`
--

CREATE TABLE `kullanici_detay` (
  `id` int(10) UNSIGNED NOT NULL,
  `kullanici_id` int(10) UNSIGNED NOT NULL,
  `adres` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici_detay`
--

INSERT INTO `kullanici_detay` (`id`, `kullanici_id`, `adres`, `telefon`) VALUES
(1, 1, 'Kocaeli', '(312) 444 55 66'),
(2, 2, 'Ferid Durağı 81\n22910 Amasya', '+7966448930875'),
(3, 3, 'Polat Caddesi 758\n94181 Tunceli', '+9634624254552'),
(4, 4, 'Fahri Sokak 688\n87307 Çankırı', '+5249878253488'),
(5, 5, 'Koray Durağı 08\n66327 Bingöl', '+9831709439860'),
(6, 6, 'Cem İş Hanı 7\n31072 Bartın', '+3170719643103'),
(7, 7, 'Numanoğlu Kavşağı 67\n88658 Burdur', '+4790009251203'),
(8, 8, 'Muğla', '05050221907');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_05_04_205545_create_kategori_table', 1),
(2, '2021_05_06_224621_create_urun_table', 1),
(3, '2021_05_08_233059_create_kategori_urun_table', 2),
(4, '2021_05_09_124805_create_urun_detay_table', 3),
(5, '2021_05_09_161506_create_kullanici_table', 4),
(6, '2021_05_09_210023_create_sepet_table', 5),
(7, '2021_05_09_210442_create_sepet_urun_table', 6),
(8, '2021_05_09_210623_create_sepet_urun_table', 7),
(9, '2021_05_10_201028_create_siparis_table', 8),
(10, '2021_05_10_201751_create_kullanici_detay_table', 9),
(11, '2021_05_13_230648_create_urun_yorum_table', 10),
(12, '2021_05_13_233049_create_urun_yorum_table', 11),
(13, '2021_05_13_234216_create_urun_yorum_table', 12),
(14, '2021_05_16_104556_create_yorum_table', 13),
(15, '2021_05_16_105200_create_urun_yorum_table', 14),
(16, '2021_05_16_111938_create_urun_yorum_table', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(10) UNSIGNED NOT NULL,
  `kullanici_id` int(10) UNSIGNED NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `kullanici_id`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(18, 8, '2021-05-14 13:59:37', '2021-05-14 13:59:37', NULL),
(19, 2, '2021-05-14 14:00:42', '2021-05-14 14:00:42', NULL),
(20, 8, '2021-05-14 17:38:26', '2021-05-14 17:38:26', NULL),
(21, 8, '2021-05-14 17:39:16', '2021-05-14 17:39:16', NULL),
(22, 3, '2021-05-14 17:53:32', '2021-05-14 17:53:32', NULL),
(23, 4, '2021-05-14 17:55:44', '2021-05-14 17:55:44', NULL),
(24, 8, '2021-05-15 08:19:17', '2021-05-15 08:19:17', NULL),
(25, 8, '2021-05-15 11:55:33', '2021-05-15 11:55:33', NULL),
(26, 8, '2021-05-15 12:56:40', '2021-05-15 12:56:40', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet_urun`
--

CREATE TABLE `sepet_urun` (
  `id` int(10) UNSIGNED NOT NULL,
  `sepet_id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) UNSIGNED NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyati` decimal(6,3) NOT NULL,
  `durum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sepet_urun`
--

INSERT INTO `sepet_urun` (`id`, `sepet_id`, `urun_id`, `adet`, `fiyati`, `durum`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(35, 18, 2, 1, '327.000', 'Beklemede', '2021-05-14 13:59:37', '2021-05-14 13:59:37', NULL),
(37, 18, 5, 1, '4.999', 'Beklemede', '2021-05-14 13:59:57', '2021-05-14 13:59:57', NULL),
(38, 19, 3, 1, '1.299', 'Beklemede', '2021-05-14 14:00:42', '2021-05-14 14:00:42', NULL),
(39, 19, 10, 1, '11.000', 'Beklemede', '2021-05-14 14:00:48', '2021-05-14 14:00:48', NULL),
(40, 20, 2, 3, '327.000', 'Beklemede', '2021-05-14 17:38:26', '2021-05-14 17:38:30', NULL),
(41, 21, 7, 2, '377.000', 'Beklemede', '2021-05-14 17:39:16', '2021-05-14 17:39:19', NULL),
(42, 22, 3, 1, '1.299', 'Beklemede', '2021-05-14 17:53:32', '2021-05-14 17:53:32', NULL),
(43, 22, 19, 1, '1.999', 'Beklemede', '2021-05-14 17:53:37', '2021-05-14 17:53:37', NULL),
(44, 23, 7, 1, '377.000', 'Beklemede', '2021-05-14 17:55:44', '2021-05-14 17:55:44', NULL),
(45, 24, 1, 1, '999.000', 'Beklemede', '2021-05-15 08:19:17', '2021-05-15 08:19:17', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(10) UNSIGNED NOT NULL,
  `sepet_id` int(10) UNSIGNED NOT NULL,
  `siparis_tutari` decimal(10,4) NOT NULL,
  `durum` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adsoyad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banka` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taksit_sayisi` int(11) DEFAULT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `sepet_id`, `siparis_tutari`, `durum`, `adsoyad`, `adres`, `telefon`, `banka`, `taksit_sayisi`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(9, 18, '332.0000', 'Sipariş tamamlandı', 'Savaş Gök', 'Muğla', '(050) 502-51-90', 'Garanti', 1, '2021-04-14 14:00:07', '2021-05-14 20:56:40', NULL),
(10, 19, '12.3000', 'Siparişiniz alındı', 'Göktürk Özdoğan', 'Ferid Durağı 8122910 Amasya', '(796) 644-89-30', 'Garanti', 1, '2021-01-05 14:00:56', '2021-05-14 20:54:54', NULL),
(11, 20, '981.0000', 'Siparişiniz alındı', 'Savaş Gök', 'Muğla', '(050) 502-51-90', 'Garanti', 1, '2021-03-09 17:38:37', '2021-05-14 20:54:39', NULL),
(12, 21, '754.0000', 'Siparişiniz alındı', 'Savaş Gök', 'Muğla', '(050) 502-51-90', 'Garanti', 1, '2021-05-14 17:39:25', '2021-05-14 17:39:25', NULL),
(13, 22, '3.3000', 'Siparişiniz alındı', 'Sinem Karadaş', 'Polat Caddesi 75894181 Tunceli', '(963) 462-42-54', 'Garanti', 1, '2021-02-12 17:53:55', '2021-05-14 20:54:26', NULL),
(14, 23, '377.0000', 'Siparişiniz alındı', 'Şahnur Günday', 'Fahri Sokak 68887307 Çankırı', '(524) 987-82-53', 'Garanti', 1, '2021-03-09 17:55:55', '2021-05-14 20:56:19', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_adi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyati` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `slug`, `urun_adi`, `aciklama`, `fiyati`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(1, 'huawei-freebuds-3', 'Huawei Freebuds 3', 'Huawei Freebuds 3', '999.00', '2021-05-13 20:35:37', '2021-05-14 12:12:42', NULL),
(2, 'jbl-t500bt-kulaklik', 'Jbl T500BT Kulaklık', 'Jbl T500BT Kulaklık', '327.00', '2021-05-13 20:35:37', '2021-05-14 13:36:59', NULL),
(3, 'jblrefect-flow-kulaklik', 'JBL Reflect Flow', 'True Wireless Kulaklık, Siyah', '1.299', '2021-05-13 20:35:37', '2021-05-14 09:35:28', NULL),
(4, 'huawei-p40-lite-telefon', 'Huawei P40 Lite ', '28 GB Pembe Akıllı Telefon', '3.499', '2021-05-13 20:35:37', '2021-05-13 20:35:37', NULL),
(5, 'samsung-galaxy-note10-lite-glow', 'Samsung Galaxy Note10 Lite Glow', 'Akıllı Telefon', '4.999', '2021-05-13 20:35:37', '2021-05-14 13:36:59', NULL),
(6, 'xiaomi-redmi-note-8', 'Xiaomi Redmi Note 8', '4GB/128GB Siyah Akıllı Telefon', '3.100', '2021-05-13 20:35:37', '2021-05-14 13:36:59', NULL),
(7, 'apple-mx0h2zma', 'Apple MX0H2ZM/A', 'iPhone 11 Pro Max Şeffaf Kılıf', '377.00', '2021-05-13 20:35:38', '2021-05-14 13:36:59', NULL),
(8, 'huawei-y6-kilif', 'Huawei Y6', '2019 Şeffaf Telefon Kılıfı', '49.90', '2021-05-13 20:35:38', '2021-05-13 20:35:38', NULL),
(9, 'apple-11-kilif', 'APPLE MWYY2ZM/A', 'iPhone 11 Pro Max Silikon Kılıf - Kum Pembesih', '377.00', '2021-05-13 20:35:38', '2021-05-13 20:35:38', NULL),
(10, 'lenovo-yoga-c740-81tc000vtx', 'Lenovo Yoga C740 81TC000VTX', 'Intel i7-10510U', '11.000', '2021-05-13 20:35:38', '2021-05-14 07:47:21', NULL),
(11, 'apple-macPro-laptop', 'Apple 13-inch MacBook Pro', '2.0GHz quad-core 10th-generation Intel Core i5 processor, 512GB - Silver MWP72TU/A  ', '15.999', '2021-05-13 20:35:38', '2021-05-13 20:35:38', NULL),
(12, 'asus-gamebookFX-laptop', 'Asus Gamebook FX506LU-HN053T', 'Intel i5-10300H 8GB Ram 1TB ve 256GB SSD GTX1660Ti 6GB 15.6\" FHD W10 Gaming Notebook', '10.099', '2021-05-13 20:35:38', '2021-05-13 23:37:08', NULL),
(13, 'logitechc270-webcam', 'Logitech C270 ', 'HD Webcam', '329.00', '2021-05-13 20:35:38', '2021-05-13 20:35:38', NULL),
(14, 'logitechc310-webcam', 'Logitech C310', 'Siyah HD Webcam', '379.00', '2021-05-13 20:35:38', '2021-05-13 20:35:38', NULL),
(15, 'logitech-brio-webcam', 'Logitech Brio', '4K Yayıncı Webcam -Siyah', '2.499', '2021-05-13 20:35:39', '2021-05-13 20:35:39', NULL),
(16, 'logitechm171-mouse', 'Logitech M171', 'Kablosuz Mouse (Siyah)', '94.90', '2021-05-13 20:35:39', '2021-05-13 20:35:39', NULL),
(17, 'hpv0l7-mouse', 'HP V0L79AA', 'Kablosuz Mouse (Siyah', '159.90', '2021-05-13 20:35:39', '2021-05-13 23:37:46', NULL),
(18, 'logitechm105-mouse', 'Logitech M105', 'Kablolu Mouse (Mavi)', '69.00', '2021-05-13 20:35:39', '2021-05-13 20:35:39', NULL),
(19, 'canon-legriahf-kamera', 'Canon Legria HF R806', 'Siyah Video Kamera', '1.999', '2021-05-13 20:35:39', '2021-05-13 20:35:39', NULL),
(20, 'sony-a60dijital-kamera', 'Sony A6000 16-50 mm', ' Dijital Fotoğraf Makinesi', '5.999', '2021-05-13 20:35:39', '2021-05-13 20:35:39', NULL),
(21, 'canon-eos-kamera', 'Canon EOS 250D 18-55MM DC III ', 'Siyah Dijital Fotoğraf Makinesi', '5.299', '2021-05-13 20:35:39', '2021-05-13 20:35:39', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_detay`
--

CREATE TABLE `urun_detay` (
  `id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) UNSIGNED NOT NULL,
  `goster_one_cikan` tinyint(1) NOT NULL DEFAULT 0,
  `goster_cok_satan` tinyint(1) NOT NULL DEFAULT 0,
  `urun_resmi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urun_detay`
--

INSERT INTO `urun_detay` (`id`, `urun_id`, `goster_one_cikan`, `goster_cok_satan`, `urun_resmi`) VALUES
(1, 1, 1, 0, '/img/1-1621005199.png'),
(2, 2, 1, 1, '/img/kulaklık3.jpg'),
(3, 3, 1, 0, '/img/kulaklık2.png'),
(4, 4, 0, 0, '/img/telefon2.jpg'),
(5, 5, 0, 1, '/img/telefon3.jpg'),
(6, 6, 0, 0, '/img/telefon4.jpg'),
(7, 7, 0, 0, '/img/kılıf1.jpg'),
(8, 8, 1, 0, '/img/kılıf2.png'),
(9, 9, 1, 0, '/img/kılıf3.jpg'),
(10, 10, 0, 0, '/img/laptop2.jpg'),
(11, 11, 1, 1, '/img/laptop4.jpg'),
(12, 12, 1, 1, '/img/laptop8.png'),
(13, 13, 0, 1, '/img/webcam1.jpg'),
(14, 14, 0, 1, '/img/webcam2.jpg'),
(15, 15, 1, 0, '/img/webcam3.jpg'),
(16, 16, 0, 1, '/img/mouse1.jpg'),
(17, 17, 0, 0, '/img/mouse2.jpg'),
(18, 18, 0, 1, '/img/mouse3.jpg'),
(19, 19, 1, 0, '/img/kamera1.jpg'),
(20, 20, 1, 0, '/img/kamera2.jpg'),
(21, 21, 1, 0, '/img/kamera3.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_yorum`
--

CREATE TABLE `urun_yorum` (
  `id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) UNSIGNED NOT NULL,
  `adsoyad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yorum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urun_yorum`
--

INSERT INTO `urun_yorum` (`id`, `urun_id`, `adsoyad`, `email`, `yorum`, `olusturma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(18, 2, 'Polat Kocabıyık', 'denkel.berk@example.com', 'Ut exercitationem sunt eum dolorem vero veniam. Ex aut ipsa eligendi molestiae ut cupiditate.', '1990-04-07 21:00:00', '2021-05-16 18:24:31', NULL),
(19, 2, 'Sinem Pektemek', 'mberberoglu@example.net', 'Exercitationem rerum repudiandae in corrupti recusandae aperiam maiores cumque. Voluptatem enim architecto assumenda eligendi est animi optio inventore.', '2013-12-09 21:00:00', '2021-05-16 18:24:31', NULL),
(20, 8, 'Ümran Balcı', 'pakgul@example.net', 'Animi qui quas eius et quasi delectus. Beatae eligendi voluptatem dolor dolores.', '1992-01-22 21:00:00', '2021-05-16 18:24:31', NULL),
(21, 4, 'Emel Sepetçi', 'enebioglu@example.com', 'Id molestiae explicabo et sit. Nisi amet pariatur necessitatibus mollitia enim et quia.', '2012-10-10 21:00:00', '2021-05-16 18:24:31', NULL),
(22, 19, 'Koray Sözeri', 'cihan67@example.com', 'Ratione provident ad repudiandae asperiores accusamus sed. Blanditiis sunt quo aliquam autem.', '1998-03-05 21:00:00', '2021-05-16 18:24:31', NULL),
(24, 19, 'Sarp Akaydın', 'umran.dusenkalkar@example.org', 'Minus voluptas quis qui sit impedit ut. Tempora sunt sequi accusantium quaerat inventore sit. Quia omnis perspiciatis eum nesciunt soluta aut iusto dolorum.', '1992-12-15 21:00:00', '2021-05-16 18:24:31', NULL),
(25, 13, 'Türker Karabulut', 'wokumus@example.net', 'Itaque harum pariatur laborum nostrum beatae sit. Ex est quia qui dolorum velit incidunt. Doloremque provident id soluta cum aspernatur.', '2006-02-11 21:00:00', '2021-05-16 18:24:31', NULL),
(26, 15, 'Dağhan Atan', 'kumcuoglu.bora@example.net', 'Ducimus eum at amet at doloribus magni. Vel nemo itaque unde soluta in cum assumenda. Incidunt placeat qui in dolor qui qui maiores.', '1979-05-22 21:00:00', '2021-05-16 18:24:31', NULL),
(27, 10, 'Utku Aykaç', 'burcu.adal@example.com', 'Dolorum illum ut quo ex labore commodi velit. Exercitationem voluptatem atque rerum sint necessitatibus. Incidunt maiores ut eos nihil provident quia.', '1990-03-16 21:00:00', '2021-05-16 18:24:31', NULL),
(28, 5, 'Burak Paksüt', 'solmaz.sahnur@example.com', 'Harum doloribus molestiae rerum autem dolorum harum. Fugit ullam molestias aspernatur.', '2007-05-03 21:00:00', '2021-05-16 18:24:31', NULL),
(29, 8, 'Çınar Erbulak', 'alp.akay@example.org', 'Blanditiis odit aut suscipit facere. Porro repudiandae aliquam autem ut. Voluptate porro delectus blanditiis quis voluptates.', '1989-01-22 21:00:00', '2021-05-16 18:24:31', NULL),
(30, 1, 'Baran Uca', 'meric.korol@example.org', 'Nihil aut non dignissimos dolore illum accusantium saepe. Error ullam soluta dolores fuga quibusdam officiis. Beatae magnam nostrum aspernatur sit rerum non qui.', '1977-11-10 21:00:00', '2021-05-16 18:24:31', NULL),
(32, 9, 'Emirhan Yıldırım', 'berke40@example.org', 'Eos consequatur aut voluptatem ut voluptas. Dolores deserunt in qui sit vel aut. Et alias eos blanditiis quis voluptatem velit aliquid.', '2010-09-09 21:00:00', '2021-05-16 18:24:32', NULL),
(33, 12, 'Şahnur Öztonga', 'pdaglaroglu@example.net', 'Accusantium nesciunt ut dolores soluta eaque. Autem hic dolor officiis nostrum qui. Hic repellat aut voluptate mollitia.', '1993-02-08 21:00:00', '2021-05-16 18:24:32', NULL),
(35, 5, 'Emre Özdoğan', 'xtekelioglu@example.net', 'Earum impedit ut sequi in dicta non. Qui non voluptatem pariatur nihil excepturi.', '2000-07-26 21:00:00', '2021-05-16 18:24:32', NULL),
(36, 16, 'Barlas Çetiner', 'burcu.dizdar@example.net', 'Eos accusamus ullam eveniet praesentium. Maiores sequi iure ut id. Reprehenderit vel amet ipsam atque neque.', '2012-09-28 21:00:00', '2021-05-16 18:24:32', NULL),
(37, 1, 'Ümran Sinanoğlu', 'gorkem.aybar@example.net', 'Provident vel in maiores voluptas. Et quasi excepturi qui vero aut rerum unde. Eligendi omnis qui placeat ipsum iure rerum eum suscipit.', '1988-05-12 21:00:00', '2021-05-16 18:24:32', NULL),
(38, 6, 'Rüya Ertürk', 'ruya30@example.org', 'Earum aliquam atque dolor. Magni iusto sint non accusamus quibusdam rerum.', '1978-09-26 21:00:00', '2021-05-16 18:24:32', NULL),
(39, 13, 'Emel Karaböcek', 'emel.durak@example.com', 'Minus veritatis officiis aut et aperiam labore quis. Ea laboriosam alias sint sit non quo.', '2001-08-25 21:00:00', '2021-05-16 18:24:32', NULL),
(40, 19, 'Rüya Özbir', 'yeksioglu@example.org', 'Reprehenderit nam impedit dolor. Aut repellat non et ut est asperiores laudantium.', '2014-12-24 21:00:00', '2021-05-16 18:24:32', NULL),
(41, 3, 'Ferid Eronat', 'bsayginer@example.com', 'Asperiores iusto aut fugit est aliquid possimus perferendis. Quidem ratione aut repellat numquam et. Doloribus vero quas aspernatur.', '1998-03-26 21:00:00', '2021-05-16 18:24:32', NULL),
(42, 9, 'Ada Eronat', 'keseroglu.ebru@example.org', 'Voluptatem eos quae occaecati. Quibusdam autem nesciunt ducimus explicabo et. Sed animi sunt unde ut ea dolores.', '1975-06-08 21:00:00', '2021-05-16 18:24:32', NULL),
(46, 2, 'Esma Çağıran', 'oymen.ada@example.com', 'In voluptatem officiis alias eum. Eveniet vel accusamus pariatur commodi animi. Et quia tempore adipisci eum occaecati commodi quis.', '2012-08-18 21:00:00', '2021-05-16 18:25:56', NULL),
(47, 1, 'Meriç Sarıoğlu', 'sinem.koybasi@example.com', 'Non harum rerum qui repudiandae pariatur. Rerum unde officia unde ut aut.', '2002-02-12 21:00:00', '2021-05-16 18:25:56', NULL),
(49, 3, 'Yağız Durak', 'daglaroglu.cihan@example.org', 'Illo veritatis id earum qui ducimus sint voluptatem. Recusandae consectetur voluptas voluptatem et. Repudiandae officia cumque iusto rerum delectus voluptatum.', '1982-02-05 21:00:00', '2021-05-16 18:25:57', NULL),
(50, 1, 'Emel Limoncuoğlu', 'qegeli@example.org', 'Quidem cumque eveniet neque quia eos sunt. Voluptatem in asperiores quam quasi non similique laborum. Facere non quia et voluptas voluptatem.', '1991-05-04 21:00:00', '2021-05-16 18:25:57', NULL),
(53, 5, 'Emel Durak', 'radivar@example.com', 'Omnis sed dicta et eos ab. Ut qui nihil alias sed necessitatibus itaque velit. Vero animi adipisci perferendis omnis et nihil fugiat.', '1986-03-13 21:00:00', '2021-05-16 18:25:57', NULL),
(54, 19, 'Güney Duygulu', 'samanci.ege@example.com', 'Magni est tempora aspernatur beatae. Nisi corporis sunt eum id aut dicta quae.', '2017-03-15 21:00:00', '2021-05-16 18:25:57', NULL),
(55, 6, 'Kerem Düşenkalkar', 'demirel.ece@example.org', 'Commodi possimus voluptas esse ut in. Tenetur nesciunt sit et natus quaerat sequi sed.', '1980-09-10 21:00:00', '2021-05-16 18:25:57', NULL),
(56, 10, 'Şahnur Sezek', 'sarp.berberoglu@example.org', 'Occaecati atque delectus ut nam enim dolor earum labore. Molestiae velit dignissimos omnis occaecati possimus officiis amet.', '1984-08-15 21:00:00', '2021-05-16 18:25:57', NULL),
(57, 17, 'Ebru Beşerler', 'kgurmen@example.com', 'Voluptatibus enim illo incidunt sed quas qui libero. Sed cupiditate ratione blanditiis et quia laborum.', '2001-08-24 21:00:00', '2021-05-16 18:25:57', NULL),
(58, 8, 'Derin Körmükçü', 'ece60@example.com', 'Dolores et ex possimus quidem dignissimos. Eos placeat natus iusto magnam harum magni. Dolor et iure a nostrum ut.', '1987-05-04 21:00:00', '2021-05-16 18:25:57', NULL),
(59, 7, 'Koray Ertürk', 'kuday.ruya@example.net', 'Aliquam repudiandae quia nihil occaecati ex laudantium a. Omnis veniam dolorem aut natus rerum aliquid et. Sint quae corporis tempora quos.', '2018-03-23 21:00:00', '2021-05-16 18:25:57', NULL),
(60, 18, 'Ece Akgül', 'cem41@example.net', 'Sunt qui tenetur vero cupiditate corrupti facilis quis. Velit nesciunt rerum recusandae et quo hic nulla. Tempore eum sint enim ratione hic dolore.', '1995-02-08 21:00:00', '2021-05-16 18:25:57', NULL),
(61, 4, 'Ümran Gümüşpala', 'ece78@example.net', 'Officia nisi incidunt labore facilis velit ut. In explicabo illo voluptates possimus. Earum debitis possimus inventore assumenda voluptatum eius magni.', '1976-06-14 21:00:00', '2021-05-16 18:25:57', NULL),
(63, 15, 'Aşkın Tokgöz', 'umran77@example.org', 'Molestias ab assumenda cumque consequuntur vitae est provident. Eligendi id similique totam adipisci soluta in.', '1987-08-05 21:00:00', '2021-05-16 18:25:57', NULL),
(64, 13, 'Yiğit Atakol', 'berke.besok@example.org', 'Sit accusamus culpa itaque. Voluptatum omnis aperiam ducimus architecto ratione recusandae. Dolorum at eos quibusdam.', '2014-07-04 21:00:00', '2021-05-16 18:25:57', NULL),
(66, 10, 'Emel Köylüoğlu', 'mert.ozgorkey@example.org', 'Quidem aut nihil earum. Numquam aut ipsum tempore accusantium quas sed voluptas. Molestiae dicta et similique magni ipsum vitae dolores consequatur.', '2009-11-22 21:00:00', '2021-05-16 18:25:58', NULL),
(67, 8, 'İrem Türkdoğan', 'arslanoglu.atakan@example.com', 'Sunt tempora sit possimus a unde quia. Voluptates incidunt aut illo ipsam excepturi ab sed explicabo. Porro voluptas tempore qui consequatur aliquid eligendi est.', '1975-04-12 21:00:00', '2021-05-16 18:25:58', NULL),
(69, 8, 'Kerem Bolatlı', 'tugluk.emirhan@example.com', 'Ex voluptas reprehenderit modi suscipit aut voluptas. Atque sed cumque unde voluptatibus et. Doloremque quaerat nostrum corporis.', '1983-11-27 21:00:00', '2021-05-16 18:25:58', NULL),
(70, 11, 'Ümran Yıldırım', 'tkaplangi@example.com', 'Corrupti deserunt aut praesentium enim. Porro porro nostrum temporibus quae sint quisquam temporibus. Nemo quod amet reiciendis voluptates error assumenda.', '1981-11-12 21:00:00', '2021-05-16 18:25:58', NULL),
(71, 8, 'Emirhan Polat', 'stasci@example.net', 'Libero mollitia quia minus nesciunt nisi facilis aut. Omnis quisquam consectetur tempora et ab sapiente est.', '1996-02-08 21:00:00', '2021-05-16 18:25:58', NULL),
(73, 14, 'Rüya Alyanak', 'esma20@example.net', 'Dolor labore exercitationem quis cumque. Odio ut est dolore omnis aut in enim. In aliquid consequuntur eligendi dolores in et perspiciatis.', '1997-02-06 21:00:00', '2021-05-16 18:25:58', NULL),
(75, 13, 'Burak Koçoğlu', 'tasli.derin@example.org', 'Maxime aut voluptatem quibusdam quidem sapiente laborum. Quia eum est harum quibusdam. Aut sint molestiae amet laudantium qui dolorem.', '1973-05-09 21:00:00', '2021-05-16 18:25:58', NULL),
(78, 3, 'Ayşe Kasap', 'ayse@gmail.com', 'güzel bir ürün', '2021-05-16 18:42:59', '2021-05-16 18:42:59', NULL),
(79, 10, 'Hasan Can', 'hasan@gmail.com', 'Herkese tavsiye ediyorum. Mutlaka alın.', '2021-05-16 18:44:15', '2021-05-16 18:44:15', NULL),
(80, 10, 'Cansu Kasap', 'cans@gmail.com', 'keşke almasaydım. pişmanım :(', '2021-05-16 18:44:42', '2021-05-16 18:44:42', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori_urun`
--
ALTER TABLE `kategori_urun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_urun_kategori_id_foreign` (`kategori_id`),
  ADD KEY `kategori_urun_urun_id_foreign` (`urun_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_email_unique` (`email`);

--
-- Tablo için indeksler `kullanici_detay`
--
ALTER TABLE `kullanici_detay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kullanici_detay_kullanici_id_foreign` (`kullanici_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sepet_kullanici_id_foreign` (`kullanici_id`);

--
-- Tablo için indeksler `sepet_urun`
--
ALTER TABLE `sepet_urun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sepet_urun_sepet_id_foreign` (`sepet_id`),
  ADD KEY `sepet_urun_urun_id_foreign` (`urun_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siparis_sepet_id_unique` (`sepet_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_detay`
--
ALTER TABLE `urun_detay`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `urun_detay_urun_id_unique` (`urun_id`);

--
-- Tablo için indeksler `urun_yorum`
--
ALTER TABLE `urun_yorum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urun_yorum_urun_id_foreign` (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kategori_urun`
--
ALTER TABLE `kategori_urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_detay`
--
ALTER TABLE `kullanici_detay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `sepet_urun`
--
ALTER TABLE `sepet_urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `urun_detay`
--
ALTER TABLE `urun_detay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `urun_yorum`
--
ALTER TABLE `urun_yorum`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kategori_urun`
--
ALTER TABLE `kategori_urun`
  ADD CONSTRAINT `kategori_urun_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kategori_urun_urun_id_foreign` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `kullanici_detay`
--
ALTER TABLE `kullanici_detay`
  ADD CONSTRAINT `kullanici_detay_kullanici_id_foreign` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `sepet`
--
ALTER TABLE `sepet`
  ADD CONSTRAINT `sepet_kullanici_id_foreign` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `sepet_urun`
--
ALTER TABLE `sepet_urun`
  ADD CONSTRAINT `sepet_urun_sepet_id_foreign` FOREIGN KEY (`sepet_id`) REFERENCES `sepet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sepet_urun_urun_id_foreign` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `siparis`
--
ALTER TABLE `siparis`
  ADD CONSTRAINT `siparis_sepet_id_foreign` FOREIGN KEY (`sepet_id`) REFERENCES `sepet` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `urun_detay`
--
ALTER TABLE `urun_detay`
  ADD CONSTRAINT `urun_detay_urun_id_foreign` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`);

--
-- Tablo kısıtlamaları `urun_yorum`
--
ALTER TABLE `urun_yorum`
  ADD CONSTRAINT `urun_yorum_urun_id_foreign` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
