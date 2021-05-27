-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2021-05-27 16:11:18
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
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `description`) VALUES
(1, 'The Original', 29.00, '2021-04-07 01:31:22', '2021-04-22 01:37:06', 'powder', 'img/health/the_original_1.jpg', ''),
(2, 'The Marine', 29.00, '2021-04-07 01:47:04', '2021-04-22 01:49:44', 'powder', 'img/health/the_marine_1.jpg', 'Made from the scales of fresh, non-GMO, wild-caught white fish off the coast of Alaska. It’s highly bioavailable, digestible and easily dissolves in hot and cold water.'),
(3, 'The Beauty', 29.00, '2021-04-07 01:56:22', '2021-04-22 01:58:56', 'powder', 'img/health/the_beauty_1.jpg', ''),
(4, 'The Vegan', 29.00, '2021-04-07 01:59:03', '2021-04-22 01:59:59', 'powder', 'img/health/the_vegan_1.jpg', ''),
(5, 'Coconut Breeze', 29.00, '2021-04-07 02:00:04', '2021-04-22 02:03:23', 'powder', 'img/health/coconut_breeze_1.jpg', ''),
(6, 'Very Berries', 29.00, '2021-04-07 02:03:25', '2021-04-22 02:05:10', 'powder', 'img/health/very_berries.jpg', ''),
(7, 'Rich Chocolate', 29.00, '2021-04-07 02:05:17', '2021-04-22 02:06:14', 'powder', 'img/health/rich_chocolate.jpg', ''),
(8, 'Super Green', 29.00, '2021-04-07 02:06:20', '2021-04-22 02:18:49', 'powder', 'img/health/super_green.jpg', ''),
(9, 'Peach Punch', 3.99, '2021-04-07 02:22:17', '2021-04-22 02:25:53', 'water', 'img/health/peach_punch.jpg', ''),
(10, 'Aloha Guava', 3.99, '2021-04-07 02:25:55', '2021-04-22 02:27:16', 'water', 'img/health/aloha_guava.jpg', ''),
(11, 'Green Tonic', 3.99, '2021-04-07 02:27:20', '2021-04-22 02:28:08', 'water', 'img/health/green_tonic.jpg', 'This collagen drink is a blend of nutrient-dense greens and herbs meant to invigorate the body and restore energy.'),
(12, 'Turmeric Tonic', 3.99, '2021-04-07 02:28:09', '2021-04-22 02:30:13', 'water', 'img/health/turmeric_tonic.jpg', '');

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
