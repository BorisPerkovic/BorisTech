-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2021 at 03:57 PM
-- Server version: 5.7.29-log
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boristech`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `audio_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `audio_brand` varchar(20) NOT NULL,
  PRIMARY KEY (`audio_id`),
  UNIQUE KEY `audio_id_UNIQUE` (`audio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`audio_id`, `audio_brand`) VALUES
(1, 'Sony'),
(2, 'LG'),
(3, 'Pioneer'),
(6, 'Panasonic');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `basket_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `products_brand` varchar(20) NOT NULL,
  `products_model` varchar(45) NOT NULL,
  `accepted` int(11) NOT NULL DEFAULT '1',
  `shop_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `users_name` varchar(45) NOT NULL,
  `users_lastname` varchar(45) NOT NULL,
  `users_email` varchar(45) NOT NULL,
  `users_addres` varchar(45) NOT NULL,
  `users_phone` varchar(45) NOT NULL,
  PRIMARY KEY (`basket_id`),
  UNIQUE KEY `basket_id_UNIQUE` (`basket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`basket_id`, `users_id`, `products_brand`, `products_model`, `accepted`, `shop_time`, `users_name`, `users_lastname`, `users_email`, `users_addres`, `users_phone`) VALUES
(57, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-16 18:36:44', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(58, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 18:42:21', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(59, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 18:42:23', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(60, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 18:42:25', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(61, 12, 'Sony', 'Xperia X Performance', 2, '2020-07-16 18:56:55', 'Mikica', 'Mikić', 'mmikica@gmail.com', '123456', '123456'),
(62, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 19:48:32', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(67, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 20:09:06', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(68, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-16 20:10:49', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(69, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-16 20:10:51', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(71, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-16 20:11:59', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(74, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 22:03:21', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(76, 5, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 23:19:09', 'Kristina', 'Čičić', 'kkile@gmail.com', 'ta i ta ta i ta', '123444'),
(77, 5, 'Sony', 'Xperia X Performance', 2, '2020-07-16 23:20:32', 'Kristina', 'Čičić', 'kkile@gmail.com', 'ta i ta ta i ta', '123444'),
(78, 5, 'Sony', 'Xperia X Performance', 2, '2020-07-16 23:30:07', 'Kristina', 'Čičić', 'kkile@gmail.com', 'ta i ta ta i ta', '123444'),
(79, 5, 'Sony', 'Xperia X Performance', 2, '2020-07-16 23:30:09', 'Kristina', 'Čičić', 'kkile@gmail.com', 'ta i ta ta i ta', '123444'),
(80, 5, 'Apple', 'Iphone 11 64GB', 2, '2020-07-16 23:43:23', 'Kristina', 'Čičić', 'kkile@gmail.com', 'ta i ta ta i ta', '123444'),
(81, 5, 'Sony', 'Xperia X Performance', 2, '2020-07-17 00:21:25', 'Kristina', 'Čičić', 'kkile@gmail.com', 'ta i ta ta i ta', '123444'),
(82, 1, 'Tesla', 'sdsadad', 2, '2020-07-18 22:19:14', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(84, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-18 22:19:37', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(85, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-18 22:19:39', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(95, 1, 'Sony', 'KDL49WE660BAEP', 2, '2020-07-19 22:09:41', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(96, 1, 'Sony', 'KDL32WE615BAEP', 2, '2020-07-19 22:09:48', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(97, 1, 'Apple', 'Iphone 11 64GB', 2, '2020-07-19 22:12:49', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(98, 1, 'Sony', 'Xperia X Performance', 2, '2020-07-19 22:12:56', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(99, 1, 'Sony', 'KDL32WE615BAEP', 2, '2020-07-19 22:13:02', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(100, 1, 'Samsung', 'QE55Q90RAT', 2, '2020-07-19 23:56:58', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(101, 1, 'Huawei', 'PRO 40', 2, '2020-07-20 00:58:57', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(102, 1, 'Apple', 'Iphone 11 PRO 64GB ', 2, '2020-07-20 01:16:20', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(104, 1, 'Samsung', 'GALAXY NOTE10', 2, '2020-07-20 01:39:55', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(105, 1, 'LG', 'OLED55E8PLA', 2, '2020-07-20 01:40:06', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(106, 22, 'Huawei', 'PRO 40', 2, '2020-07-22 06:10:36', 'Marko', 'Marković', 'mmare@gmail.com', 'dsadasdasd', 'dsadd'),
(107, 22, 'Sony', 'Cyber-shot DSC-W830S ', 2, '2020-07-22 07:08:17', 'Marko', 'Marković', 'mmare@gmail.com', 'dsadasdasd', 'dsadd'),
(108, 22, 'Sony', 'XZ PREMIUM', 2, '2020-07-22 07:08:29', 'Marko', 'Marković', 'mmare@gmail.com', 'dsadasdasd', 'dsadd'),
(109, 22, 'Huawei', 'P30 LITE', 2, '2020-07-22 22:50:36', 'Marko', 'Marković', 'mmare@gmail.com', 'dsadasdasd', 'dsadd'),
(111, 24, 'HP', '2RR64EA', 2, '2020-07-28 18:29:32', 'Mile', 'Milić', 'mmile@gmail.com', 'miletova br 5', '4567532'),
(112, 24, 'Denver', 'Dron DCH-640', 2, '2020-07-28 18:29:40', 'Mile', 'Milić', 'mmile@gmail.com', 'miletova br 5', '4567532'),
(114, 26, 'Acer', 'SP314-52-501M', 2, '2020-08-02 16:35:19', 'Marko', 'Bojić', 'skyppy@gmail.com', 'blabla', '1316546465'),
(116, 22, 'Denver', 'Dron DCH-640', 2, '2020-08-07 00:48:26', 'Marko', 'Marković', 'mmare@gmail.com', 'dsadasdasd', 'dsadd'),
(117, 22, 'Apple', 'MacBook Air 13,3\" ', 2, '2020-08-07 00:48:37', 'Marko', 'Marković', 'mmare@gmail.com', 'dsadasdasd', 'dsadd'),
(119, 1, 'Sony', 'Xperia X Performance', 2, '2020-10-20 12:11:23', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(120, 1, 'Huawei', 'P40 PRO', 2, '2020-12-13 00:11:13', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(121, 1, 'Huawei', 'P40 PRO', 2, '2020-12-13 00:11:19', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(123, 1, 'Apple', 'MacBook Pro 13\" ', 2, '2020-12-13 01:02:19', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(124, 1, 'Sony', 'CMTSBT 20 CEL', 2, '2020-12-13 01:02:25', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(128, 1, 'LG', 'CM 2460', 2, '2020-12-22 02:50:30', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(130, 1, 'Apple', 'Iphone 11 PRO 64GB ', 2, '2020-12-22 02:50:42', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(133, 1, 'LG', 'CK43', 2, '2021-01-04 18:22:16', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(134, 1, 'Sony', 'XZ PREMIUM', 2, '2021-01-04 18:48:00', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(137, 1, 'Apple', 'Iphone 11 64GB', 2, '2021-01-04 19:18:59', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(138, 1, 'HP', '2RR64EA', 2, '2021-01-04 19:19:07', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(140, 1, 'DELL', 'G3 15 3590 ', 2, '2021-01-05 12:04:52', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(142, 1, 'Tesla', '42S306BF', 2, '2021-01-05 12:05:38', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111'),
(144, 28, 'Tesla', '40T319SFS', 2, '2021-01-05 12:16:50', 'Talični', 'Tom', 'talični@gmail.com', 'talična 45', '456782313'),
(145, 28, 'Apple', 'MacBook Air 13,3\" ', 2, '2021-01-05 12:17:25', 'Talični', 'Tom', 'talični@gmail.com', 'talična 45', '456782313'),
(147, 1, 'Tesla', '40T319SFS', 2, '2021-01-05 12:28:58', 'Boris', 'Perković', 'bboris@gmail.com', 'ta i ta ta i ta', '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `basket_has_specification`
--

DROP TABLE IF EXISTS `basket_has_specification`;
CREATE TABLE IF NOT EXISTS `basket_has_specification` (
  `basket_basket_id` int(10) UNSIGNED NOT NULL,
  `specification_sepcification_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`basket_basket_id`,`specification_sepcification_id`),
  KEY `fk_basket_has_specification_specification1_idx` (`specification_sepcification_id`),
  KEY `fk_basket_has_specification_basket_idx` (`basket_basket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id_UNIQUE` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Telefoni'),
(2, 'Televizori'),
(3, 'Laptopovi'),
(4, 'Desktop'),
(5, 'Audio'),
(6, 'Foto-Kamere');

-- --------------------------------------------------------

--
-- Table structure for table `cellphone`
--

DROP TABLE IF EXISTS `cellphone`;
CREATE TABLE IF NOT EXISTS `cellphone` (
  `cellPhone_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cellPhone_brand` varchar(20) NOT NULL,
  PRIMARY KEY (`cellPhone_id`),
  UNIQUE KEY `cellPhone_id_UNIQUE` (`cellPhone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cellphone`
--

INSERT INTO `cellphone` (`cellPhone_id`, `cellPhone_brand`) VALUES
(1, 'Sony'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Huawei'),
(5, 'Xaomi');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment` text,
  `users_name` varchar(20) NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aproved` int(11) NOT NULL DEFAULT '1',
  `specification_specification_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`comments_id`),
  UNIQUE KEY `comments_id_UNIQUE` (`comments_id`),
  KEY `fk_comments_specification1_idx` (`specification_specification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comment`, `users_name`, `comment_time`, `aproved`, `specification_specification_id`) VALUES
(1, 'Ovaj telefon je veoma pouzdan i veoma sam zadovoljan kupovinom. Brz odaziv, sjajna kamera. Svaka preporuka odnosa cene i kvaliteta', 'Mike', '2020-07-08 20:38:11', 2, 5),
(2, 'Apple je nakon Iphone 8 poceo da skrtari sa svojim proizvodima. moje je misljenje da su Apple telefoni preskupi za kvalitet koji pruzaju', 'Marko', '2020-07-08 20:38:11', 2, 6),
(3, 'Obozavam Apple proizvode. Za mene pouzdani i kvalitetni sa kamerom kakve nema na trzistu. pozdravvvv :)', 'Johny', '2020-07-08 20:57:26', 2, 6),
(4, 'Sony vece decenijama unazad pokazuje zasto je klasa medju tehnikom. Sve pohvale i preporuke', 'Risbo', '2020-07-08 21:59:52', 2, 5),
(5, 'Apple je tata nad tatama. Nemate pojma sta je dobar telefon svi vi koji pljujete Iphone', 'Ja', '2020-07-08 22:01:09', 2, 6),
(9, 'Kamera nesto slabija, baterija dosta drzi. BorisTech sve pohvale na saradnji i bryoj isporuci', 'Mikica', '2020-07-08 22:05:02', 2, 5),
(11, 'blablblalbalblabla', 'Ja', '2020-07-08 22:09:06', 2, 5),
(12, 'asdadadjhdkjashdaskd', 'Noblica', '2020-07-09 10:30:08', 2, 6),
(13, 'Obozavam ovaj telefon. Vrh je.', 'Michael', '2020-07-16 14:36:53', 2, 5),
(14, 'Sony jedan jedini najbolji', 'Kikole', '2020-07-16 15:09:50', 2, 5),
(15, 'Nebih znao sta da kažem osim FENOMENALNO', 'MIlenko', '2020-07-16 21:42:56', 2, 5),
(16, 'Uaaaaaa nikako IPHONE', 'Noblica', '2020-07-16 22:00:47', 2, 6),
(17, 'Krsš', 'John Doe', '2020-07-22 07:35:13', 2, 35),
(18, 'Preskupo a ne vredi toliko novca', 'Uncle Sam', '2020-07-22 08:00:55', 2, 43),
(20, 'Odnos cene i kvaliteta zadovoljavajuće', 'Risbo', '2021-01-05 12:21:13', 2, 35);

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

DROP TABLE IF EXISTS `laptops`;
CREATE TABLE IF NOT EXISTS `laptops` (
  `laptops_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `laptops_brand` varchar(45) NOT NULL,
  PRIMARY KEY (`laptops_id`),
  UNIQUE KEY `laptops_id_UNIQUE` (`laptops_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`laptops_id`, `laptops_brand`) VALUES
(1, 'Acer'),
(2, 'HP'),
(3, 'Apple'),
(4, 'Lenovo'),
(5, 'Dell');

-- --------------------------------------------------------

--
-- Stand-in structure for view `orders`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
`users_id` int(10) unsigned
,`users_name` varchar(20)
,`users_lastname` varchar(30)
,`users_email` varchar(45)
,`users_addres` varchar(45)
,`users_phone` varchar(13)
,`specification_id` int(10) unsigned
,`category` varchar(20)
,`products_brand` varchar(20)
,`products_model` varchar(45)
,`price` varchar(8)
,`basket_id` int(10) unsigned
,`accepted` int(11)
,`shop_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `photocamera`
--

DROP TABLE IF EXISTS `photocamera`;
CREATE TABLE IF NOT EXISTS `photocamera` (
  `photoCamera_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photoCamera_brand` varchar(20) NOT NULL,
  PRIMARY KEY (`photoCamera_id`),
  UNIQUE KEY `photoCamera_id_UNIQUE` (`photoCamera_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photocamera`
--

INSERT INTO `photocamera` (`photoCamera_id`, `photoCamera_brand`) VALUES
(1, 'Sony'),
(2, 'Canon'),
(3, 'GoPro'),
(4, 'NIKON'),
(5, 'Denver'),
(6, 'Propel');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

DROP TABLE IF EXISTS `specification`;
CREATE TABLE IF NOT EXISTS `specification` (
  `specification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `products_brand` varchar(20) NOT NULL,
  `products_model` varchar(45) NOT NULL,
  `price` varchar(8) NOT NULL,
  `dimension` varchar(15) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `display` varchar(60) NOT NULL,
  `resolution` varchar(60) NOT NULL,
  `procesor` varchar(60) NOT NULL,
  `camera` varchar(60) NOT NULL,
  `memory` varchar(10) NOT NULL,
  `ram_memory` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `system` varchar(45) NOT NULL,
  `wifi` varchar(3) NOT NULL,
  `usb` varchar(3) NOT NULL,
  `hdmi` varchar(45) NOT NULL,
  `chipset` varchar(45) NOT NULL,
  `keyboard` varchar(45) NOT NULL,
  `power` varchar(45) NOT NULL,
  `motherboard` varchar(45) NOT NULL,
  `other` varchar(45) NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0',
  `dislike` int(11) NOT NULL DEFAULT '0',
  `viewed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`specification_id`),
  UNIQUE KEY `products_id_UNIQUE` (`specification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`specification_id`, `category`, `products_brand`, `products_model`, `price`, `dimension`, `weight`, `display`, `resolution`, `procesor`, `camera`, `memory`, `ram_memory`, `color`, `system`, `wifi`, `usb`, `hdmi`, `chipset`, `keyboard`, `power`, `motherboard`, `other`, `like`, `dislike`, `viewed`) VALUES
(5, 'Telefoni', 'Sony', 'Xperia X Performance', '54000', '70.5x143.7mm', '164.4g', 'Full HD TRILUMINOS™', '1080 x 1920 pix', 'Dual-core 2.15 GHz Kryo & dual-core 1.6 GHz Kryo', '23 Mpix', 'Do 32 GB', '3 GB RAM', 'Crna', 'Android 6.0', 'Da', 'Da', 'Ne', '', '', '2700 mAh', '', '', 0, 0, 0),
(6, 'Telefoni', 'Apple', 'Iphone 11 64GB', '105360', '75.7x150.9mm', '194 g', 'Liquid Retina HD display', '828 x 1792 pix', 'A13 Bionic chip Third‑generation Neural Engine', 'dual 12 Mpix', '64GB', '6 GB RAM', 'Black', 'iOS 13', 'Da', 'Da', 'Ne', '', '', '2500 mAh', '', '', 0, 0, 0),
(22, 'Televizori', 'Sony', 'KDL49WE660BAEP', '59990 ', '110.2cmx65cm ', '11.4 kg', 'LCD, Edge LED, X-Reality PRO', 'Full HD HDR, 1920 x 1080 px', '', '', '/', '', 'Crna', 'Linux, OPERA web apps', 'DA', 'DA', 'DA', '', '', '240w', '', 'USB media player ,USB HDD recording ', 0, 0, 0),
(23, 'Televizori', 'Sony', 'KDL32WE615BAEP', '39990 ', '73,1x44,2 cm ', '5,8 kg', 'LCD, Edge LED, X-Reality PRO', 'HD HDR , 1366 x 768 px', '', '', '/', '', 'Crna', 'Linux, OPERA web apps ', 'DA', 'DA', 'DA', '', '', '240w', '', 'Teletext, EPG, USB media player ,USB HDD ', 0, 0, 0),
(24, 'Televizori', 'Sony', 'KD65XF9005BAEP', '175990', '144.7x82.9cm', '24.5 kg', 'uz 4K HDR Processor X1 Extreme', '3840 x 2160 px', '', '', '100GB', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240w', '', 'Precision Mapping, Super Bit Mapping 4K HDR', 0, 0, 0),
(25, 'Televizori', 'Sony', 'KD49XF8096', '99990 ', '123,2x71,6cm ', '12,2 kg', '4K HDR,4K X - Reality PRO', '3840 x 2160 px', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240w', '', '4x HDMI,3x USB, 2x Analog Audio Input', 0, 0, 0),
(26, 'Televizori', 'Sony', 'KD65XF7596', '139999 ', '145x83.6cm ', '25.6 kg', '4K HDR, 4K X - Reality PRO', '3840 x 2162 px', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240w', '', '3 HDMI,3 USB, 2 Analog Audio Input, Digital ', 0, 0, 0),
(27, 'Televizori', 'Samsung', 'QE65Q7CAMT', '500699 ', '144.08x82.73cm', '24.6 kg', 'Q LED Ultra HD', '3840 x 2160 px ', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '', '', 'Digitalni audio izlaz (optički), RF, CI', 0, 0, 0),
(28, 'Televizori', 'Samsung', 'UE75RU7022K', '149990 ', '168,6x96,4cm ', '37 kg', 'LED', '3840 x 2160 px', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '210-240v', '', 'Video: UHD Engine, HDR, HDR 10+, HLG', 0, 0, 0),
(29, 'Televizori', 'Samsung', 'QE65Q950RBT', '499990 ', '145,2x89,8cm ', '31,2 kg', 'QLED 8K', '7680 x 4320 px', '', '', '120GB', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '360w', '', '360 Video plejer, podrška za 360 kameru', 0, 0, 0),
(30, 'Televizori', 'Samsung', 'QE75Q85RAT', '449990 ', '167,5x 05,3cm', '40,5 kg', 'QLED 4K', '3840 x 2160 px', '', '', '/', '', 'Siva', 'Android TV', 'DA', 'DA', 'DA', '', '', '240w', '', 'Quantum HDR 1500, funkcija Direct Full Array', 0, 0, 0),
(31, 'Televizori', 'Samsung', 'QE55Q90RAT', '249990 ', '123,1x79,6cm', '34,3 kg', 'QLED HDR', '3840 x 2160 px', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '210-240v', '', '360 Video plejer, podrška za 360 kameru', 0, 0, 0),
(32, 'Televizori', 'LG', '43LK5100PLA', '34990 ', '97.6x58.3cm ', '8.1 kg', 'HD HDR', '1920 x 1080 px', '', '', '/', '', 'Crna', 'Linux, Opera Browser', 'DA', 'DA', 'DA', '', '', '240w', '', 'Osveženje 50Hz Tjuner DVB-T2/C/S2', 0, 0, 0),
(33, 'Televizori', 'LG', 'OLED55E8PLA', '263799 ', '122,8x77,6cm ', '20.5 kg', 'OLED', '3840 x 2160 px', '', '', '100GB', '', 'Siva', 'webOS Smart TV', 'DA', 'DA', 'DA', '', '', '240w', '', '4K Cinema HDR', 0, 0, 0),
(34, 'Televizori', 'LG', '75SM9900PLA', '449990 ', '118,2x86x5cm', '32,1 kg', 'NanoCell HDR tehnologija', '7680 x 4320 px', '', '', '150Gb', '', 'Crna', 'WebOS ThinQ AI', 'DA', 'DA', 'DA', '', '', '240w', '', 'Ultra HD TV prijem, Magic Mobile Connection', 0, 0, 0),
(35, 'Televizori', 'Tesla', '40T319SFS', '24990 ', '90,6x57,4 cm ', '4,2 kg', 'Direct LED', '1920 x 1080 px', '', '', '/', '', 'Siva', 'Linux', 'DA', 'DA', 'DA', '', '', '240w', '', 'Netflix, YouTube, AccuWeather', 0, 0, 0),
(36, 'Televizori', 'Tesla', '43T319SF', '24990 ', '97 x 61.1 cm', '4,2 kg', 'LED', '1920 x 1080 px', '', '', '/', '', 'Siva', 'Smart TV', 'DA', 'DA', 'DA', '', '', '240w', '', 'Vreme odziva 8 ms Ugao gledanja: 178°/178°', 0, 0, 0),
(37, 'Televizori', 'Tesla', '42S306BF', '33990 ', '95.5 x 59.5 cm', '4,1 kg', 'LED', '1920 x 1080 px', '', '', '/', '', 'Crna', 'Smart TV', 'DA', 'DA', 'DA', '', '', '240v', '', 'Vreme odziva: 8 ms Ugao gledanja: 178°/178°', 0, 0, 0),
(38, 'Televizori', 'Vox', '43DSA311G', '22656 ', '98,5x56,3 cm', '4 kg', 'DIRECT LED slim', '1920 x 1080 px', '', '', '/', '', 'Siva', 'Smart TV', 'DA', 'DA', 'DA', '', '', '240w', '', 'DVB-C, DVB-S2, DVB-T2 HEVC H.265', 0, 0, 0),
(39, 'Televizori', 'Vox', '50DSW293V', '51933 ', '113,4x25cm', '5 kg', 'Direct LED slim', '4K 3840 x 2160 px', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240v', '', 'HDR TV HEVC H.265', 0, 0, 0),
(40, 'Televizori', 'Hisense', 'H43B7300', '35990 ', '96,9x18,6 cm ', '7,8 kg', 'DLED', 'Ultra HD 3840 x 2160 px', '', '', '/', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240v', '', 'Korisnički interfejs: VIDAA U3.0', 0, 0, 0),
(41, 'Televizori', 'Hisense', 'H55B7300', '47990 ', '124,2x23,5 cm ', '13 kg', 'DLED', 'Ultra HD 3840 x 2160 px', '', '', '50gb', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240v', '', 'Netflix YouTube Prime Video', 0, 0, 0),
(42, 'Televizori', 'Hisense', 'H65B7300', '69990 ', '145,9x18,6cm', '17kg', 'DLED', 'Ultra HD 3840 x 2160 px', '', '', '', '', 'Crna', 'Android TV', 'DA', 'DA', 'DA', '', '', '240v', '', 'Netflix YouTube Prime Video', 0, 0, 0),
(43, 'Telefoni', 'Apple', 'Iphone 11 PRO 64GB ', '147600', '71.4 x 144 mm', '188 g', 'Super Retina XDR OLED display', '1125 x 2436 pix', 'A13 Bionic chip Third‑generation Neural Engine', 'triple 12 Mpix', '64 GB', '4 GB', 'Srebrna', 'iOS 13', 'DA', 'DA', '', '', '', '2700 mAh', '', '', 0, 0, 0),
(44, 'Telefoni', 'Apple', 'Iphone XS 512GB', '175200', '77.4x57.5mm', '208g', 'Super Retina HD display (OLED)', '1242 x 2688', 'A12 Bionic chip with next-generation Neural Engine', 'dual 12 Mpix', '512 GB', '6 GB', 'Tamno Siva', 'iOS 12', 'DA', 'DA', '', '', '', '2700 mAh', '', '', 0, 0, 0),
(45, 'Telefoni', 'Apple', 'Iphone 11 PRO MAX ', '182880', '77.8 x 158mm', '226 g', 'Super Retina XDR OLED display', '1242 x 2688 pix', 'A13 Bionic chip Third‑generation Neural Engine', 'triple 12 Mpix', '256 GB', '6 GB', ' Zelena', 'iOS 13', 'DA', 'DA', '', '', '', '2700 mAh', '', '', 0, 0, 0),
(46, 'Telefoni', 'Samsung', 'GALAXY NOTE10', '115200', '71.8 x 151.0mm', '168g', 'Dynamic AMOLED', '3840x2100px', 'Octa-core 2x2.7GHz + 2x2.4GHz + 4x1.9 GHz', '12+12+16 MP', '256 GB', '8 GB RAM', 'Crna', 'Android 9.0 (Pie)', 'DA', 'DA', '', '', '', '3500 mAh', '', '', 0, 0, 0),
(47, 'Telefoni', 'Samsung', 'GALAXY A10', '18480', '75.8 x 155.6mm', '168 g', 'Gorila FULL HD', '720 x 1520', 'Octa-Core: 2 x 1.6GHz + 6 x 1.35GHz', '13 Mpix', '32 GB', '2 GB', 'Crna', 'Android 9.0', 'DA', 'DA', '', '', '', '3400 mAh', '', '', 0, 0, 0),
(48, 'Telefoni', 'Huawei', 'PRO 40', '87840', '71.06 x 148.9mm', '175 g', 'Gorila Glass', '1080 x 2340', 'Octa-core 2 x 2.86GHz + 2 x 2.36GHz + 4 x 1.95GHz', '50 + 16 + 8 MP', ' 128 GB', '8 GB', 'Crna', 'Android 10 (bez Google servisa)', 'Da', 'DA', '', '', '', '3800 mAh', '', '', 0, 0, 0),
(49, 'Telefoni', 'Huawei', 'P 40 LITE', '32400', '76.3 x 159.2mm', '183 g', 'LTPS IPS LCD', '1080 x 2310', 'Octa-core 2 x 2.27 GHz + 6 x 1.88 GHz', '48 + 8 + 2 + 2 MP', ' 128 GB', '6 GB', 'Crna', 'Android 10 (bez Google servisa)', 'Da', 'DA', '', '', '', '4200 mAh', '', '', 0, 0, 0),
(50, 'Telefoni', 'Huawei', 'P40 PRO', '117120', '72.6 x 158.2 mm', '209 g', 'OLED', '1200 x 2640', 'Octa-core 2 x 2.86GHz + 2 x 2.36GHz + 4 x 1.95GHz', '50 + 40 + 12 MP', ' 256 GB', '8 GB ', 'Crna', 'Android 10 (bez Google servisa)', 'Da', 'Da', '', '', '', '4200 mAh', '', '', 0, 0, 0),
(51, 'Telefoni', 'Huawei', 'P30 LITE', '33480', '152.9 x 72.7mm', '159g', 'IPS', '1080 x 2312', 'Kirin710 Octa-Core', '48 + 8 + 2 Mpix', '128 GB', '6 GB', 'Crna', 'Android 9.0 (Pie)', 'DA', 'DA', '', '', '', '3340 mAh', '', '', 0, 0, 0),
(52, 'Telefoni', 'Sony', 'XPERIA  XZ1', '48299', '148 x 73.4 mm', ' 155 grama', 'Corning Gorilla Glass 5', '1920x1080px', 'Qualcomm Snapdragon 835', '19Mpx', '64GB', '4 GB', 'Crna', ' Android 8.0 Oreo', 'DA', 'DA', '', '', '', '2700mAh', '', '', 0, 0, 0),
(53, 'Telefoni', 'Sony', 'XZ PREMIUM', '77469', '77 x 156mm', '191 g', '4K HDR TRILUMINOS™', '1440 x 2560', 'Qualcomm® Snapdragon™ 835 processor', '19 Mpix', ' 64 GB', '4 GB RAM', 'Crna', 'Android 7.1', 'DA', 'DA', '', '', '', '3230 mAh', '', '', 0, 0, 0),
(54, 'Telefoni', 'Xaomi', 'MI 10', '102000', '74.8 x 162.5mm', '208 g', 'Super AMOLED', '1080 x 2340', 'Octa-core 1 x 2.84 GHz + 3 x 2.42 GHz + 4 x 1.80 GHz', '108 + 13 + 2 + 2', '256 GB', '8 GB RAM', 'Crna', 'Android 10', 'DA', 'DA', '', '', '', '4780 mAh', '', '', 0, 0, 0),
(55, 'Telefoni', 'Xaomi', 'REDMI 8', '18720', '156.5 x 75.4mm', '188 g', 'IPS LCD', '720 x 1520', 'Octa-core 4x 1.95 GHz + 4x 1.45 GHz', '12 MP', '64 GB', '4 GB', 'Plava', 'Android 9.0', 'DA', 'DA', '', '', '', '5000 mAh', '', '', 0, 0, 0),
(56, 'Telefoni', 'Xaomi', 'REDMI NOTE 8T', '25440', '161.1 x 75.4mm', '199.8 g', 'IPS LCD', '1080 x 2340', 'Octa-core 4 x 2.0 GHz + 4 x 1.8 GHz', '48 + 8 + 2 + 2', '64 GB', '4 GB ', 'Plava', 'Android 9.0 (Pie); MIUI 10', 'DA', 'DA', '', '', '', '4000 mAh', '', '', 0, 0, 0),
(57, 'Laptopovi', 'Acer', 'SP314-52-501M', '88891 ', '13.2 \" x 0.8 \"', '4kg', '14\" LCD Full HD', '1920 x 1080 px', 'Intel Core i5-8265U 1.60 GHz', '', '256 GB ', '8 GB', 'Crna', 'Windows 10 Home', 'DA', 'DA', 'DA', 'Intel UHD Graphics 620 DDR4 ', '', '3-cell Lithium Ion ', '', 'Touchscreen Podržana memorijska kartica: SD', 0, 0, 0),
(58, 'Laptopovi', 'Acer', 'A515-52G-5722', '62221 ', '70.5x143.7mm', '5kg', '15,6\" FHD ', '1080 x 1920 pix', 'Intel® Core™ i5-8265U', '', '1000 GB', '8 GB ', 'Crna', 'ESHELL_1SP Boot-up Linux', 'DA', 'DA', 'DA', 'NVIDIA® GeForce® MX130', '', '4-cell Li-Ion', '', 'HD kamera sa 2Mic.', 0, 0, 0),
(59, 'Laptopovi', 'Acer', 'Nitro 5 AN515-54 ', '103115 ', '25, x363,4 mm ', '2,5KG', '15,6\" LCD ComfyView', '1920 x 1080 px', 'Intel Core i5-9300H', '', '512 GB ', '8 GB', 'Crna', 'Windows Home 10 ', 'DA', 'DA', 'DA', 'NVIDIA GeForce GTX 1650', '', '4-ćelijska, litijum-jonska, 3580 mAh', '', 'Ukupan broj USB portova: 4', 0, 0, 0),
(60, 'Laptopovi', 'Apple', 'MWTK2ZE/A ', '163290 ', '70.5x143.7mm', '3kg', '13,3\" Retina IPS LED-backlit', '2560 x 1600 px', 'Intel Core i3 Dual Core', '', '256 GB ', '8 GB ', 'Srebrna', 'Apple MacOS Catalina ', 'DA', 'DA', 'DA', 'Intel Iris Plus Graphics G4', '', 'Litijum-polimerska', '', 'Rotacija: NAND flash memorija', 0, 0, 0),
(61, 'Laptopovi', 'Apple', 'MacBook Air 13,3\" ', '141990 ', '30,4 x 21,24 cm', '2 kg', '13,3\" Retina IPS LED-backlit', '2560 x 1600 px', 'Intel Core i5 Dual Core 8210Y', '', '128 GB', '8 GB', 'Srebrna', 'Apple MacOS Mojave ', 'DA', 'DA', 'DA', 'Integrisana Intel UHD 617 ', '', 'Lithium Polymer', '', 'Čitač otiska prsta Thunderbolt port: 2', 0, 0, 0),
(62, 'Laptopovi', 'Apple', 'MacBook Pro 13\" ', '159990 ', '1.49x30.41 cm', '1.37 kg', '13,3\" LED-backlit Retina displej ', '2560 x 1600 piksela', 'Intel Core i5', '', '128 GB ', '8 GB', 'Srebrna', 'macOS Mojave', 'DA', 'DA', 'DA', 'Intel Iris Plus Graphics 640', '', 'Lithium Polymer', '', '61W USB-C Adapter za napajanje', 0, 0, 0),
(63, 'Laptopovi', 'DELL', 'G3 15 3590 ', '121990 ', '365,5x254 mm ', '2,34 kg', '15,6\" TN-WVA Anti-Glare', '1920 x 1080 px', 'Intel Core i5-9300H Quad Core', '', '512 GB ', '8 GB', 'Bela', 'Windows Home 10', 'DA', 'DA', 'DA', 'Intel UHD Graphics 630', '', '3-ćeliijska, litijum-jonska, 51 WHr', '', 'Žična mreža:100/1000 Mbps Čitač otiska prsta', 0, 0, 0),
(64, 'Laptopovi', 'DELL', 'Laptop Vostro 3590 ', '89990 ', '380 x 258 mm ', '1,99 kg', '15,6\" TN Anti-Glare', '1920 x 1080 px', 'Intel Core i3-10110U Dual Core', '', '256 GB ', '8 GB', 'Crna', 'Microsoft Windows 10 Professional', 'DA', 'DA', 'DA', 'Intel UHD Graphics', '', '3-ćelijska, polimer-prizmatična, 42 WHr', '', '1 x 3,5 mm izlaz za slušalice i mikrofon', 0, 0, 0),
(65, 'Laptopovi', 'HP', '15-dc1045nm ', '179990 ', '36 x 26,3cm', '2,32 kg', '15,6\" Full HD', '1920 x 1080 px', 'Intel Core i7 - 8750H Hexa Core', '', '512 GB ', '8 GB', 'Crna', 'FreeDOS 2,0', 'DA', 'DA', 'DA', 'Integrisana, Intel UHD Graphics 630', '', '4-ćelijska, 70 Wh Li-ion polymer', '', 'Audio funkcije: Bang & Olufsen', 0, 0, 0),
(66, 'Laptopovi', 'HP', '2RR64EA', '71111 ', '38 x 25.3 cm', '1.86 kg', '15.6\" UHD', '1920 x 1080', 'Intel Core i5-7200U', '', '1 TB ', '8 GB', 'Crna', 'Windows 10 Profesonal', 'DA', 'DA', 'DA', 'Intel HD Graphics 620', '', '4-cell, 41 Wh Li-ion', '', '1 multi-format digitalni čitač kartica', 0, 0, 0),
(67, 'Laptopovi', 'Lenovo', '81T0004CYA', '97781', '70.5x143.7mm', '2.5 kg', '15,6\" IPS Anti-Glare', '1920 x 1080 px', 'Intel Core i5-9300HF Quad Core', '', '512 GB ', '8 GB ', 'Crna', 'Windows Home 10', 'DA', 'DA', 'DA', 'NVIDIA GeForce GTX 1650 4 GB GDDR5', '', 'Integrisana, 52,5 Wh', '', 'Crveno LED osvetljenje', 0, 0, 0),
(68, 'Laptopovi', 'Lenovo', '81NS005EYA', '142231 ', '70.5x143.7mm', '3KG', '15,6\" IPS Anti-Glare', '1920 x 1080 px', 'Intel Core i5-9300HF Quad Core', '', '1 TB', '16 GB', 'Crna', 'Windows Home 10', 'DA', 'DA', 'DA', 'NVIDIA GeForce RTX 2060 6 GB GDDR6', '', 'Integrisana, 57 Wh', '', 'Crveno LED osvetljenje', 0, 0, 0),
(69, 'Foto-Kamere', 'Sony', 'Cyber-shot DSC-W830B', '15490 ', '70.5x143.7mm', '500g', '', '', '', 'Približno 20,1 megapiksela', '50 GB', '', 'Crna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(70, 'Foto-Kamere', 'Sony', 'Cyber-shot DSC-W830S ', '15490 ', '9.31 x 5.255 cm', '120 g', '', '', '', 'Približno 20,1 megapiksela', '50 Gb', '', 'Srebrna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(71, 'Foto-Kamere', 'Canon', 'PowerShot SX430BLK ', '27999 ', '104,4 x 69,1 mm', ' 323 g ', '', '', '', '20.5 Mpix', '120 GB', '', 'Crna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(72, 'Foto-Kamere', 'Canon', 'EOS 2000D ', '43990 ', '101,3x 129 mm', '475 g ', '', '', '', '24,1 MP', '100 Gb', '', 'Crna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(73, 'Foto-Kamere', 'GoPro', 'HERO5 ', '39990 ', '70.5x143.7mm', '1 kg', '', '', '', '37Mpix', '250 GB', '', 'Crna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(74, 'Foto-Kamere', 'Nikon', ' A1000 ', '47990 ', '114 x 71,7 mm ', '330 g', '', '', '', '35 mpix', '25 GB', '', 'Siva', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(75, 'Foto-Kamere', 'Propel', 'Dron Star Wars ', '7999', '19.3 x 10.9 cm', '2.6 Kg', '', '', '', '70 Mpix', '500 Gb', '', 'Srebrna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(76, 'Foto-Kamere', 'Denver', 'Dron DCH-640', '13990 ', '640 x 200 mm ', '592 g', '', '', '', '2.0 MpixD', '50 Gb', '', 'Crna', '', '', 'DA', 'DA', '', '', '', '', '', 0, 0, 0),
(77, 'Audio', 'Sony', 'CMTSBT 20 CEL', '11548 ', '170 x 131,5 cm', '5 KG', 'Radio RDS', '', '', '', '', '', 'Crna', 'Mini linija', '/', 'DA', '', '', '', '', '', 'mp3/WMA/WALKMAN', 0, 0, 0),
(78, 'Audio', 'Sony', 'MHC V11 CEL', '23105 ', '290 x 600 mm', '4 KG', 'LCD Radio RDS', '', '', '', '', '', 'Crna', 'Mini linija', 'DA', 'DA', '', '', '', '', '', 'Bass Mega bass LED osvetljenje zvučnika', 0, 0, 0),
(79, 'Audio', 'LG', 'CM 2460', '13326 ', '70.5x143.7mm', '3 KG', 'Radio RDS LCD', '', '', '', '', '', 'Crna', 'Mini linija', 'DA', 'DA', '', '', '', '', '', 'CD reprodukcija Wireless Sound Sync', 0, 0, 0),
(80, 'Audio', 'LG', 'CK43', '17771 ', '300x163 mm', '7 KG', 'LCD Radio RDS', '', '', '', '', '', 'Crna', 'Mini linija', 'DA', 'DA', '', '', '', '', '', 'Sinhronizacija sa TV uređajima', 0, 0, 0),
(81, 'Audio', 'Panasonic', 'SC-HC200EG ', '12437 ', '400  x 197 mm', '1,9 kg', 'Radio RDS', '', '', '', '', '', 'Bela', 'Android', 'DA', 'DA', '', '', '', '', '', 'Funkcija bežične reprodukcije zvuka', 0, 0, 0),
(82, 'Audio', 'Pioneer', 'X-CM56-B', '19105 ', '200 x 129 mm', '4 kg', 'Radio RDS LCD', '', '', '', '', '', 'Crna', 'Mini linija', 'DA', 'DA', '', '', '', '', '', 'Bluetooth Wireless Technology ', 0, 0, 0),
(83, 'Audio', 'Pioneer', 'X-CM42BT-K', '28447 ', '20 x 12,3 cm ', '2.5 KG', 'Radio RDS', '', '', '', '', '', 'Crna', 'Mini linija', 'DA', 'DA', '', '', '', '', '', 'Bluetooth: Automatska Bluetooth konekcija', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `television`
--

DROP TABLE IF EXISTS `television`;
CREATE TABLE IF NOT EXISTS `television` (
  `television_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `television_brand` varchar(20) NOT NULL,
  PRIMARY KEY (`television_id`),
  UNIQUE KEY `television_id_UNIQUE` (`television_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `television`
--

INSERT INTO `television` (`television_id`, `television_brand`) VALUES
(1, 'Sony'),
(2, 'Samsung'),
(3, 'LG'),
(4, 'Hisense'),
(5, 'Vox'),
(8, 'Tesla');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_name` varchar(20) NOT NULL,
  `users_lastname` varchar(30) NOT NULL,
  `users_email` varchar(45) NOT NULL,
  `users_password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `users_addres` varchar(45) NOT NULL,
  `users_status` varchar(15) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `users_phone` varchar(13) NOT NULL,
  PRIMARY KEY (`users_id`),
  UNIQUE KEY `users_id_UNIQUE` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_lastname`, `users_email`, `users_password`, `confirm_password`, `users_addres`, `users_status`, `time`, `users_phone`) VALUES
(1, 'Boris', 'Perković', 'bboris@gmail.com', 'boris20', 'boris20', 'ta i ta ta i ta', 'Administrator', '2020-07-09 13:06:43', '11111111'),
(2, 'Nikola', 'Draganić', 'bbakari@gmail.com', 'bbakari1lmQQBq5MqhyN', 'bbakari1lmQQBq5MqhyN', 'Fontana Kruzni Tok', 'Administrator', '2020-07-09 14:58:57', '22222222'),
(5, 'Kristina', 'Čičić', 'kkile@gmail.com', 'kkile202lmQQBq5MqhyN', 'kkile202lmQQBq5MqhyN', 'ta i ta ta i ta', 'Menadžer', '2020-07-09 23:39:25', '123444'),
(12, 'Mikicaa', 'Mikić', 'mmikica@gmail.com', 'mmikica2lmQQBq5MqhyN', 'mmikica2lmQQBq5MqhyN', '123456', '', '2020-07-10 23:35:27', '123456'),
(13, 'Mile', 'Diznić', 'mdizna@gmail.com', 'mmile101lmQQBq5MqhyN', 'mmile101lmQQBq5MqhyN', 'dsadasdad', 'Menadžer', '2020-07-11 00:15:13', '753951'),
(18, 'Đorđije', 'Ilić', 'djoka@gmail.com', 'djoka111lmQQBq5MqhyN', 'djoka111lmQQBq5MqhyN', 'ddsadadad', 'Prodavac', '2020-07-11 01:14:22', '145654'),
(20, 'Joca', 'Karburator', 'jjoca@gmail.com', 'jjoca111lmQQBq5MqhyN', 'jjoca111lmQQBq5MqhyN', 'sadadad', 'Prodavac', '2020-07-13 03:07:16', 'dsadsadad'),
(21, 'Milenko', 'Milenić', 'mmilneko@gmail.com', 'mmilenkolmQQBq5MqhyN', 'mmilenkolmQQBq5MqhyN', '27 marta 18', '', '2020-07-16 21:56:21', '123789'),
(22, 'Marko', 'Marković', 'mmare@gmail.com', 'mmare111lmQQBq5MqhyN', 'mmare111lmQQBq5MqhyN', 'dsadasdasd', '', '2020-07-18 23:41:45', 'dsadd'),
(23, 'Milena', 'Milenić', 'mmilena@gmail.com', 'mmilena1lmQQBq5MqhyN', 'mmilena1lmQQBq5MqhyN', 'asdasd', '', '2020-07-20 22:50:26', '456852'),
(24, 'Mile', 'Milić', 'mmile@gmail.com', 'mmile12lmQQBq5MqhyN', 'mmile12lmQQBq5MqhyN', 'miletova br 5', '', '2020-07-22 06:58:46', '4567532'),
(25, 'Boško', 'Bogojević', 'bbosko@gmail.com', 'bboskolmQQBq5MqhyN', 'bboskolmQQBq5MqhyN', 'Munze Konza', 'Administrator', '2020-07-22 07:50:13', '11122233'),
(26, 'Marko', 'Bojić', 'skyppy@gmail.com', 'markickumlmQQBq5MqhyN', 'markickumlmQQBq5MqhyN', 'blabla', '', '2020-08-02 16:34:00', '1316546465'),
(27, 'Duško', 'Dugouško', 'duško@gmail.com', 'duško', 'duško', 'duškova13', '', '2021-01-05 11:31:05', '456874123'),
(28, 'Talični', 'Tom', 'talični@gmail.com', 'talični', 'talični', 'talična 45', '', '2021-01-05 11:39:35', '456782313');

-- --------------------------------------------------------

--
-- Structure for view `orders`
--
DROP TABLE IF EXISTS `orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orders`  AS  select `users`.`users_id` AS `users_id`,`users`.`users_name` AS `users_name`,`users`.`users_lastname` AS `users_lastname`,`users`.`users_email` AS `users_email`,`users`.`users_addres` AS `users_addres`,`users`.`users_phone` AS `users_phone`,`specification`.`specification_id` AS `specification_id`,`specification`.`category` AS `category`,`specification`.`products_brand` AS `products_brand`,`specification`.`products_model` AS `products_model`,`specification`.`price` AS `price`,`basket`.`basket_id` AS `basket_id`,`basket`.`accepted` AS `accepted`,`basket`.`shop_time` AS `shop_time` from (`specification` left join (`basket` left join `users` on((`users`.`users_id` = `basket`.`users_id`))) on((`basket`.`products_model` = `specification`.`products_model`))) order by `basket`.`basket_id` ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket_has_specification`
--
ALTER TABLE `basket_has_specification`
  ADD CONSTRAINT `fk_basket_has_specification_basket` FOREIGN KEY (`basket_basket_id`) REFERENCES `basket` (`basket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_basket_has_specification_specification1` FOREIGN KEY (`specification_sepcification_id`) REFERENCES `specification` (`specification_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_specification1` FOREIGN KEY (`specification_specification_id`) REFERENCES `specification` (`specification_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
