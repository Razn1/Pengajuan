-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 02:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpengajuan`
--

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2024_01_10_021444_create_persetujuans_table', 1),
(15, '2024_01_10_021642_create_pengajuans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuans`
--

CREATE TABLE `pengajuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `judul_laporan` text NOT NULL,
  `proposal` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuans`
--

INSERT INTO `pengajuans` (`id`, `nis`, `judul_laporan`, `proposal`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 'judul', '1706081982_Latihan Soal PSAS DKV[1].pdf', 'proses', '2024-01-24 00:39:42', '2024-01-24 00:39:42'),
(2, 12, 'judul', '1706082015_SOAL PSTS GENAP_WEB2_XI PPLG.pdf', 'proses', '2024-01-24 00:40:15', '2024-01-24 00:40:15'),
(3, 1, 'judul', '1706083671_Latihan Soal PSAS DKV[1].pdf', 'proses', '2024-01-24 01:07:51', '2024-01-24 01:07:51'),
(4, 1, 'judul', '1706084479_Latihan Soal PSAS DKV[1].pdf', 'proses', '2024-01-24 01:21:19', '2024-01-24 01:21:19'),
(5, 1, 'contoh', '1706084571_SOAL PSTS GENAP_WEB2_XI PPLG.pdf', 'proses', '2024-01-24 01:22:51', '2024-01-24 01:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `persetujuans`
--

CREATE TABLE `persetujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `tanggal_acc` date NOT NULL,
  `status` enum('Diterima','Ditolak') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persetujuans`
--

INSERT INTO `persetujuans` (`id`, `nis`, `id_user`, `id_pengajuan`, `tanggal_acc`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 3, 1, '2024-01-24', 'Diterima', '2024-01-24 01:41:09', '2024-01-24 01:41:09'),
(2, 12, 3, 2, '2024-01-24', 'Ditolak', '2024-01-24 01:41:32', '2024-01-24 01:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` char(20) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `tempat_pkl` varchar(50) DEFAULT NULL,
  `no_telp` char(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Pembimbing','Siswa') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nis`, `nama`, `kelas`, `jurusan`, `tempat_pkl`, `no_telp`, `email`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 12, NULL, NULL, NULL, NULL, NULL, '123@gmail.com', 'irfan1301', '$2y$10$CCSEtbUItQNVIof33D9mfe4BxriNED5oHm.CY5nJdJMDyNuOAcIcm', 'Siswa', '2024-01-23 18:03:22', '2024-01-23 18:03:22'),
(2, NULL, 'Admin', NULL, NULL, NULL, NULL, NULL, 'admin', '$2y$10$3/Qjfb/4osyDWUS6qjQBauwznkXPENV1P7WLc2z9pe2LOicmMbVrG', 'Admin', '2024-01-24 00:23:18', '2024-01-24 00:23:18'),
(3, NULL, 'Pembimbing', NULL, NULL, NULL, NULL, NULL, 'pembimbing', '$2y$10$A/3gesvURLjqX5gH4sxAm.99K2DjJWdQ3bJHJ4tv86zDcuvCw6h7.', 'Admin', '2024-01-24 00:23:58', '2024-01-24 00:23:58'),
(5, 1, NULL, NULL, NULL, NULL, NULL, '1234@gmail.com', '12', '$2y$10$jISLrA4OODvRof.9HqyWJe7yG5i5Sl9n1S7C4B1zXVyXHVmJdj8A6', 'Siswa', '2024-01-24 00:34:15', '2024-01-24 00:34:15');

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
-- Indexes for table `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persetujuans`
--
ALTER TABLE `persetujuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_nis_unique` (`nis`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `persetujuans`
--
ALTER TABLE `persetujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
