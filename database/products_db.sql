-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 09, 2025 at 07:53 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(2, 'Susu UHT', '250ml', 6600.00, 92, '2025-04-08 20:58:35', '2025-04-09 00:04:47'),
(4, 'Gula Pasir', '1kg', 35000.00, 69, '2025-04-08 20:58:35', '2025-04-09 00:05:31'),
(11, 'marjan', '500ml', 25000.00, 5, '2025-04-08 23:07:56', '2025-04-08 23:07:56'),
(12, 'Teh Sosro', '300ml', 5000.00, 232, '2025-04-09 00:06:26', '2025-04-09 00:06:26'),
(13, 'Kinderjoy', 'chocolate', 14000.00, 20, '2025-04-09 00:06:56', '2025-04-09 00:06:56'),
(14, 'beng beng max', 'chocolate', 4500.00, 32, '2025-04-09 00:45:10', '2025-04-09 00:45:10'),
(15, 'kusuka', '500g', 23000.00, 58, '2025-04-09 00:45:41', '2025-04-09 00:45:41'),
(16, 'freshtea', '450ml', 5400.00, 89, '2025-04-09 00:50:24', '2025-04-09 00:50:24'),
(17, 'Beras', '1 Liter', 28000.00, 38, '2025-04-09 00:51:02', '2025-04-09 00:51:02');

--
-- Indexes for dumped tables
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
