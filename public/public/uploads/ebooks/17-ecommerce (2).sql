-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2018 at 11:04 PM
-- Server version: 5.7.20
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `first_name` int(20) NOT NULL,
  `last_name` int(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `active` bit(1) NOT NULL DEFAULT b'1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icon` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `active`, `create_at`, `icon`) VALUES
(1, 'Samsung Smart Phone', 0, b'1', '2017-08-07 09:35:30', '1-clock.png'),
(9, 'test', 0, b'0', '2017-08-07 09:21:42', NULL),
(10, 'test', 0, b'0', '2017-08-07 09:22:32', NULL),
(11, '2', 0, b'0', '2017-08-07 09:22:57', NULL),
(12, 'test', 0, b'0', '2017-08-07 09:32:01', NULL),
(13, 'cat1', 0, b'0', '2017-08-07 09:32:28', NULL),
(14, 'cat2', 0, b'0', '2017-08-07 09:32:43', NULL),
(16, 'Deskopt Computer', 0, b'1', '2017-08-07 09:36:12', '16-email.png'),
(17, 'Laptop Computer', 0, b'1', '2017-08-07 09:38:04', '17-coding.jpg'),
(18, 'Dell Server', 0, b'1', '2017-08-07 09:38:42', '18-cube.png'),
(19, 'Home Appliance', 0, b'1', '2017-08-07 09:55:36', '19-arrow-up.png'),
(20, 'Apple Product', 0, b'1', '2017-08-07 09:58:21', '20-delete.png'),
(21, 'iPad', 20, b'1', '2018-02-09 05:45:07', '21-js_logo.png'),
(22, 'Test 1', 0, b'0', '2018-02-09 08:12:48', NULL),
(23, 'OnePlus', 0, b'1', '2018-02-09 08:16:12', '23-cvcd.gif'),
(24, 'sdfasdf', 0, b'0', '2018-02-09 08:17:45', NULL),
(25, 'HTC', 0, b'1', '2018-02-09 08:19:01', '25-buzz.png'),
(26, 'iPhone', 20, b'1', '2018-02-09 08:53:22', '26-cube.png'),
(27, 'McBook', 20, b'1', '2018-02-09 08:53:37', '27-cube.png'),
(28, 'Sumsung Galaxy', 20, b'1', '2018-02-09 09:24:56', '28-74d2f6f7-ec0b-4617-9304-c08543d651c5.png'),
(29, 'Sumsung Galaxy', 20, b'1', '2018-02-09 09:26:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL DEFAULT 'Male',
  `dob` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recovery_mode` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `gender`, `dob`, `phone`, `email`, `username`, `password`, `active`, `create_at`, `recovery_mode`) VALUES
(1, 'PEN', 'Oudom', 'Male', NULL, '017837754', 'hengvongkol@vdoo.biz', 'oudom', '$2y$10$2fbdkgGy5wFdQj2EGrVd7uh.wiPtlaFLdcPkBuZnku.DnofRlWTLW', b'1', '2017-12-13 12:38:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `product_id`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `description` text,
  `price` float NOT NULL DEFAULT '0',
  `type` varchar(30) DEFAULT NULL,
  `product_number` int(11) NOT NULL DEFAULT '0',
  `day_number` int(11) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `price`, `type`, `product_number`, `day_number`, `active`, `create_at`) VALUES
(1, 'Vichey', NULL, 11, 'Hourly', 0, 11, b'0', '2017-12-14 14:29:55'),
(2, '111ssss', NULL, 0, NULL, 0, 0, b'0', '2017-12-14 14:32:41'),
(3, 'Pro Plan', 'Pro level', 10, 'Monthy', 50, 30, b'1', '2017-12-14 16:08:46'),
(4, 'Enterprise Plan', 'Unlimited products', 50, 'Annually', 10000, 365, b'1', '2017-12-14 16:09:17'),
(5, 'Basic Plan', 'Basic plan for starter', 5, 'Monthy', 20, 30, b'1', '2017-12-14 16:09:41'),
(6, 'Free Plan', 'Free for all customer!', 0, 'Annually', 10, 365, b'1', '2017-12-14 16:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `package_types`
--

CREATE TABLE `package_types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `active` bit(1) DEFAULT b'1',
  `create_ate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_types`
--

INSERT INTO `package_types` (`id`, `name`, `active`, `create_ate`) VALUES
(1, 'Monthy', b'1', '2017-12-14 14:34:10'),
(2, 'Semester', b'1', '2017-12-14 14:34:18'),
(3, 'Annually', b'1', '2017-12-14 14:34:23'),
(4, 'Quaterly', b'1', '2017-12-14 14:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` longtext,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `url` varchar(200) NOT NULL DEFAULT '#',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `active`, `url`, `create_at`) VALUES
(1, 'About Us', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, 'page/view/1', '2017-12-18 08:22:12'),
(2, 'Contact Us', '<p>Contact Number: 096 2555 209</p>\r\n\r\n<p>Contact Name: Sor Vichey</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 1, 'page/view/2', '2017-12-18 08:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `list` tinyint(4) NOT NULL DEFAULT '0',
  `insert` tinyint(4) NOT NULL DEFAULT '0',
  `update` tinyint(4) NOT NULL DEFAULT '0',
  `delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `list`, `insert`, `update`, `delete`) VALUES
(1, 'Branch', 0, 0, 0, 0),
(2, 'Class', 0, 0, 0, 0),
(3, 'School Year', 0, 0, 0, 0),
(4, 'Room', 0, 0, 0, 0),
(5, 'Subject', 0, 0, 0, 0),
(6, 'Student', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) NOT NULL,
  `file_name` varchar(80) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(230) DEFAULT NULL,
  `is_front` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file_name`, `product_id`, `create_at`, `title`, `is_front`) VALUES
(11, '5-bootstrap.png', 5, '2018-02-09 01:47:57', NULL, 1),
(12, '5-banner.jpg', 5, '2018-02-09 03:04:57', NULL, 1),
(13, '5-banner_1.png', 5, '2018-02-09 03:04:57', NULL, 1),
(14, '5-banner_access.png', 5, '2018-02-09 03:04:57', NULL, 1),
(15, '5-basic-programming.jpg', 5, '2018-02-09 03:04:57', NULL, 1),
(16, '5-bootstrap.png', 5, '2018-02-09 03:04:57', NULL, 1),
(17, '5-brendan-eich-2-sized.jpg', 5, '2018-02-09 03:04:57', NULL, 1),
(18, '5-buzz.png', 5, '2018-02-09 03:04:57', NULL, 1),
(19, '5-cat-bg.jpg', 5, '2018-02-09 03:04:57', NULL, 1),
(20, '5-clock.png', 5, '2018-02-09 03:04:57', NULL, 1),
(22, '2-s_1607061818521.jpg', 2, '2018-02-09 15:34:28', NULL, 10),
(23, '7-s_1607061806341.jpg', 7, '2018-02-09 15:35:44', NULL, 1),
(24, '7-s_1607061805571.jpg', 7, '2018-02-09 15:35:44', NULL, 1),
(25, '7-s_1607061805291.jpg', 7, '2018-02-09 15:35:44', NULL, 10),
(26, '7-s_1607061805051.jpg', 7, '2018-02-09 15:35:44', NULL, 1),
(27, '7-s_1607061802291.jpg', 7, '2018-02-09 15:35:45', NULL, 1),
(28, '7-s_1607061801501.jpg', 7, '2018-02-09 15:35:45', NULL, 1),
(29, '7-s_1607061801101.jpg', 7, '2018-02-09 15:35:45', NULL, 1),
(30, '7-s_1607061800271.jpg', 7, '2018-02-09 15:35:45', NULL, 1),
(31, '8-s_1607061823591.jpg', 8, '2018-02-09 15:36:25', NULL, 1),
(32, '8-s_1607061818521.jpg', 8, '2018-02-09 15:36:25', NULL, 1),
(33, '8-s_1607061817391.jpg', 8, '2018-02-09 15:36:25', NULL, 1),
(34, '8-s_1607061816561.jpg', 8, '2018-02-09 15:36:25', NULL, 1),
(35, '8-s_1607061805571.jpg', 8, '2018-02-09 15:36:25', NULL, 1),
(36, '8-s_1607061802291.jpg', 8, '2018-02-09 15:36:25', NULL, 1),
(37, '8-s_1607061801101.jpg', 8, '2018-02-09 15:36:25', NULL, 0),
(38, '1-Selection_009.png', 1, '2018-02-09 16:05:21', NULL, 0),
(39, '1-27661602_733997063457898_1369292033_n.jpg', 1, '2018-02-09 16:38:45', NULL, 0),
(45, '9-7507778025254492616.jpeg', 9, '2018-02-09 16:40:07', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` float NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL DEFAULT '0',
  `model` varchar(90) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `description` longtext,
  `short_description` text,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `min_price` float NOT NULL,
  `max_price` float NOT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `shop_id`, `quantity`, `price`, `discount`, `model`, `active`, `description`, `short_description`, `create_at`, `category_id`, `min_price`, `max_price`, `is_featured`) VALUES
(1, 'Iphone 8111', 2, 1, 25.98, 221, '111', b'1', 'OUKESHI Stainless if you wan tto tchange model place Steel Quartz Men Watch Top Watch Top Brand in Cambodia Brand Luxury', 'SINOBI Creative Rotation Stainless Steel Mesh Strap Men', '2017-12-28 06:39:35', 16, 12111, 50.3, 1),
(2, 'Smart Watch', 1, 1, 111, 100, '111', b'1', NULL, 'OUKESHI Stainless if you wan tto tchange model place Steel Quartz Men Watch Top Watch Top Brand in Cambodia Brand Luxury', '2017-12-28 06:39:36', 1, 12111, 27.78, 1),
(3, 'Eletronic', 1, 1, 20.01, 111, '', b'1', NULL, 'BINZI Sports Wrist Watch Silicone LED Digital Watch', '2017-12-28 08:07:28', 1, 14, 29.01, 1),
(4, 'Beauty Salon', 1, 1, 18.98, 111, '', b'1', NULL, 'BINZI Sports Wrist Watch Silicone LED Digital Watch', '2017-12-28 08:07:30', 1, 14, 20.99, 1),
(9, '11', 2, 0, 0, 0, '111', b'1', NULL, NULL, '2018-02-09 16:39:26', 20, 0, 0, 0),
(6, 'OnePlus 5', 2, 6, 599, 10, 'OnePlus', b'1', 'test', 'Test', '2018-01-15 15:10:51', 1, 400, 699, 1),
(7, 'Sumsung Galaxy', 2, 0, 100, 20, '11', b'1', 'OUKESHI Stainless if you wan tto tchange model place Steel Quartz Men Watch Top Watch Top Brand in Cambodia Brand Luxury', 'OUKESHI Stainless if you wan tto tchange model place Steel Quartz Men Watch Top Watch Top Brand in Cambodia Brand Luxury', '2018-02-09 15:35:04', 20, 0, 0, 1),
(8, 'Sumsung Galaxy', 2, 0, 200, 10, '11', b'1', NULL, NULL, '2018-02-09 15:36:14', 20, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrator'),
(4, 'អ្នកបញ្ចូលទិន្នន័យ'),
(5, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `list` int(11) NOT NULL DEFAULT '0',
  `insert` int(11) NOT NULL DEFAULT '0',
  `update` int(11) NOT NULL DEFAULT '0',
  `delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `list`, `insert`, `update`, `delete`) VALUES
(1, 1, 1, 0, 1, 1, 1),
(2, 1, 6, 0, 1, 1, 1),
(3, 1, 5, 1, 0, 1, 1),
(4, 1, 4, 0, 1, 1, 1),
(5, 1, 3, 1, 0, 1, 1),
(6, 1, 2, 0, 1, 1, 1),
(7, 4, 2, 1, 0, 0, 0),
(8, 4, 3, 1, 0, 0, 0),
(9, 4, 4, 1, 0, 0, 0),
(10, 4, 5, 1, 0, 0, 0),
(11, 4, 6, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` text,
  `address` varchar(120) DEFAULT NULL,
  `contact_person` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `logo` varchar(80) DEFAULT 'default.png',
  `status` bit(1) NOT NULL DEFAULT b'0',
  `payment` varchar(120) DEFAULT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shop_owner_id` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `description`, `address`, `contact_person`, `phone`, `email`, `logo`, `status`, `payment`, `active`, `create_at`, `shop_owner_id`) VALUES
(1, 'Vita A9', 'Sell all women products', 'Phnom Penh, Cambodia', 'Vongkol', '086397627', 'vitashop@gmail.com', 'css3.png', b'0', 'Cash/Wing/Bank', b'1', '2017-12-13 12:31:13', 1),
(2, 'Vdoo Solutions', 'testset', 'Salor 2004, Phnom Penh, Cambodia', '1234567891', '111', '111@gmail.com', 'kruta_logo.png', b'0', 'wing account', b'1', '2017-12-14 16:25:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop_owners`
--

CREATE TABLE `shop_owners` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(90) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `recovery_mode` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_owners`
--

INSERT INTO `shop_owners` (`id`, `first_name`, `last_name`, `gender`, `dob`, `phone`, `email`, `username`, `password`, `create_at`, `active`, `recovery_mode`) VALUES
(1, 'HENG', 'Vongkol', 'Male', '10/02/1987', '086397627', 'hengvongkol@gmail.com', 'vongkol', '$2y$10$yWLV4HrpkNNxV7Z4ICYTTutqaVO/u58T8ogjWWlGqgazW8qIYjrNW', '2017-12-13 12:28:30', 1, 0),
(2, 'Vichey', 'sor', 'Male', '11/11/1111', '097336363633', 'sorvichey@gmail.com', 'vichey', '$2y$10$/HEoy9EZoZfeZ/UXEc16..rfdls1aMQfPKYiGC0cyIMUc9JRCnFge', '2017-12-14 05:31:16', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(80) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `photo`, `create_at`, `active`) VALUES
(1, 'Wedoo', 'post-4.jpg', '2018-02-11 03:14:45', 1),
(2, 'Vdoo Solutions', 'post-4.png', '2018-02-11 03:19:03', 1),
(3, 'Vdoo Solutionss', 'fish.jpg', '2018-02-11 03:19:24', 0),
(4, 'Vdoo Solutions', 'dream_village_hd.jpg', '2018-02-11 03:36:38', 0),
(5, 'Vdoo Solutions', 'post-4.png', '2018-02-11 15:37:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) NOT NULL,
  `shop_owner_id` bigint(20) NOT NULL,
  `package_id` int(11) NOT NULL,
  `expired_date` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `day_number` int(11) NOT NULL,
  `product_number` int(11) DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `active` bit(1) NOT NULL DEFAULT b'1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `shop_owner_id`, `package_id`, `expired_date`, `price`, `day_number`, `product_number`, `status`, `active`, `create_at`) VALUES
(1, 1, 1, '2017-12-25', 11, 11, 111, b'1', b'0', '2017-12-14 14:49:16'),
(2, 2, 1, '2017-12-25', 11, 1111, 111, b'1', b'0', '2017-12-14 14:49:26'),
(3, 11, 1, '2017-12-25', 11, 11, 0, b'0', b'1', '2017-12-14 14:56:14'),
(4, 11111, 1, '2017-12-25', 11, 11, 0, b'0', b'1', '2017-12-14 14:56:17'),
(5, 2, 3, '2017-12-18', 200, 3, 3, b'0', b'0', '2017-12-15 02:15:05'),
(6, 2, 4, '2017-12-15', 300, 0, 0, b'0', b'0', '2017-12-15 02:15:20'),
(7, 2, 5, '2017-12-15', 2222, 0, 0, b'0', b'0', '2017-12-15 02:15:49'),
(8, 2, 5, '2017-12-15', 2222, 0, 0, b'0', b'0', '2017-12-15 02:20:31'),
(9, 2, 5, '2017-12-15', 2222, 0, 0, b'0', b'0', '2017-12-15 02:24:02'),
(10, 2, 6, '2017-12-15', 3333, 0, 222, b'0', b'0', '2017-12-15 02:24:30'),
(11, 2, 4, '2017-12-15', 300, 0, 0, b'1', b'0', '2017-12-15 02:26:13'),
(12, 2, 4, '2017-12-15', 300, 0, 0, b'1', b'0', '2017-12-15 02:32:45'),
(13, 2, 5, '2017-12-15', 2222, 0, 0, b'0', b'0', '2017-12-15 02:41:40'),
(14, 2, 6, '2017-12-15', 3333, 0, 222, b'0', b'0', '2017-12-15 02:45:07'),
(15, 2, 5, '2017-12-15', 2222, 0, 0, b'0', b'0', '2017-12-15 03:00:00'),
(16, 2, 4, '2017-12-18', 300, 0, 0, b'0', b'0', '2017-12-18 09:17:14'),
(17, 2, 5, '2017-12-18', 2222, 0, 0, b'0', b'1', '2017-12-18 16:04:36'),
(18, 1, 3, '2018-01-09', 200, 3, 3, b'0', b'0', '2018-01-06 08:01:25'),
(19, 1, 6, '2019-01-06', 0, 365, 15, b'1', b'0', '2018-01-06 16:03:30'),
(20, 1, 4, '2019-02-09', 50, 365, 10000, b'0', b'1', '2018-02-09 16:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `role_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `photo`, `language`, `role_id`) VALUES
(1, 'vongkol', 'admin@gmail.com', '$2y$10$Gsp.GBk0VSV6gCITRnG3..y1G8hVzU86HlXA9kl1CQ46vIq/EU/ey', '53BqMdUzHtmmAuU4L2Bm5UB9b78IkdtkifhjcblB8zQqgxVUwRiBBvXhQXq4', '2017-05-27 22:35:52', '2017-05-27 22:35:52', 'vongkol-photo.jpg', 'en', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_types`
--
ALTER TABLE `package_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_owners`
--
ALTER TABLE `shop_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package_types`
--
ALTER TABLE `package_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_owners`
--
ALTER TABLE `shop_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
