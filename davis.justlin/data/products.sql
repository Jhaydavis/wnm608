-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: wolgast.pdx1-mysql-a7-2a.dreamhost.com
-- Generation Time: Apr 15, 2022 at 03:57 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `image_thumbnail` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_hires` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `inventory_status` tinyint(1) NOT NULL,
  `inventory_qty` int NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `type`, `image_thumbnail`, `image_hires`, `inventory_status`, `inventory_qty`, `date_added`, `date_updated`) VALUES
(1, '911S', 'Large format oil painting of the 911S', '599.00', 'painting', 'img/painting-911s-tb.jpg', 'img/painting-911s-hr.jpg', 1, 911, '2022-04-15 15:24:11', '2022-04-15 15:24:11'),
(2, 'Cayman S', 'Large format oil painting of the Cayman S.', '599.00', 'painting', 'img/painting-caymans-tb.jpg', 'img/painting-caymans-hr.jpg', 1, 982, '2022-04-15 15:28:44', '2022-04-15 15:28:44'),
(3, '911 GT3', 'Large format acrylic painting of the 911 GT3.', '999.00', 'painting', 'img/painting-911gt3-tb.jpg', 'img/painting-911gt3-hr.jpg', 1, 911, '2022-04-15 15:31:12', '2022-04-15 15:31:12'),
(4, 'Cayman GT4', 'Large format acrylic painting of the new Cayman GT4.', '999.00', 'painting', 'img/painting-caymangt4-tb.jpg', 'img/painting-caymangt4-hr.jpg', 1, 982, '2022-04-15 15:32:58', '2022-04-15 15:32:58'),
(5, 'Taycan GTS', 'Large format gloss framed print of the Taycan GTS.', '599.00', 'print', 'img/print-tyacan4s-tb.jpg', 'img/print-tyacan4s-hr.jpg', 1, 100, '2022-04-15 15:34:48', '2022-04-15 15:34:48'),
(6, 'Panamera GTS', 'Large format gloss framed print of the Panamera GTS.', '599.00', 'print', 'img/print-panameragts-tb.jpg', 'img/print-panameragts-hr.jpg', 0, 0, '2022-04-15 15:34:48', '2022-04-15 15:34:48'),
(7, 'Taycan Turbo S', 'High quality large format print of the Taycan Turbo S.', '899.00', 'print', 'img/print-taycanturbos-tb.jpg', 'img/print-taycanturbos-hr.jpg', 1, 100, '2022-04-15 15:41:26', '2022-04-15 15:41:26'),
(8, 'Cayenne Turbo', 'High quality large format print of the Cayenne Turbo.', '799.00', 'print', 'img/cayenneturbo-tb.jpg', 'img/cayenneturbo-hr.jpg', 1, 100, '2022-04-15 15:41:26', '2022-04-15 15:41:26'),
(9, '911 Turbo S', 'High res multi purpose digital format image of the 911 Turbo S', '299.00', 'digital', 'img/digital-911turbos-tb.jpg', 'img/digital-911turbos-hr.jpg', 1, 911, '2022-04-15 15:45:03', '2022-04-15 15:45:03'),
(10, '718 Spyder', 'High res multi purpose digital format image of the 718 Spyder.', '199.00', 'digital', 'img/digital-718spyder-tb.jpg', 'img/digital-718spyder-hr.jpg', 1, 100, '2022-04-15 15:45:03', '2022-04-15 15:45:03'),
(11, 'Macan GTS', 'High resolution multi purpose digital format image of the new Macan GTS', '299.00', 'digital', 'img/digital-macangts-tb.jpg', 'img/digital-macangts-hr.jpg', 1, 100, '2022-04-15 15:49:43', '2022-04-15 15:49:43'),
(12, 'Boxster GTS', 'High resolution multi purpose digital format image of the new Boxster GTS.', '199.00', 'digital', 'img/digital-boxstergts-tb.jpg', 'img/digital-boxstergts-hr.jpg', 1, 100, '2022-04-15 15:49:43', '2022-04-15 15:49:43');

--
-- Indexes for dumped table
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
