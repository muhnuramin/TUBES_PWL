-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:03 AM
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
(16, '2020_12_13_232934_defaultfasility', 13);

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
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `tipe`, `price`, `room_left`, `picture`, `created_at`, `updated_at`, `fasilitas`) VALUES
(1, 'Standard Room', '500000', '5', 'images/zuLMzxTJbT7D0ZYglfhxBk0TtIrWxGqawiKBa24K.jpg', NULL, '2020-12-13 18:35:01', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(2, 'Superior Room', '650000', '5', 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2020/02/1.-standard-room-sumber-gambar-Pixabay.jpg', NULL, NULL, '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(3, 'Deluxe Room', '7500000', '5', 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2020/02/2.-Superior-Room-sumber-gambar-Pixabay.jpg', NULL, NULL, '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(4, 'Standard Room', '900000', '5', 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2020/02/3.-Deluxe-Room-sumber-gambar-Pixabay.jpg', NULL, NULL, '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(5, 'Junior Suite Room', '1000000', '5', 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2020/02/4.-Junior-Suite-Room-sumber-gambar-Pixabay.jpg', NULL, NULL, '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access'),
(6, 'Presidential Suite', '1100000', '5', 'image/FAd0q1VPkFtHxBymkXp4hHK3ZsJzXIFsIrGikNfA.jpg', '2020-12-13 17:47:16', '2020-12-13 17:47:16', '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access');

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
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1@gmail.com', 'admin', NULL, 'admin', 'A', NULL, NULL, NULL);

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
  `jml_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_employee`
--

CREATE TABLE `users_employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Testimoni Kosong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_employee`
--

INSERT INTO `users_employee` (`id`, `email`, `name`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`, `testimoni`) VALUES
(1, '500000', 'Standard Room', NULL, '1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access', 'images/cMjEqQZkRmhipNymv4LuHaRK5Yvq0qo3KXylvD7D.jpg', NULL, NULL, '2020-12-13 18:28:01', 'Testimoni Kosong'),
(2, 'wildan@gmail.com', 'wildan', NULL, 'wildan', 'A', NULL, NULL, NULL, 'Testimoni Kosong');

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
-- Indexes for table `users_employee`
--
ALTER TABLE `users_employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_consumer_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_customer`
--
ALTER TABLE `users_customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_employee`
--
ALTER TABLE `users_employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
