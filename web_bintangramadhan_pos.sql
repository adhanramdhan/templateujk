-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 11:38 AM
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
-- Database: `web_bintangramadhan_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `id_kategori`, `nama_barang`, `satuan`, `qty`, `harga`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Bodrex', 'tablet', '12', 16000, '2024-07-09 20:35:31', '2024-07-10 00:54:15', NULL),
(2, 1, 'Parecetamol', 'sirup', '12', 50000, '2024-07-09 21:35:13', '2024-07-10 00:54:11', NULL),
(4, 1, 'Gasternal', 'sirup', '1', 30000, '2024-07-09 21:57:23', '2024-07-09 21:57:35', NULL),
(5, 4, 'coca cola', 'kaleng', '12', 10000, '2024-07-10 00:54:41', '2024-07-10 00:54:41', NULL),
(6, 3, 'burger', 'extra large', '10', 5000, '2024-07-10 00:55:40', '2024-07-10 01:01:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualans`
--

CREATE TABLE `detail_penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double NOT NULL,
  `total_harga` double NOT NULL,
  `nominal_bayar` double NOT NULL,
  `kembalian` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_penjualans`
--

INSERT INTO `detail_penjualans` (`id`, `id_penjualan`, `id_barang`, `jumlah`, `qty`, `harga`, `total_harga`, `nominal_bayar`, `kembalian`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 15000, 15000, 15000, 0, '2024-07-10 04:05:08', '2024-07-10 04:05:08', NULL),
(3, 17, 1, 2, 3, 16000, 48000, 2, 2000, '2024-07-09 23:41:31', '2024-07-09 23:41:31', NULL),
(4, 19, 2, 1, 1, 50000, 50000, 5, 0, '2024-07-09 23:42:41', '2024-07-09 23:42:41', NULL),
(5, 20, 1, 1, 5, 16000, 80000, 1, 20000, '2024-07-09 23:43:34', '2024-07-09 23:43:34', NULL),
(6, 21, 2, 1, 3, 50000, 150000, 2, 50000, '2024-07-10 00:11:57', '2024-07-10 00:11:57', NULL),
(7, 22, 1, 1, 1, 16000, 16000, 1, 34000, '2024-07-10 00:26:38', '2024-07-10 00:26:38', NULL),
(8, 23, 1, 1, 1, 16000, 16000, 1, 34000, '2024-07-10 00:26:54', '2024-07-10 00:26:54', NULL),
(9, 25, 1, 2, 1, 16000, 16000, 5, 4000, '2024-07-10 00:27:32', '2024-07-10 00:27:32', NULL),
(10, 25, 4, 2, 1, 30000, 30000, 0, 4000, '2024-07-10 00:27:32', '2024-07-10 00:27:32', NULL),
(11, 35, 4, 1, 1, 30000, 30000, 5, 20000, '2024-07-10 00:40:31', '2024-07-10 00:40:31', NULL),
(12, 36, 1, 1, 2, 16000, 32000, 5, 18000, '2024-07-10 00:46:21', '2024-07-10 00:46:21', NULL),
(13, 37, 2, 2, 1, 50000, 50000, 1, 40000, '2024-07-10 02:21:15', '2024-07-10 02:21:15', NULL),
(14, 37, 5, 2, 1, 10000, 10000, 0, 40000, '2024-07-10 02:21:15', '2024-07-10 02:21:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barangs`
--

CREATE TABLE `kategori_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_barangs`
--

INSERT INTO `kategori_barangs` (`id`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'obat', '2024-07-09 20:15:22', '2024-07-10 00:53:01', NULL),
(3, 'makanan', '2024-07-09 20:18:48', '2024-07-10 00:53:05', NULL),
(4, 'minuman', '2024-07-09 20:18:53', '2024-07-10 00:53:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', '2024-07-09 19:32:18', '2024-07-09 19:32:18', NULL),
(2, 'Kasir', '2024-07-09 19:32:46', '2024-07-09 19:32:46', NULL),
(3, 'Pimpinan', '2024-07-09 19:32:53', '2024-07-09 19:56:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_10_015131_create_barangs_table', 1),
(5, '2024_07_10_015738_create_kategori_barangs_table', 1),
(6, '2024_07_10_015901_create_penjualans_table', 1),
(7, '2024_07_10_015932_create_detail_penjualans_table', 1),
(8, '2024_07_10_020004_create_levels_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `id_user`, `kode_transaksi`, `tanggal_transaksi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'TRX-1', '2024-07-10', '2024-07-10 04:04:27', '2024-07-10 04:04:27', NULL),
(17, 5, 'TRX-20240710-134102-5', '2024-07-10', '2024-07-09 23:41:31', '2024-07-09 23:41:31', NULL),
(18, 5, 'TRX-20240710-134102-5', '2024-07-10', '2024-07-09 23:42:06', '2024-07-09 23:42:06', NULL),
(19, 5, 'TRX-20240710-134227-5', '2024-07-10', '2024-07-09 23:42:41', '2024-07-09 23:42:41', NULL),
(20, 5, 'TRX-20240710-134252-5', '2024-07-10', '2024-07-09 23:43:34', '2024-07-09 23:43:34', NULL),
(21, 5, 'TRX-20240710-141126-5', '2024-07-10', '2024-07-10 00:11:57', '2024-07-10 00:11:57', NULL),
(22, 5, 'TRX-20240710-142235-5', '2024-07-10', '2024-07-10 00:26:38', '2024-07-10 00:26:38', NULL),
(23, 5, 'TRX-20240710-142235-5', '2024-07-10', '2024-07-10 00:26:54', '2024-07-10 00:26:54', NULL),
(24, 5, 'TRX-20240710-142235-5', '2024-07-10', '2024-07-10 00:27:07', '2024-07-10 00:27:07', NULL),
(25, 5, 'TRX-20240710-142714-5', '2024-07-10', '2024-07-10 00:27:32', '2024-07-10 00:27:32', NULL),
(26, 5, 'TRX-20240710-143413-5', '2024-07-10', '2024-07-10 00:34:37', '2024-07-10 00:34:37', NULL),
(27, 5, 'TRX-20240710-143413-5', '2024-07-10', '2024-07-10 00:35:41', '2024-07-10 00:35:41', NULL),
(28, 5, 'TRX-20240710-143548-5', '2024-07-10', '2024-07-10 00:36:23', '2024-07-10 00:36:23', NULL),
(29, 5, 'TRX-20240710-143820-5', '2024-07-10', '2024-07-10 00:38:36', '2024-07-10 00:38:36', NULL),
(30, 5, 'TRX-20240710-143820-5', '2024-07-10', '2024-07-10 00:39:00', '2024-07-10 00:39:00', NULL),
(31, 5, 'TRX-20240710-143820-5', '2024-07-10', '2024-07-10 00:39:02', '2024-07-10 00:39:02', NULL),
(32, 5, 'TRX-20240710-143908-5', '2024-07-10', '2024-07-10 00:39:31', '2024-07-10 00:39:31', NULL),
(33, 5, 'TRX-20240710-143908-5', '2024-07-10', '2024-07-10 00:39:45', '2024-07-10 00:39:45', NULL),
(34, 5, 'TRX-20240710-143947-5', '2024-07-10', '2024-07-10 00:39:59', '2024-07-10 00:39:59', NULL),
(35, 5, 'TRX-20240710-144018-5', '2024-07-10', '2024-07-10 00:40:31', '2024-07-10 00:40:31', NULL),
(36, 5, 'TRX-20240710-144453-5', '2024-07-10', '2024-07-10 00:46:21', '2024-07-10 00:46:21', NULL),
(37, 5, 'TRX-20240710-161852-5', '2024-07-10', '2024-07-10 02:21:15', '2024-07-10 02:21:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jhvTzjtgiGdT0gkY9BQB5Fg43ILALvKnsAfY6hb0', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZU5VNk9ZTTVGUUE2ZElNNXZpMzZHd0t4UXJ0cjg5RnQzUThqYzNlMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZW5qdWFsYW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1720603287);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_level`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bintang Ramadhan', 'adhan@gmail.com', NULL, '$2y$12$ZExx/11Xt12WGoW0J6NPoOV9NjWeCe4bZjW4LwQit.hpisCHOM.lG', NULL, NULL, NULL),
(5, 2, 'kasir adhan 1', 'kasir@gmail.com', NULL, '$2y$12$d.JUG8pDNJfDW9eaBzBjcum9K5gg18hWUU8Wlu/hGj64ksDjnQx/2', NULL, '2024-07-09 21:30:33', '2024-07-09 22:08:25'),
(6, 3, 'pimpinan adhan 1', 'pimpinan@gmail.com', NULL, '$2y$12$cMzmTgzENns2Qas1ZqVJy.Azawv256dS1dIsYe1/T/1OmZPISoowK', NULL, '2024-07-09 21:30:47', '2024-07-10 00:12:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_barangs`
--
ALTER TABLE `kategori_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_barangs`
--
ALTER TABLE `kategori_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
