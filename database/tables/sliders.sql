-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 04, 2023 at 10:13 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom125_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `banner` text DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `starting_price` varchar(191) DEFAULT NULL,
  `btn_url` varchar(191) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `banner`, `type`, `title`, `starting_price`, `btn_url`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sliders/GWC7sc2yrhj6U40g11Ia1XMQgyEZgqH1tdEIRY80.jpg', 'men\'s fashion', '{\"en\":\"new arrivals\"}', '99.00', 'http://ecom125.com/admin/sliders?sort_field=status&sort_direction=asc', 1, 1, '2023-09-04 17:49:08', '2023-09-04 17:49:08'),
(2, 'sliders/KeOj9zXISg3C68YAzY5yuvGrF9wcBMLBRsrf6j77.jpg', 'kid\'s fashion', '{\"en\":\"new arrivals\"}', '49.00', NULL, 2, 1, '2023-09-04 18:04:41', '2023-09-04 18:04:41'),
(3, 'sliders/yN2IGtUAfZY09K6BqSzCZNI9z4u6wEFbsPp1QA9i.jpg', 'winter collection', '{\"en\":\"new arrivals\"}', '99', NULL, 3, 1, '2023-09-04 18:06:30', '2023-09-04 18:06:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
