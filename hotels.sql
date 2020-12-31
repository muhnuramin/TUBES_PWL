-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 02:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_11_162622_create_users_consumer', 2),
(5, '2020_12_11_170008_create_room', 3),
(6, '2020_12_11_170308_create_testimoni', 4),
(7, '2020_12_12_001202_add_testimoni_to_customer', 5),
(8, '2020_12_13_070721_add_star_testimoni', 6),
(9, '2020_12_13_083048_del_add_testi', 6),
(10, '2020_12_13_083417_del_colum', 7),
(11, '2020_12_13_083803_add_testi_default', 8),
(12, '2020_12_13_212301_rename_column_rooms', 9),
(13, '2020_12_13_223352_add_user_costumer', 10),
(14, '2020_12_13_224558_add_jmlkamar', 11),
(15, '2020_12_13_232344_default_fasilitas', 12),
(16, '2020_12_13_232934_defaultfasility', 13),
(17, '2020_12_15_035908_add_default_profile', 14),
(18, '2020_12_15_040108_add_default_profile', 15),
(19, '2020_12_16_123817_add_testi', 16),
(20, '2020_12_16_125015_add_testi_customer', 17),
(21, '2020_12_22_040224_add_roles', 18),
(22, '2020_12_26_122731_add_banyakkamar', 19),
(23, '2020_12_26_124846_test1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_left` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `tipe`, `price`, `room_left`, `picture`, `created_at`, `updated_at`, `fasilitas`) VALUES
(1, 'Standard Room', '500000', '5', 'images/rzjRtDOe1LMJhPvA9jkyDcdZkQQgMut8FO6T7JJj.jpg', NULL, '2020-12-30 12:42:01', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(2, 'Superior Room', '650000', '5', 'images/GLL5x8Bz79wZRjSAkCxbr8LAN2idcYrO9KpGegvv.jpg', NULL, '2020-12-14 15:26:11', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(3, 'Deluxe Room', '7500000', '5', 'images/B2kYexks15Jz2c4SY0BMlIhOHMXfHuZhfhRioQak.jpg', NULL, '2020-12-14 15:26:18', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(4, 'Junior Suite Room', '900000', '5', 'images/jYk7aaMzPa1gnAqvrPmEN8NLHmEn0AHKYkbPFXOM.jpg', NULL, '2020-12-14 15:26:27', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(5, 'Junior Suite Room', '1000000', '5', 'images/mGEaYU0bm6xOgn8EkOzqnwnqL3e9rdOOyCYrSXJx.jpg', NULL, '2020-12-14 15:26:41', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nilai` int(11) NOT NULL,
  `testi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Nama`, `Nilai`, `testi`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Nur Amin', 5, 'ini  hanya untuk tes', '2020-12-28 02:43:42', NULL),
(3, 'amin', 3, 'ini cuma tes', '2020-12-28 01:33:23', '2020-12-28 01:33:23'),
(4, 'amin', 1, 'as', '2020-12-28 02:04:08', '2020-12-28 02:04:08'),
(5, 'Soni', 5, 'good', '2020-12-28 02:22:01', '2020-12-28 02:22:01'),
(6, 'wildan', 1, 'coba', '2020-12-30 10:40:35', '2020-12-30 10:40:35'),
(7, 'test10', 2, 'test10', '2020-12-30 10:44:17', '2020-12-30 10:44:17'),
(8, 'test10', 2, 'test10', '2020-12-30 10:44:19', '2020-12-30 10:44:19'),
(9, 'test11', 1, 'test11', '2020-12-30 12:39:39', '2020-12-30 12:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kosong',
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Administrator'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile`, `roles`) VALUES
(1, 'admin1@gmail.com', 'admin', NULL, 'admin', NULL, NULL, '2020-12-14 15:51:58', 'images/jjuxWW4AdqLvDiy548g41SE7mathYTJ4DhsH0bGp.jpg', 'Administrator'),
(2, 'admin2@gmail.com', 'admin2', NULL, '$2y$10$txANQZMb/JnZOVM1dJaC7OFEHdgNDmULjFdOkLJd0cfFBw88wO4/q', NULL, '2020-12-14 21:05:44', '2020-12-30 12:42:50', 'images/kJQvyc6YjHEZk3QeAEwTF5QGyJLfkilTQPsQffUT.jpg', 'Administrator'),
(4, 'admin3@gmail.com', 'admin30', NULL, '$2y$10$4.nSJsP7VtFpcqgk.SM3I.zNg32hyyoyffEl3Blh5JQYpG/8R.9a2', NULL, '2020-12-30 18:15:12', '2020-12-30 18:17:15', 'images/DdQSI4EVAmYDERjkKdggo5ZfZbZ60Trv7mb8aGr5.gif', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users_customer`
--

CREATE TABLE `users_customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jml_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'kosong',
  `type_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_customer`
--

INSERT INTO `users_customer` (`id`, `nama`, `email`, `phone`, `alamat`, `remember_token`, `created_at`, `updated_at`, `jml_kamar`, `testimoni`, `type_room`) VALUES
(1, 'test1', 'test1', 'test1', 'test1', NULL, '2020-12-26 12:56:19', '2020-12-26 12:56:19', '1', 'kosong', 0),
(2, 'test2', 'test2', 'test2', 'test2', NULL, '2020-12-27 10:01:14', '2020-12-27 10:01:14', '2', 'kosong', 0),
(3, 'test4', 'test4', 'test4', 'test4', NULL, '2020-12-27 12:09:41', '2020-12-27 12:09:41', '2', 'kosong', 1),
(4, 'test5', 'test5', 'test5', 'test5', NULL, '2020-12-27 12:23:19', '2020-12-27 12:23:19', '2', 'kosong', 3),
(5, 'no4', 'no4', 'no4', 'no4', NULL, '2020-12-30 16:14:10', '2020-12-30 16:14:10', '2', 'kosong', 4),
(6, 'test10', 'test10', 'test10', 'test10', NULL, '2020-12-30 17:42:29', '2020-12-30 17:42:29', '1', 'kosong', 2),
(7, 'test11', 'test11', 'test11', 'test11', NULL, '2020-12-30 19:39:33', '2020-12-30 19:39:33', 'test11', 'kosong', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_customer`
--
ALTER TABLE `users_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_customer_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_customer`
--
ALTER TABLE `users_customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
