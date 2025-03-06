-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 03:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `dateofbirth` date NOT NULL COMMENT 'วันเดือนปีเกิด',
  `telephone_number` varchar(255) NOT NULL COMMENT 'เบอร์ติดต่อ',
  `user_type` int(11) NOT NULL COMMENT 'ชนิดของผู้ใช้งาน',
  `name_image` varchar(255) NOT NULL COMMENT 'รูปโปรไฟล์',
  `housenumber` int(11) NOT NULL COMMENT 'เลขที่บ้าน',
  `VillageNumber` varchar(255) NOT NULL COMMENT 'หมู่ที่',
  `Alley` varchar(255) NOT NULL COMMENT 'ซอย',
  `Road` varchar(255) NOT NULL COMMENT 'ถนน',
  `Sub-district` varchar(255) NOT NULL COMMENT 'ตำบล แขวง',
  `District` varchar(255) NOT NULL COMMENT 'อำเภอ เขต',
  `Province` varchar(255) NOT NULL COMMENT 'จังหวัด',
  `Postal Code` varchar(255) NOT NULL COMMENT 'รหัสไปษณี',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
