-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 09:24 AM
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
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2024_01_10_021444_create_persetujuans_table', 1),
(45, '2024_01_10_021642_create_pengajuans_table', 1);

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
(1, 12321, 'example', '1710487591_3b. sistematika penulisan laporan PKL 2023-2024 (REV FEB).pdf', 'diterima', '2024-03-15 00:26:32', '2024-03-15 00:52:42'),
(2, 123, 'example', '1710487840_Rangkuman Materi DPPLG 2 Semester 2 (Metode Pengembangan Sistem & Data).pdf', 'diterima', '2024-03-15 00:30:40', '2024-03-15 01:14:14');

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
(1, 12321, 1, 1, '2024-03-15', 'Diterima', '2024-03-15 00:52:42', '2024-03-15 00:52:42'),
(2, 123, 2, 2, '2024-03-15', 'Diterima', '2024-03-15 01:14:14', '2024-03-15 01:14:14'),
(3, 123, 2, 2, '2024-03-15', 'Diterima', '2024-03-15 01:14:57', '2024-03-15 01:14:57');

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
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Pembimbing','Siswa') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nis`, `nama`, `kelas`, `jurusan`, `tempat_pkl`, `no_telp`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', NULL, NULL, NULL, NULL, 'Admin', '$2y$10$BoMZqvdb7uG6u8p//Dk6JOSKPnx2Cbn2vdjQhOvJfzwkvfwnOv/6C', 'Admin', '2024-03-14 23:13:44', '2024-03-14 23:13:44'),
(2, NULL, 'Pembimbing', NULL, NULL, NULL, NULL, 'Pembimbing', '$2y$10$qaSLkPZKB7CSV4uwAaPeDeg1NVM7PlpLyfL5MfEPuklUKRwCXtrrG', 'Pembimbing', '2024-03-14 23:13:44', '2024-03-14 23:13:44'),
(3, 12321, 'Faisa', 'XII PPLG 4', 'Pengembangan Perangkat Lunak dan Gim', 'Sekolahan.id', '08123212321', 'Alfarrel', '$2y$10$MTEO.0IprfllzvmPHEa2w.fH3ZkRbDPGiXIMeTkfXh7HVW3Ay3q3.', 'Siswa', '2024-03-14 23:13:44', '2024-03-15 00:13:17'),
(5, 123, 'Alfarrel', 'XII PPLG 4', 'Pengembangan Perangkat Lunak dan Gim', 'Sekolahan.id', '08123212321', 'faisa', '$2y$10$8qhuN6BXd5CzusyZIcUHOefQrsxstfXgKoWB8jXgOURlMUm.Kgtzq', 'Siswa', '2024-03-15 00:29:23', '2024-03-15 00:30:21');

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
  ADD UNIQUE KEY `users_nis_unique` (`nis`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persetujuans`
--
ALTER TABLE `persetujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
