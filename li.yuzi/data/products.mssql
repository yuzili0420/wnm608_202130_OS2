-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2021-04-22 02:32:43
-- 服务器版本： 5.6.49-cll-lve
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yuzili_wnm608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_thumb`, `image_other`, `description`) VALUES
(1, 'original_collagen_peptides', 29.00, '2021-04-07 01:31:22', '2021-04-22 01:37:06', 'powder', '/img/health/original_collagen_peptides_1.jpg', '/img/health/original_collagen_peptides_1.jpg', '/img/health/original_collagen_peptides_2.jpg,/img/health/original_collagen_peptides_3.jpg', ''),
(2, 'marine_collagen_peptides', 29.00, '2021-04-07 01:47:04', '2021-04-22 01:49:44', 'powder', '/img/health/marine_collagen_peptides_1.jpg', '/img/health/marine_collagen_peptides_1.jpg', '/img/health/marine_collagen_peptides_2.jpg,/img/health/marine_collagen_peptides_3.jpg', ''),
(3, 'beauty_collagen_peptides', 29.00, '2021-04-07 01:56:22', '2021-04-22 01:58:56', 'powder', '/img/health/beauty_collagen_peptides_1.jpg', '/img/health/beauty_collagen_peptides_1.jpg', '/img/health/beauty_collagen_peptides_2.jpg,/img/health/beauty_collagen_peptides_3.jpg', ''),
(4, 'vegan_collagen_peptides', 29.00, '2021-04-07 01:59:03', '2021-04-22 01:59:59', 'powder', '/img/health/vegan_collagen_peptides_1.jpg', '/img/health/vegan_collagen_peptides_1.jpg', '/img/health/vegan_collagen_peptides_2.jpg,/img/health/vegan_collagen_peptides_3.jpg', ''),
(5, 'collagen_peptides_coconut_breeze', 29.00, '2021-04-07 02:00:04', '2021-04-22 02:03:23', 'powder', '/img/health/collagen_peptides_coconut_breeze_1.jpg', '/img/health/collagen_peptides_coconut_breeze_1.jpg', '/img/health/collagen_peptides_coconut_breeze_2.jpg,/img/health/collagen_peptides_coconut_breeze_3.jpg', ''),
(6, 'collagen_peptides_very_berries', 29.00, '2021-04-07 02:03:25', '2021-04-22 02:05:10', 'powder', '/img/health/collagen_peptides_very_berries_1.jpg', '/img/health/collagen_peptides_very_berries_1.jpg', '/img/health/collagen_peptides_very_berries_2.jpg,/img/health/collagen_peptides_very_berries_3.jpg', ''),
(7, 'collagen peptides_rich_chocolate', 29.00, '2021-04-07 02:05:17', '2021-04-22 02:06:14', 'powder', '/img/health/collagen peptides_rich_chocolate_1.jpg', '/img/health/collagen peptides_rich_chocolate_1.jpg', '/img/health/collagen peptides_rich_chocolate_2.jpg,/img/health/collagen peptides_rich_chocolate_3.jpg', ''),
(8, 'collagen_peptides_super_green', 29.00, '2021-04-07 02:06:20', '2021-04-22 02:18:49', 'powder', '/img/health/collagen_peptides_super_green_1.jpg', '/img/health/collagen_peptides_super_green_1.jpg', '/img/health/collagen_peptides_super_green_2.jpg,/img/health/collagen_peptides_super_green_3.jpg', ''),
(9, 'original_collagen_capsules', 16.00, '2021-04-07 02:20:21', '2021-04-22 02:22:16', 'capsules', '/img/health/original_collagen_capsules_1.jpg', '/img/health/original_collagen_capsules_1.jpg', '/img/health/original_collagen_capsules_2.jpg,/img/health/original_collagen_capsules_3.jpg', ''),
(10, 'collagen_water_peach_punch', 3.99, '2021-04-07 02:22:17', '2021-04-22 02:25:53', 'water', '/img/health/collagen_water_peach_punch_1.jpg', '/img/health/collagen_water_peach_punch_1.jpg', '/img/health/collagen_water_peach_punch_2.jpg,/img/health/collagen_water_peach_punch_3.jpg', ''),
(11, 'collagen_water_aloha_guava', 3.99, '2021-04-07 02:25:55', '2021-04-22 02:27:16', 'water', '/img/health/collagen_water_aloha_guava_1.jpg', '/img/health/collagen_water_aloha_guava_1.jpg', '/img/health/collagen_water_aloha_guava_2.jpg,/img/health/collagen_water_aloha_guava_3.jpg', ''),
(12, 'collagen_water_green_tonic', 3.99, '2021-04-07 02:27:20', '2021-04-22 02:28:08', 'water', '/img/collagen_water_green_tonic_1.jpg', '/img/collagen_water_green_tonic_1.jpg', '/img/collagen_water_green_tonic_2.jpg,/img/collagen_water_green_tonic_3.jpg', ''),
(13, 'collagen_water_turmeric_tonic', 3.99, '2021-04-07 02:28:09', '2021-04-22 02:30:13', 'water', '/img/health/collagen_water_turmeric_tonic_1.jpg', '/img/health/collagen_water_turmeric_tonic_1.jpg', '/img/health/collagen_water_turmeric_tonic_2.jpg,/img/health/collagen_water_turmeric_tonic_3.jpg', ''),
(14, 'collagen_protein_blend', 3.99, '2021-04-07 02:30:16', '2021-04-22 02:31:29', 'powder', '/img/health/collagen_protein_blend_1.jpg', '/img/health/collagen_protein_blend_1.jpg', '/img/health/collagen_protein_blend_2.jpg,/img/health/collagen_protein_blend_3.jpg', '');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
