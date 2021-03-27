-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 11:16 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataparsial`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noTelepon` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Admin OPD','Admin Ketua OPD','Super Admin','Admin Utama') COLLATE utf8_unicode_ci NOT NULL,
  `lingkup` enum('Provinsi') COLLATE utf8_unicode_ci NOT NULL,
  `namaOPD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `akses` enum('Aktif','Non Aktif') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `nama`, `email`, `noTelepon`, `foto`, `email_verified_at`, `username`, `password`, `role`, `lingkup`, `namaOPD`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123', 'Jhonal', 'jhonal@gmail.com', '123', '123', NULL, 'adminopd', '$2y$10$PxhxbAoeW568ViZFKOTIfuqRlGxEAyyMZ50GlaGP7foyc9igYrF5a', 'Admin OPD', 'Provinsi', 'Litbang', 'Aktif', NULL, '2021-03-23 22:33:43', '2021-03-23 22:33:43'),
(2, '456', 'Jhonal', 'jhonal2@gmail.com', '456', '456', NULL, 'adminketuaopd', '$2y$10$j6VvQHgKsHmuCeSKlJfGT.8am9ix66HYIbNnXcF1aqBNAYLOLw72S', 'Admin Ketua OPD', 'Provinsi', 'Litbang', 'Aktif', NULL, '2021-03-23 22:33:53', '2021-03-23 22:33:53'),
(3, '789', 'Jhonal', 'jhonal3@gmail.com', '789', '789', NULL, 'adminutama', '$2y$10$KO60I8pBRJiQkRJ7ZTkt/O6Z58lwVkBMz.bNxOX/kt89zFuFhRRye', 'Admin Utama', 'Provinsi', '-', 'Aktif', NULL, '2021-03-23 22:34:03', '2021-03-23 22:34:03'),
(4, '101', 'Jhonal', 'jhonal4@gmail.com', '101', '101', NULL, 'adminsuper', '$2y$10$/cqNBb5o3FVYZEYY0LdJIO.jdv/X9OKNcxcl9Me15H8ZglLefq2N.', 'Super Admin', 'Provinsi', '-', 'Aktif', NULL, '2021-03-23 22:34:12', '2021-03-23 22:34:12'),
(6, '112', 'kaleb', 'kaleb@gmail.com', '112', '112', NULL, 'adminopd1', '$2y$10$WQ2iJzh495slhuwTsnronOCve8CsVdAQYqPbQi5eSyGhixKlHXXWG', 'Admin OPD', 'Provinsi', 'Kominfo', 'Aktif', NULL, '2021-03-24 21:38:26', '2021-03-24 21:38:26'),
(8, '113', 'kaleb', 'kaleb2@gmail.com', '113', '113', NULL, 'adminketuaopd1', '$2y$10$u5.N5uLIluNk1IVc/WsolOb4n4IbermQFPCbg7dKWcGH32fvHotkG', 'Admin Ketua OPD', 'Provinsi', 'Kominfo', 'Aktif', NULL, '2021-03-24 21:39:39', '2021-03-24 21:39:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nip_unique` (`nip`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
